<?php defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Checklist extends REST_Controller {

    function __construct(){
        // Construct the parent class
        parent::__construct();
		$this->load->model( 'Checklist_model','checklist_service' );
		$this->form_validation->set_error_delimiters($this->config->item( 'error_start_delimiter', 'ion_auth' ), $this->config->item( 'error_end_delimiter', 'ion_auth' ));
		$this->lang->load( 'auth' );
    }
	
	/**
	* Search through list of Jobs
	*/
	public function checklist_job_search_get(){
		$account_id 	= ( int ) $this->get( 'account_id' );
		$job_id 		= ( int ) $this->get( 'job_id' );
		$limit 		 	= ( !empty( $this->get( 'limit' ) ) )  ? (int) $this->get( 'limit' )  : DEFAULT_LIMIT;
		$offset 	 	= ( !empty( $this->get( 'offset' ) ) ) ? (int) $this->get( 'offset' ) : DEFAULT_OFFSET;
		$where 		 	= $this->get( 'where' );
		$order_by    	= $this->get( 'order_by' );
		$search_term 	= trim( urldecode( $this->get( 'search_term' ) ) );

		if( !$this->account_service->check_account_status( $account_id ) ){
			$message = [
				'status' 	=> FALSE,
				'message' 	=> 'Invalid main Account ID.',
				'job' 		=> NULL,
				'counters' 	=> NULL
			];
			$this->response( $message, REST_Controller::HTTP_OK );
		}

		$job_lookup = $this->checklist_service->checklist_job_search( $account_id, $job_id, $search_term, $where, $order_by, $limit, $offset );

		if( !empty( $job_lookup ) ){
			$message = [
				'status' 	=> TRUE,
				'message' 	=> $this->session->flashdata( 'message' ),
				'job' 		=> ( !empty( $job_lookup->records ) ) ? $job_lookup->records : null,
				'counters' 	=> ( !empty( $job_lookup->counters ) ) ? $job_lookup->counters : null
			];
			$this->response( $message, REST_Controller::HTTP_OK );
		}else{
			$message = [
				'status' 	=> FALSE,
				'message' 	=> $this->session->flashdata( 'message' ),
				'job' 		=> ( !empty( $job_lookup->records ) ) ? $job_lookup->records : null,
				'counters' 	=> ( !empty( $job_lookup->counters ) ) ? $job_lookup->counters : null
			];
			$this->response($message, REST_Controller::HTTP_OK);
		}
	}
	
	
	/** Get Completed Checklists against a Job **/
	public function completed_checklists_get(){
		
		$account_id 	= ( !empty( $this->get( 'account_id' ) ) ) 	? (int) $this->get( 'account_id' ) 	: false ;
		$job_id 		= ( !empty( $this->get( 'job_id' ) ) ) 		? 	(int) $this->get( 'job_id' ) 		: false ;
		$site_id 		= ( !empty( $this->get( 'site_id' ) ) ) 	? 	(int) $this->get( 'site_id' ) 		: false ;
		$where 		 	= ( !empty( $this->get( 'where' ) ) ) 		? $this->get( 'where' ) 			: false ;
		$order_by 		= ( !empty( $this->get( 'order_by' ) ) ) 	? $this->get( 'order_by' ) 			: false ;

		if( !$this->account_service->check_account_status( $account_id ) ){
			$message = [
				'status' 				=> FALSE,
				'http_code' 			=> REST_Controller::HTTP_ACCOUNT_VALIDATION_FAILED,
				'message' 				=> 'Invalid main Account ID.',
				'completed_checklists'	=> NULL,
				'counters' 				=> NULL
			];
			$this->response( $message, REST_Controller::HTTP_OK );
		}

		$completed_checklists = $this->checklist_service->get_completed_checklists( $account_id, $job_id, $site_id, $where, $order_by );

		if( !empty( $completed_checklists ) ){
			$message = [
				'status' 				=> TRUE,
				'http_code' 			=> REST_Controller::HTTP_OK,
				'message' 				=> $this->session->flashdata( 'message' ),
				'completed_checklists'	=> ( !empty( $completed_checklists->records ) )  ? $completed_checklists->records  : $completed_checklists,
				'counters' 				=> ( !empty( $completed_checklists->counters ) ) ? $completed_checklists->counters : null,
			];
			$this->response( $message, REST_Controller::HTTP_OK );
		} else {
			$message = [
				'status' 				=> FALSE,
				'http_code' 			=> REST_Controller::HTTP_NO_CONTENT,
				'message'				=> $this->session->flashdata( 'message' ),
				'completed_checklists'	=> null,
				'counters' 				=> null
			];
			$this->response( $message, REST_Controller::HTTP_OK );
		}

	}
	
	
	/**
	* Search through list of Checklist
	*/
	public function checklist_search_get(){
		$account_id 	= ( int ) $this->get( 'account_id' );
		$job_id 		= ( int ) $this->get( 'job_id' );
		$limit 		 	= ( !empty( $this->get( 'limit' ) ) )  ? (int) $this->get( 'limit' )  : DEFAULT_LIMIT;
		$offset 	 	= ( !empty( $this->get( 'offset' ) ) ) ? (int) $this->get( 'offset' ) : DEFAULT_OFFSET;
		$where 		 	= $this->get( 'where' );
		$order_by    	= $this->get( 'order_by' );
		$search_term 	= trim( urldecode( $this->get( 'search_term' ) ) );

		if( !$this->account_service->check_account_status( $account_id ) ){
			$message = [
				'status' 	=> FALSE,
				'message' 	=> 'Invalid main Account ID.',
				'checklist' => NULL,
				'counters' 	=> NULL
			];
			$this->response( $message, REST_Controller::HTTP_OK );
		}

		$checklists_lookup = $this->checklist_service->checklist_search( $account_id, $job_id, $search_term, $where, $order_by, $limit, $offset );

		if( !empty( $checklists_lookup ) ){
			$message = [
				'status' 	=> TRUE,
				'message' 	=> $this->session->flashdata( 'message' ),
				'checklist' => ( !empty( $checklists_lookup->records ) ) ? $checklists_lookup->records : $checklists_lookup,
				'counters' 	=> ( !empty( $checklists_lookup->counters ) ) ? $checklists_lookup->counters : null
			];
			$this->response( $message, REST_Controller::HTTP_OK );
		}else{
			$message = [
				'status' 	=> FALSE,
				'message' 	=> $this->session->flashdata( 'message' ),
				'checklist' => ( !empty( $checklists_lookup->records ) ) ? $checklists_lookup->records : null,
				'counters' 	=> ( !empty( $checklists_lookup->counters ) ) ? $checklists_lookup->counters : null
			];
			$this->response($message, REST_Controller::HTTP_OK);
		}
	}
	
}