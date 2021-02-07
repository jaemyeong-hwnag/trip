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
        $builder = $this->builder();
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
}