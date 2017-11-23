<?php

/**
 * Get Started Controller
 *
 * First Time account set up
 *
 * @version 1.0
 * @author Everpay Corporation.
 * @package OpenGateway

 */
class Get_started extends Controller
{

    function __construct()
    {
        parent::__construct();
        // error_reporting(E_ALL);
        // ini_set('display_errors',1);
        // perform control-panel specific loads
        CPLoader();
    }

    function index() {
        //echo "hii";die;
        $this->load->model('cp/user');

        $verified = array();
        $verified_count = 0;
        $verified['email'] = $this->user->check_email_verified();
        $verified['bank'] = $this->user->check_bank_verified();
        $verified['business'] = $this->user->check_business_verified();

        foreach($verified as $v) {
            if($v) {
                $verified_count++;
            }
        }

        $client_id=$this->session->userdata('client_id');
        $clients=$this->user->get_client_details($client_id);
       
        $this->load->model('states_model');
		$countries = $this->states_model->GetCountries();
        

        $data = array(
            'countries' => $countries,
            'clients' => $clients,
            'verified' => $verified,
            'verified_count' => $verified_count
        );

        $this->load->view('cp/get_started',$data);
         
    }

    function resend_email_code() {
        $this->load->model('cp/user');
    }

    function update_business()
    {
    	$this->load->model('cp/user');
    	$client_id = $this->session->userdata('client_id');

        $data['business_address'] = $this->input->post('business_address');
        $data['business_address2'] = $this->input->post('business_address2');
        $data['business_city'] = $this->input->post('business_city');
        $data['business_zip'] = $this->input->post('business_zip');
        $data['business_state'] = $this->input->post('business_state');
        $data['business_country'] = $this->input->post('business_country');
        $data['business_url'] = $this->input->post('business_url');
        $data['business_phone'] = $this->input->post('business_phone');

        $error = false;
        foreach($data as $k=>$d) {
            if(empty($d)) {
                $this->notices->SetError($k.' is Required field.');
                $error = true;
            }
        }

		if(!$error) {
        	$this->user->update_business($client_id,$data);
            $this->notices->SetNotice($this->lang->line('account_updated'));
        }

        redirect('/get_started');
        die();
    }

}
