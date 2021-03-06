<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends BaseController
{
    protected $loginModel;

    private $session;

    public function __construct(){
        $this->loginModel = model('UserModel');
        $this->session = session();
    }

    public function loginView()
    {
        $data = array();
        $view = view("user/login", $data);
        
        return $view;
    }

    public function loginProc(){
        $user_model = new UserModel();

        $rtn_view = 'login';
        $post = $this->request;

        $request = $this->request; // 리퀘스트 객체 생성

		$user_id = $request->getPost("user_id", FILTER_SANITIZE_SPECIAL_CHARS);
		$user_password = $request->getPost("user_password", FILTER_SANITIZE_SPECIAL_CHARS);

        $data = array();
		$data["user_id"] = $user_id;
		$data["user_password"] = getAesEncrypt($user_password);

        $model_result = $user_model->procLogin($data);

        echo json_encode($model_result);
    }

    public function logout(){
        $this->session->remove(['no', 'name']);

        return redirect()->to('./home');
    }
}