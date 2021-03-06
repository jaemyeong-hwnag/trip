<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends BaseModel
{
    /**
	 * @see 회원가입
	 * @param array $data - 데이터 입력
	 * @return array $model_result - 회원가입정보. DB입력 결과와 insert_id 반환
	 */
    public function procLogin($data)
    {
        // 기본 셋팅
        $table = "user";
        $db_result = array(); // return 데이터

        $user_id = $data["user_id"];
		$user_password = $data["user_password"];

        // select
        $select_array = array();
        array_push($select_array, "*");

        // where
        $where_array = array();
        array_push($where_array, array("user_id", $user_id, false));
		array_push($where_array, array("user_password", $user_password, false));

        // 쿼리문 셋팅
        $builder = $this->builder($table);

        $builder->select($select_array); // select
        $builder->where('user_id', $user_id, true); // where
        $builder->where('user_password', $user_password, true); // where

        // 쿼리 실행
        $cnt = $builder->countAllResults(false);
        $db_result = $this->first();

        if($cnt > 0) {
			$result = true;
			$message = "로그인 성공";
		} else {
            $result = false;
			$message = "로그인 실패";
        }

        $model_result = array();
		$model_result["result"] = $result;
		$model_result["message"] = $message;
		$model_result["data"] = $db_result;
        
        return $model_result;
    }
}