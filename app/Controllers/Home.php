<?php namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    private $tourModel; // 모델 변수

    public function __construct()
    {
        $this->tourModel = new HomeModel(); // TourModel 생성
    }

	public function index()
	{
        $tourModel = $this->tourModel; // TourModel

	    $data = $tourModel->getHomeList(); // Home에서 사용 하는 데이터
        $view = view( "home", $data );

		return $view;
	}
}
