<?php namespace App\Models;

use App\Models\BaseModel;

class UserModel extends BaseModel
{
    protected $table         = 'user';
    protected $allowedFields = [
        'uid', 'pwd', 'address', 'birthday', 'email'
    ];
    protected $returnType    = 'App\Entities\UserEntity';
    protected $useTimestamps = true;

}