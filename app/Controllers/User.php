<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends BaseController
{
    protected $loginModel;

    private $session;

    public function __construct() {
        $this->loginModel = model('UserModel');
        $this->session = session();
    }

    public function loginView() {
        $data = array();
        $view = view("user/login", $data);
        
        return $view;
    }

    public function registerView() {
        $data = array();
        $view = view("user/register", $data);
        
        return $view;
    }

    public function registerProc() {
        $user_model = new UserModel();
        $request = $this->request; // 리퀘스트 객체 생성
        $result = true;

		$user_id = $request->getPost("user_id", FILTER_SANITIZE_SPECIAL_CHARS);
		$user_name = $request->getPost("user_name", FILTER_SANITIZE_SPECIAL_CHARS);
		$user_password = $request->getPost("user_password", FILTER_SANITIZE_SPECIAL_CHARS);

        if($user_id == null) {
            $result = false;
            $message = "아이디를 입력해주세요";
        }

        if($user_name == null) {
            $result = false;
            $message = "이름을 입력해주세요";
        }

        if($user_password == null) {
            $result = false;
            $message = "비밀번호를 입력해주세요";
        }
        
        if($result == true) {
            $data = array();
            $data["user_id"] = $user_id;
            $data["user_name"] = $user_name;
            $data["user_password"] = getAesEncrypt($user_password);

            $model_result = $user_model->procRegister($data);
        } else {
            $model_result["result"] = $result;
            $model_result["message"] = $message;
        }

        echo json_encode($model_result);
    }

    public function userIdCheck() {
        $user_model = new UserModel();
        $request = $this->request; // 리퀘스트 객체 생성

		$user_id = $request->getPost("user_id", FILTER_SANITIZE_SPECIAL_CHARS);

        $data = array();
		$data["user_id"] = $user_id;

        $model_result = $user_model->checkUserId($data);

        echo json_encode($model_result);
    }

    public function loginProc() {
        $user_model = new UserModel();
        $request = $this->request; // 리퀘스트 객체 생성

		$user_id = $request->getPost("user_id", FILTER_SANITIZE_SPECIAL_CHARS);
		$user_password = $request->getPost("user_password", FILTER_SANITIZE_SPECIAL_CHARS);

        $data = array();
		$data["user_id"] = $user_id;
		$data["user_password"] = getAesEncrypt($user_password);

        $model_result = $user_model->procLogin($data);

        if($model_result["result"] == true) {
            $db_data = $model_result["data"];
    
            $user_id = $db_data["user_id"];
            $user_name = $db_data["user_name"];

            $this->session->set("user_id", $user_id);
            $this->session->set("user_name", $user_name);
        }

        echo json_encode($model_result);
    }

    public function logout() {
        $this->session->remove(['user_id', 'user_name']);

        return redirect()->to('/');
    }
}