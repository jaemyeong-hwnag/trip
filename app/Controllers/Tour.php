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
     * view tour product
     * @param int $no 조회 할 tour 키
     * @return view
     */
    public function tourView(int $no = null)
    {
        if($no == null) return redirect()->to('/home'); // 홈 으로

        $tourModel = $this->tourModel; // TourModel
        $data = $tourModel->getTourView($no); // data

        return view('/tour/tourView', $data);
    }
}
