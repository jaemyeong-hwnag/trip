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
     * @param none
     * @return array $data
     */
    public function getHomeList()
    {
        $data = array(); // return 데이터
        $select_array = array(           
            'no', 'name', 'sdate', 'edate', 'price', 
            'pic', 'kind_no', 'air_no', 'txt'
        ); // select 겂

        $this->allowedFields = $select_array;
        
        $data["total_count"] = $this->countAll();
        $data["k_count"] = $this->where('no',8)->countAll();
        $data["h_count"] = $this->where('no',7)->countAll();
        $data["tour_rnadom_list"] = $this->orderBy('no', 'RANDOM')->findAll(4);

        return $data;
    }
}