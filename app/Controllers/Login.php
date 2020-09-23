<?php namespace App\Controllers;

class Login extends BaseController
{
    protected $loginModel;

    private $session;

    public function __construct(){
        $this->loginModel = model('UserModel');
        $this->session = session();
    }

    public function index()
    {
        return $this->view();
    }

    public function login(){
        $rtn_view = 'login';
        $post = $this->post;

        $where = [ 'uid' => $post['uid'], 'pwd' => $post['pwd'] ];

        $user = $this->loginModel->asArray()->where($where)->findAll(1)[0];

        if($user){
            $this->session->set([ 'no' => $user['no'], 'name' => $user['name'] ]);
            $rtn_view = 'home';
        }

        return redirect()->to('./'.$rtn_view);
    }

    public function logout(){
        $this->session->remove(['no', 'name']);

        return redirect()->to('./home');
    }
}