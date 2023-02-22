<?php

namespace App\Models\Guards;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdministratorModel extends Model
{
    use HasFactory;

    public function getGuarded()
    {
        return "administrator";
    }
    protected $table = 'administrators';
    protected $primaryKey = 'id_administrator';
    protected $fillable = [
        'name_administrator', 'username', 'password', 'role_id', 'statusaccount_id'
    ];
    protected $hidden = ['password'];

}
