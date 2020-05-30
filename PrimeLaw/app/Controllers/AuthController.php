<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\Auth as Auth;

class AuthController extends BaseController
{

    public function new()
	{
		return view('admin/dash');
	}

   
    public function index()
	{
		return view('layouts/Lawyerdash');
	}


	public function register()
	{
		return view('login/RegistrationView');
	}

	public function registeruser()
    {
        helper('form');
        helper('alerts');
		helper(['form', 'url']);
		
        $auth = new Auth();
    
			//validate inputs
            if (!$this->validate([
                'first_name'    => 'required|max_length[255]',
                'last_name'     => 'required|max_length[255]',
                'no'            => 'required|max_length[255]',
                'street'        => 'required|max_length[255]',
                'city'          => 'required|max_length[255]',
                'dob'           => 'required',
                'nic'           => 'required',
                'gender'        => 'required',
                'email'         => 'required|valid_email|is_unique[lawyers.email]',
                'phone'         => 'required|max_length[10]',
                'regno'         => 'required',
                'user_name'     => 'required|min_length[5]',
                'password'      => 'required|min_length[8]',
                'c_password'    => 'required|matches[password]',
                'details'       => 'required|min_length[30]|max_length[5000]',
     
            ])) {
                return view('login/RegistrationView', [
                    'validation' => $this->validator,
                ]);
            } else {
    
        $data =
            ['first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'no' => $this->request->getVar('no'),
            'street' => $this->request->getVar('street'),
            'city' => $this->request->getVar('city'),
            'dob' => $this->request->getVar('dob'),
            'nic' => $this->request->getVar('nic'),
            'gender' => $this->request->getVar('gender'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'regno' => $this->request->getVar('regno'),
            'user_name' => $this->request->getVar('user_name'),
            'password' => md5($this->request->getVar('password')),
            'c_password' => $this->request->getVar('c_password'),
            'details' => $this->request->getVar('details'),
        ];
               //alert('success', "You are successfully logging!");
              
               $auth->insert($data);
               print "<script type=\"text/javascript\">alert('You have successfully created Your Account!');</script>";
               return view('login/LoginView');
        }      
		}


        public function login()
        {
            return view('login/LoginView');
        }

        public function loginuser()
        {
            helper('form');
            helper('alerts');
            helper(['form', 'url']);
           
            $auth = new Auth();
    
            //validate inputs
        if (!$this->validate([
            'email'        => 'required|valid_email',
            'password'     => 'required',
 
        ])) {
            return view('login/LoginView', [
                'validation' => $this->validator,
            ]);
        } else {

            $email=$this->request->getVar('email');
            $password= $this->request->getVar('password');
            //Encrypt the password
            $encrypted_password =  md5($this->request->getVar('password'));
    
            $db  = \Config\Database::connect();
            $user = $db->table('lawyers')
                        ->where('email', $email)
                        ->where('password', $encrypted_password)
                        ->get();
                       
            $user=$user->getResult();
                        
            if(count($user) == 1){
                
                //start the session
                helper('session');
                $session = \Config\Services::session($config);
                $session = session();
                $session_data = [
                    'id' => $user[0]->id
                ];
                $session->set($session_data);
                if(isset($_SESSION['id'])){
                    $session = session()->start();
                    print "<script type=\"text/javascript\">alert('You are successfully logging!');</script>";
                    return view('layouts/Lawyerdash');
                }
                else{
                    print "<script type=\"text/javascript\">alert('Something went wrong!');</script>";
                   // alert('warning', "Something went wrong!");
                    return view('login/LoginView');
                }
            }
            else{
               // alert('warning', "Invalid email or password");
               print "<script type=\"text/javascript\">alert('Invalid email or password!');</script>";
                return view('login/LoginView');
            }
    }
}
            public function update()
            {
                
            $model = new \App\Models\Auth();
            $session =\Config\Services::session($config); 
            $data=[
                'lawyers'=> $model->where('id',$session->get('id'))->findAll()
            ];
          
                return view('lawyer/Update',$data);
            }



        public function updateuser()
        {
            $session = session()->start();
            helper('alerts');
            helper('form');
            helper(['form', 'url']);
            $model = new \App\Models\Auth();
            $userId=$_SESSION['id'];
           
            if (!$this->validate([
                'first_name'    => 'required|max_length[255]',
                'last_name'     => 'required|max_length[255]',
                'no'            => 'required|max_length[255]',
                'street'        => 'required|max_length[255]',
                'city'          => 'required|max_length[255]',
                'nic'           => 'required',
                'email'         => 'required|valid_email',
                'phone'         => 'required|min_length[10]',
                'details'       => 'required|min_length[30]|max_length[5000]',
     
            ]))
            {
                return view('lawyer/Update', [
                    'validation' => $this->validator,
                ]);
            } else {
    
            $data =
            ['first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'no' => $this->request->getVar('no'),
            'street' => $this->request->getVar('street'),
            'city' => $this->request->getVar('city'),
            'nic' => $this->request->getVar('nic'),
            //'pic' => $this->request->getVar('pic'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'details' => $this->request->getVar('details'),
        ];
               //alert('success', "You are successfully logging!");
               $model->update($userId, $data);
               print "<script type=\"text/javascript\">alert('You have successfully updated your details!');</script>";
             $newData=[
                'lawyers'=> $model->where('id',$userId)->findAll()
            ];
              
            return view('lawyer/View',$newData);

        }}


        public function viewuser(){
     
            helper('alerts');

            $model = new \App\Models\Auth();
            $session =\Config\Services::session($config); 
            $data=[
                'lawyers'=> $model->where('id',$session->get('id'))->findAll()
            ];
          
            return view('lawyer/View',$data);
            
          
   
}

public function logout(){
    helper('session');
    $session = session();
    $session->destroy();
    return view('login/LoginView');
   }    

   public function deleteuser(){
 
   
    $db  = \Config\Database::connect();
    $session =\Config\Services::session($config); 
    $authController = $db->table('lawyers');
    $authController->where('id', $session->get('id'));
    $authController->delete();

    print "<script type=\"text/javascript\">alert('You have successfully deleted Your Account!');</script>";
    return view('login/LoginView');
   }    




    }
