<?php namespace App\Models;

use CodeIgniter\Model;

class Auth extends Model
{



    protected $table = 'lawyers';
    protected $primaryKey = 'id';

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['first_name','last_name','no','street', 'city',
                                'dob','nic','gender','email','phone',
                                'regno','user_name','password','c_password','details'];

    
                                protected $useTimestamps = true;
                                protected $createdField = 'created_at';
                                protected $updatedField = 'updated_at';
                                protected $deletedField = 'deleted_at';
                            
                                protected $validationRules = [];
                                protected $validationMessages = [];
                                protected $skipValidation = false;
}
