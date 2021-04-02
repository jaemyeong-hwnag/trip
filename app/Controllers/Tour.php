<?php namespace App\Controllers;

use App\Models\TourModel;
use CodeIgniter\Controller;
class Tour extends BaseController
{
	/**
	 * 상품 상세페이지
	 * 
	 * @author 황재명
	 * @param int $tour_no 조회 할 tour 키
	 * @return view
	 */
	public function tourView(int $tour_no = null) {
		if($tour_no == null) return redirect()->to('/home'); // 홈 으로

		$data = array(); // view로 넘길 기본 데이터
		$tourModel = new TourModel(); // TourModel 생성

		$data = $tourModel->getTourView($tour_no); // DB 데이터 가져오기

		$view = view('/tour/tourView', $data);
		return $view;
	}

	/**
	 * 여행 상품 리스트
	 * 
	 * @author 황재명
	 * @param null
	 * @return view
	 */
	public function tourList() {
		$data = array(); // view로 넘길 기본 데이터

		$view = view('/tour/tourList', $data);
		return $view;
	}    
	
	/**
	 * 여행 상품 리스트 가져오기
	 * 
	 * @author 황재명
	 * @param POST page // 페이징 정보
	 * @param POST search_word // 검색어
	 * @return view
	 */
	public function tourListGet() {
		$tourModel = new TourModel(); // TourModel 생성
		$request = $this->request; // 리퀘스트 객체 생성
		$result = true; // 결과
		$data = array(); // view로 넘길 기본 데이터

		$page = $request->getGetPost("page", FILTER_SANITIZE_SPECIAL_CHARS); // 페이지 
		$search_word = $request->getGetPost("search_word", FILTER_SANITIZE_SPECIAL_CHARS); // 검색어

		$data["offset"] = isset($page) ? $page-1 : 0; // 페이징 처리
		$data["search_word"] = isset($search_word) ? $search_word : null; // 검색어 확인

		$model_result = $tourModel->getTourList($data); // 여행정보 DB에서 가져오기

		$view = view('/tour/tourListGet', $model_result);
		return $view;
	}
}
