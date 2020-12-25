<?php namespace App\Models;

use CodeIgniter\Model;


class UsersInfoModel extends Model
{
    protected $table      = 'info_users';
    protected $primaryKey = 'id_user';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;   

    protected $allowedFields = ['name', 'surname', 'id_country'];
 
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


}