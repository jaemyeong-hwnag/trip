<?php namespace App\Controllers;

use App\Models\TourModel;
use CodeIgniter\Controller;
class Tour extends BaseController
{
    /**
     * 상품 상세페이지
     * 
     * @param int $tour_no 조회 할 tour 키
     * @return view
     */
    public function tourView(int $tour_no = null) {
        if($tour_no == null) return redirect()->to('/home'); // 홈 으로

        $tourModel = new TourModel(); // TourModel 생성
        $data = $tourModel->getTourView($tour_no); // data

        return view('/tour/tourView', $data);
    }

    public function tourList() {
        $data = array();
        $view = view('/tour/tourList', $data);

        return $view;
    }    
    
    public function tourListGet() {
        $tourModel = new TourModel(); // TourModel 생성
        $request = $this->request; // 리퀘스트 객체 생성
        $result = true;
        $data = array();

		$page = $request->getGetPost("page", FILTER_SANITIZE_SPECIAL_CHARS);
		$search_word = $request->getGetPost("search_word", FILTER_SANITIZE_SPECIAL_CHARS);

        $data["offset"] = isset($page) ? $page-1 : 0;
        $data["search_word"] = isset($search_word) ? $search_word : null;

        $model_result = $tourModel->getTourList($data);

        $view = view('/tour/tourListGet', $model_result);
        return $view;
    }
}
