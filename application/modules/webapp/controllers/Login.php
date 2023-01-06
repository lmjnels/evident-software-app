<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	function __construct(){
		parent::__construct();
	}

	//redirect if needed, otherwise display the user list
	function index(){
		if( !$this->identity() ){
			redirect('webapp/user/login', 'refresh');
		}
		$this->users();
	}

	//log the user in
	function login(){
		if ( $this->input->post() ){
			$remember = (bool) $this->input->post('remember');
			$url	  = $this->api_end_point.'user/login';
			$postdata = $this->ssid_common->_prepare_curl_post_data( $this->input->post() );
			$response = $this->ssid_common->doCurl($url, $postdata, $options );
			if ( isset($response->auth_token) && !empty($response->auth_token) ){
				$this->session->set_userdata('auth_data', $response);				
				redirect('/webapp/home', 'refresh');
			}else{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('webapp/user/login', 'refresh');
			}
		}else{
			$data = false;
			$this->_render_webpage('user/login', $data);
		}
	}

	//log the user out
	function logout(){
		redirect('/webapp/user/login', 'refresh');
	}
}