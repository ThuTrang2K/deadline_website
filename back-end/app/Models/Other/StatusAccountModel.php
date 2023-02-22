<?php

namespace App\Models\Other;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusAccountModel extends Model
{
    use HasFactory;
    protected $table = 'statusaccounts';
    protected $primaryKey = 'id_statusaccount';
    protected $fillable = ['name_statusaccount', 'code_statusaccount'];

    public static function getDataStatusAccounts()
    {
        return StatusAccountModel::get();
    }

}
