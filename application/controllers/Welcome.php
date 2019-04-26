<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('index');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function beauty()
	{
		$this->load->view('beauty');
	}

	// public function viewmore()
	// {
	// 	$this->load->view('viewmore');
	// }

	// public function viewmore2()
	// {
	// 	$this->load->view('viewmore2');
	// }

	// public function fruits()
	// {
	// 	$this->load->view('fruits');
	// }




	public function logincheck()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model("DB");
		$output = $this->DB->getUser($username, $password);
		$count = count($output);
		if($count != 1)
		{
			// Wrong credentials do something
			redirect('Welcome/wLogin');
		}
		else
		{
			$data = array('username' => $output[0]->username );
			$this->load->view('dash', $data);
			// redirect('Welcome/index');
		}
	}

	public function wLogin()
	{
		$this->load->view('wLogin');
	}

	public function insert()
	{
		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		$lastname = $this->input->post('lastname');
		$username = $this->input->post('username');
		$emailid = $this->input->post('emailid');
		$mobilenumber = $this->input->post('mobilenumber');
		$housenumber= $this->input->post('housenumber');
		$street1 = $this->input->post('street1');
		$street2 = $this->input->post('street2');
		$city_town = $this->input->post('city_town');
		$state = $this->input->post('state');
		$pincode = $this->input->post('pincode');
		$password = $this->input->post('password');
		$this->load->model("DB");
		$output = $this->DB->insert($firstname, $middlename, $lastname, $username, $emailid, $mobilenumber, $housenumber, $street1, $street2, $city_town, $state, $pincode, $password);
		if($output != "inserted")
		{
			// Wrong credentials do something
			echo 'Wrong Page';
		}
		else
		{
			redirect('Welcome/login');
		}

	}
}
