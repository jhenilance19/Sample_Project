<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	Public function __construct() { 
        parent::__construct(); 
         
        $this->load->model('Usermodel');
		$this->load->library('form_validation');
    } 


	public function index(){

		if($this->session->userdata('user_type') == 'user'){
			redirect('main');
		}elseif($this->session->userdata('user_type') ==  'admin'){
				redirect('main/admin');
		}elseif($this->session->userdata('user_type') ==  'monitoring'){
			redirect('main/monitoring');
		}else{

		$this->load->view('templates/header');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}}


	//Session  
	public function authenticate(){
	
		$username    = $this->input->post('username',TRUE);
		$password = md5($this->input->post('password',TRUE));
		$validate = $this->Usermodel->validate($username,$password);

		


		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
			$username  = $data['username'];
			$user_type = $data['user_type'];
			$fname = $data['fname'];
			$mname = $data['mname'];
			$lname = $data['lname'];
			$user_email = $data['user_email'];
			$designation = $data['designation'];
			$user_id = $data['user_id'];
			$div_unit = $data['div_unit'];
			$sesdata = array(
				'username'     => $username,
				'user_type'     => $user_type,
				'fname'     => $fname,
				'mname'     => $mname,
				'lname'     => $lname,
				'user_email'     => $user_email,
				'designation'     => $designation,
				'user_id'     => $user_id,
				'div_unit'     => $div_unit,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			$isLoggedIn = $this->session->user_id;
			
//Login User Type
		if($user_type == 'user'){
			echo $this->session->set_flashdata('success','Welcome Back!');
			redirect('main');
		}elseif( $user_type  ==  'admin'){
				echo $this->session->set_flashdata('success','Welcome Back!');
				redirect('main/admin');
		}elseif( $user_type  ==  'monitoring'){
			echo $this->session->set_flashdata('success','Welcome Back!');
			redirect('main/monitoring');
		}elseif ($user_type == ''){
			redirect('main/newuser');
		}
		}elseif($validate->num_rows() == False){
			echo $this->session->set_flashdata('error','Wrong username or password!');
			redirect($route);
		}
	  }


	  //Logout	  
	  public function logout(){
		session_destroy();
		redirect($route);
	}
}
