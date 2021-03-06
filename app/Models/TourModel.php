<?php namespace App\Models;

use CodeIgniter\Model;

class TourModel extends Model
{
    protected $table = 'tour'; // 테이블 명

    /**
     * 여행상품 상세페이지 데이터
     * 
     * @param int $tour_no 조회 할 tour 키
     * @return array 조호 데이터
     */
    public function getTourView(int $tour_no)
    {
        // 기본 셋팅
        $data = array(); // return 데이터

        // from
        $table = "tour as t"; // table명

        // select
        $select_array = array();
        array_push($select_array, "t.tour_no as tour_no");
        array_push($select_array, "t.tour_name as tour_name");
        array_push($select_array, "t.start_date as start_date");
        array_push($select_array, "t.end_date as end_date");
        array_push($select_array, "t.tour_price as tour_price");
        array_push($select_array, "t.tour_picture as tour_picture");
        array_push($select_array, "t.tour_category_no as tour_category_no");
        array_push($select_array, "t.tour_text as tour_text");

        array_push($select_array, "a.airline_name as airline_name");

        // 쿼리문 셋팅
        $builder = $this->builder();

        $builder->from($table); // from
        $builder->select($select_array); // select
        $builder->join("airline as a", "a.airline_no = t.airline_no", "left"); // join
        $builder->where('t.tour_no', $tour_no); // where

        // 쿼리 실행
        $data = $this->first();

        return $data;
    }

    public function getTourList($data) {
        $search_word = $data["search_word"]; // 검색어
        $offset = $data["offset"]; // 페이지
        $listCount = 4;

        // from
        $table = "tour as t"; // table명

        // select
        $select_array = array();
        array_push($select_array, "t.tour_no as tour_no");
        array_push($select_array, "t.tour_name as tour_name");
        array_push($select_array, "t.tour_price as tour_price");
        array_push($select_array, "t.tour_picture as tour_picture");
        array_push($select_array, "t.tour_text as tour_text");

        // 쿼리문 셋팅
        $builder = $this->builder($table);
        $builder->select($select_array); // select
        if($search_word != null) {
            $builder->orlike('t.tour_name', $search_word, "both"); // where
        }
        $builder->limit($listCount, $offset); // limit
        $builder->orderBy("t.tour_no", "desc");

        $tourCount = $builder->countAllResults(false);

        $db_result = $builder->get(); // 쿼리 실행
		$db_list = $db_result->getResult();

        // 넘길 데이터 정리
		$model_result = array();
		$model_result["result"] = true; // 성공여부
		$model_result["db_list"] = $db_list; // 조회한 데이터
		$model_result["pageCount"] = ceil($tourCount/$listCount); // 총 리스트 수
        
        return $model_result;
    }
}