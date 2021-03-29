<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends BaseController
{
	/**
	 * 로그인 페이지
	 * 
	 * @author 황재명
	 * @param null
	 * @return view
	 */
    public function loginView() {
        $data = array();
        $view = view("user/login", $data);
        
        return $view;
    }

	/**
	 * 회원가입 페이지
	 * 
	 * @author 황재명
	 * @param null
	 * @return view
	 */
    public function registerView() {
        $data = array();
        $view = view("user/register", $data);
        
        return $view;
    }

	/**
	 * 회원가입 기능
	 * 
	 * @author 황재명
	 * @param post user_id 유저 아이디
	 * @param post user_name 유저 이름
	 * @param post user_password 유저 비밀번호
	 * @return json $model_result 회원가입 결과
	 */
    public function registerProc() {
        $user_model = new UserModel(); // UserModel 생성
        $request = $this->request; // 리퀘스트 객체 생성
        $result = true; // 실행 결과 true:성공, false:실패

		// post 데이터
		$user_id = $request->getPost("user_id", FILTER_SANITIZE_SPECIAL_CHARS);
		$user_name = $request->getPost("user_name", FILTER_SANITIZE_SPECIAL_CHARS);
		$user_password = $request->getPost("user_password", FILTER_SANITIZE_SPECIAL_CHARS);

		// 아이디 확인
        if($user_id == null) {
            $result = false;
            $message = "아이디를 입력해주세요";
        }

		// 이름 확인
        if($user_name == null) {
            $result = false;
            $message = "이름을 입력해주세요";
        }

		// 비밀번호 확인
        if($user_password == null) {
            $result = false;
            $message = "비밀번호를 입력해주세요";
        }
        
		// 맞는 정보가 올경우
        if($result == true) {
            $data = array();
            $data["user_id"] = $user_id;
            $data["user_name"] = $user_name;
            $data["user_password"] = getAesEncrypt($user_password); // 비밀번호 암호화

            $model_result = $user_model->procRegister($data); // DB insert
        } else {
            $model_result["result"] = $result; // 결과
            $model_result["message"] = $message; // 결과 메시지
        }

        echo json_encode($model_result); // 결과정보 json으로 return
    }

	/**
	 * 아이디 중복 체크
	 * 
	 * @author 황재명
	 * @param post user_id 중복체크 할 유저 아이디
	 * @return json $model_result 중복체크 결과
	 */
    public function userIdCheck() {
        $user_model = new UserModel(); // UserModel 생성
        $request = $this->request; // 리퀘스트 객체 생성

		// post 데이터
		$user_id = $request->getPost("user_id", FILTER_SANITIZE_SPECIAL_CHARS);

        $data = array(); // 기본 리턴 할 데이터
		$data["user_id"] = $user_id; // 유저 아이디

        $model_result = $user_model->checkUserId($data); // DB user_id 확인

        echo json_encode($model_result); // 결과정보 json으로 return
    }

	/**
	 * 로그인 기능
	 * 
	 * @author 황재명
	 * @param post user_id 유저 아이디
	 * @param post user_password 유저 비밀번호
	 * @return json $model_result 로그인 결과
	 */
    public function loginProc() {
        $user_model = new UserModel(); // UserModel 생성
        $request = $this->request; // 리퀘스트 객체 생성
		$session = session(); // 세션

		// post 정보
		$user_id = $request->getPost("user_id", FILTER_SANITIZE_SPECIAL_CHARS);
		$user_password = $request->getPost("user_password", FILTER_SANITIZE_SPECIAL_CHARS);

		// 검증할 데이터
        $data = array();
		$data["user_id"] = $user_id;
		$data["user_password"] = getAesEncrypt($user_password); // 비밀번호 암호화

        $model_result = $user_model->procLogin($data); // DB에 유저 정보 조회
		$result = $model_result["result"]; // DB조회 결과

        if($result == true) {
            $db_data = $model_result["data"]; // 조회한 DB정보
    
			// 정보 셋팅
            $user_id = $db_data["user_id"];
            $user_name = $db_data["user_name"];

			// 세션에 정보 저장
            $session->set("user_id", $user_id);
            $session->set("user_name", $user_name);
        }

        echo json_encode($model_result); // 결과정보 json으로 return
    }

	/**
	 * 로그아웃 기능
	 * 
	 * @author 황재명
	 * @param null
	 * @return view // 메인 view로 리턴
	 */
    public function logout() {
		$session = session(); // 세션

        $session->remove(['user_id', 'user_name']); // 로그인 한 세션정보 지우기

        return redirect()->to('/');
    }
}