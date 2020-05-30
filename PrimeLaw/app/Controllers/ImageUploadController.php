<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\ImageUpload as ImageUpload;


class ImageUploadController extends BaseController
{

    

    public function index() {
        return view('files/form');
    }


    public function store()
    {  

    helper('alerts');
    helper(['form', 'url']);
     
    $imageUpload = new ImageUpload();

   if (!$this->validate([
         'banner' => ['uploaded[banner]','mime_in[banner,image/jpg,image/jpeg,image/gif,image/png]','max_size[banner,10000]',],
    ])) {
        return view('login/LoginView', [
            'validation' => $this->validator,
        ]);
    } else {

        $file = $this->request->getFile('banner');
        $file->move('public/uploads');
        
        
        $data = [
 
            'name' =>  $file->getClientName(),
            'type'  => $file->getClientMimeType(),
            'file' => $file
          ];
 
          $save = $imageUpload->insert($data);
          $msg = 'File has been uploaded';
    }
      

echo '<img src= "public/uploads/'.$data['name'].'" alt="#" width=500 height=500 />';

        }

    }





