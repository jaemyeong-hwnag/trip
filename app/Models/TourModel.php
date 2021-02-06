<?php namespace App\Models;

use CodeIgniter\Model;

class TourModel extends Model
{
    protected $table = 'tour'; // 테이블 명

    /**
     * 여행상품 상세페이지 데이터
     * 
     * @param int $no 조회 할 tour 키
     * @return array 조호 데이터
     */
    public function getTourView(int $no)
    {
        $builder = $this->builder();
        // 기본 셋팅
        $data = array(); // return 데이터

        // from
        $table = "tour as t"; // table명

        // select
        $select_array = array();
        array_push($select_array, "t.no as no");
        array_push($select_array, "t.name as name");
        array_push($select_array, "t.sdate as sdate");
        array_push($select_array, "t.edate as edate");
        array_push($select_array, "t.price as price");
        array_push($select_array, "t.pic as pic");
        array_push($select_array, "t.air_no as air_no");
        array_push($select_array, "t.txt as txt");

        array_push($select_array, "a.name as air_name");

        // 쿼리문 셋팅
        $builder = $this->builder();

        $builder->from($table); // from
        $builder->select($select_array); // select
        $builder->join("air as a", "a.no = t.air_no", "left"); // join
        $builder->where('t.no', $no); // where

        // 쿼리 실행
        $data = $this->first();

        return $data;
    }
}