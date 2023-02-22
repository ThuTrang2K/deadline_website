<?php

namespace App\Models\Other;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'id_role';
    protected $fillable = ['name_role'];

    public static function getDataRoles()
    {
        return RoleModel::get();
    }
}
