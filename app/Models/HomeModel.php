<?php namespace App\Models;

use CodeIgniter\Model;
class HomeModel extends Model
{
    protected $table = 'tour';

    /**
     * 홈에서 사용하는 정보를 가져온다.
     * 
     * @author 황재명
     * @see app\Controllers\Home.php
     * @param null
     * @return array $data
     */
    public function getHomeList()
    {
        $data = array(); // return 데이터
        $select_array = array(); // select 값

        // select
        array_push($select_array, "tour_no");
        array_push($select_array, "tour_name");
        array_push($select_array, "tour_price");
        array_push($select_array, "tour_picture");
        array_push($select_array, "tour_text");

        $this->allowedFields = $select_array;
        
        // 쿼리 실행
        $data["total_count"] = $this->countAll();
        $data["k_count"] = $this->where('tour_no',8)->countAll();
        $data["h_count"] = $this->where('tour_no',7)->countAll();
        $data["tour_list"] = $this->orderBy('tour_no', 'RANDOM')->findAll(4);

        return $data;
    }
}