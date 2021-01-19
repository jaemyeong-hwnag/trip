<?php namespace App\Controllers;

class Tour extends BaseController
{
	public function index()
	{
        
	}

    /**
     * view tour product
     * @param int $no
     * @return \CodeIgniter\HTTP\RedirectResponse|string
     */
	public function detail( int $no ){
        if(!$no) return redirect()->to( './home' );
        $data['row'] = $this->get_row($no);

        return view( 'tourView', $data );
    }

	//--------------------------------------------------------------------

    /**
     * select DB tour in no field
     * @param $no
     * @return array
     */
    private function get_row( $no ){
        $tourModel = model('TourModel');
        return $tourModel->find( $no );
    }
}
