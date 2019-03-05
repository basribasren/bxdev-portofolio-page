<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
	}
	function _remap($method, $args)
    {
 
       if (method_exists($this, $method))
       {
           $this->$method($args);
       }
       else
       {
            $this->index($method, $args);
       }
    }
	
	public function index()
	{
		$this->load->view('layout/layout');
	}

	public function pdf($args)
	{
		$data['file'] = 'assets/pdf/'.$args[0];
		// echo 'ID of product is'. $args[0].'<br/>';
		$this->load->view('layout/layoutPDF', $data);
	}
}
