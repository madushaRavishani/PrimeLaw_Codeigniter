<?php namespace App\Models;

use CodeIgniter\Model;

class ImageUpload extends Model
{



    protected $table = 'files';
    protected $primaryKey = 'id';

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [ 'name','type','file'];

    
                                
}
