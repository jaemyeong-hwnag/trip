<?php namespace App\Controllers;

use App\Models\TourModel;
use CodeIgniter\Controller;
class Tour extends BaseController
{
    private $tourModel; // TourModel

    public function __construct()
    {
       $this->tourModel = new TourModel(); // TourModel 생성
    }

    /**
     * 상품 상세페이지
     * 
     * @param int $tour_no 조회 할 tour 키
     * @return view
     */
    public function tourView(int $tour_no = null)
    {
        if($tour_no == null) return redirect()->to('/home'); // 홈 으로

        $tourModel = $this->tourModel; // TourModel
        $data = $tourModel->getTourView($tour_no); // data

        return view('/tour/tourView', $data);
    }
}
