<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Dashboard extends Model
{
    private $modelUser;

    public function __construct(User $user)
    {
        $this->modelUser = $user;
    }

    public function getDatadashboard()
    {
        $data['usuariosTotal'] = $this->modelUser->getQuantidades();

        return $data;
    }
}
