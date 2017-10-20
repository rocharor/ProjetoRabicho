<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Site\Produto;
use App\Models\Site\Favorito;
use App\Models\Acl\Role;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Relation Roles
     * @return object
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Validate permission the user
     * @param  Object/String  $role = Object of Roles or string of one role
     * @return boolean
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name',$role);
        }

        return !! $role->intersect($this->roles)->count();
    }

    public function getQuantidades()
    {
        $data['ativos'] = $this->count();
        $data['excluidos'] = $this->onlyTrashed()->count();

        return $data;
    }
}
