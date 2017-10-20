<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\User;
use App\Models\Acl\Role;
use DB;

class UserController extends Controller
{
    public $dataTop;
    public $modelUser;
    public $modelRole;

    public function __construct(DashboardController $dashboard, User $user, Role $role)
    {
        $this->dataTop = $dashboard->dashboard();
        $this->modelUser = $user;
        $this->modelRole = $role;
    }

    public function index()
    {
        $data = $this->dataTop;

        $data['users'] = $this->modelUser->all();

        return view('admin/contents/users/users', [
            'data' => $data
        ]);
    }

    public function edit($id)
    {
        $data = $this->dataTop;

        $data['user'] = $this->modelUser->find($id);
        $data['roles'] = $this->modelRole->all();
        $data['role-user'] = DB::table('role_user')->select()->where('user_id', $id)->get();

        $aux = [];
        foreach ($data['role-user'] as $role) {
            $aux[] = $role->role_id;
        }
        $data['role-user'] = $aux;

        return view('admin/contents/users/userEdit', [
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $user = $this->modelUser->find($request->id);

        $user->name = $request->nome;
        $user->email = $request->email;

        $retorno = $user->save();

        if($retorno){
            return redirect()->route('admin.user.edit', $request->id)->with('sucesso','Dados salvos com sucesso.');
        }

        return redirect()->route('admin.user.edit', $request->id)->with('erro','Erro ao salvar.');
    }

    public function delete($id)
    {
        $user = $this->modelUser->find($id);

        if ($user->delete()) {
            return redirect()->route('admin.user.list')->with('sucesso','Usuário excluído com sucesso.');
        }

        return redirect()->route('admin.user.list')->with('erro','Erro ao excluir.');
    }
}
