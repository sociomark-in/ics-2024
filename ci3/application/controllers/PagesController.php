<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagesController extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['page']['title'] = "India Climate Summit 2024";
		$this->load->view('welcome_message', $data);
	}
	public function gallery()
	{
		$data['page']['title'] = "India Climate Summit 2024";
		$this->load->view('gallery', $data);
	}
	public function articles()
	{
		$data['page']['title'] = "India Climate Summit 2024";
		$this->load->view('pages/articles', $data);
	}
}
