<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
helper('data');
class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

    /**
     * retrieve an array of all of the segments
     * @var array
     */
    protected $segments = [];

    /**
     * @var string
     */
    protected $uri = '';

    /**
     * @var array
     */
    protected $post = [];
    protected $get = [];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
        helper('data');
		parent::initController($request, $response, $logger);
        $this->uri = current_url(true);
        $this->segments = $this->uri->getSegments();

        $request = service('request');
        $this->get = $request->getGet();
        $this->post = $request->getPost();

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}

    /**
     *
     * @param array $args
     * @return string
     */
	public function view( $args = [] ){
        $segments = $this->segments;
        $data = arrayCheck( $args, 'data' ) ? arrayCheck( $args, 'data' ) : [];
        if( !$viewName = arrayCheck( $args, 'view' ) ) {
            $viewName = array_pop($segments);
            $viewName = $viewName ? $viewName : 'home';
        }

        return view($viewName, $data);
    }

}
