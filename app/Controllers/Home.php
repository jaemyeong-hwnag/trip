<?php namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
	/**
	 * 메인 페이지
	 * 
	 * @author 황재명
	 * @param null
	 * @return view
	 */
	public function index()
	{
		$tourModel = new HomeModel(); // TourModel 생성

		$data = $tourModel->getHomeList(); // Home에서 사용 하는 데이터
		$view = view( "home", $data );

		return $view;
	}
}
