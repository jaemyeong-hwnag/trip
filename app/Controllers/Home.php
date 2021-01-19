<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	    $data = $this->index_data();
		return view( "home", ['data' => $data] );
	}

    /**
     * @see home에 필요한 정보 가져오기
     * @return array $data
     */
    protected function index_data(){
        $tourModel = model('TourModel');

        $data["total_count"] = $tourModel->countAll();
        $data["k_count"] = $tourModel->where('no',8)->countAll();
        $data["h_count"] = $tourModel->where('no',7)->countAll();
        $data["list"] = $tourModel->orderBy('no', 'RANDOM')->findAll(4);

        return $data;
    }
}
