<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Execution extends CI_Controller {
	public function __construct(){
		parent::__construct();
		  $this->load->library(['session']);
	}

  public function index()

  {
    $this->load->view('execution/index');
  }

	public function run()
	{
		$runURL = "http://jenkins.helenoftroy.com:8080/view/all/job/TestAutomation/job/RevlonSystemTests/buildWithParameters?delay=0sec&config=Revelon%5C%5Cconfig.properties&testNG=Revlon%5C%5CRevlon_ST.xml";
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => '$runURL',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_HTTPHEADER => array(
		    'Authorization: Basic bWNoaXJ1dmVsbGE6MTFjN2MxNzdiNzExZjgxZTVjN2MzZTUzMWY5NjE0ZmJiNg==',
		    'Cookie: JSESSIONID.a3638212=node0jwu9a0pqykyp103pqrk5yhgki425.node0'
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$this->session->set_flashdata('run_response',$response);

		//echo $response;
		redirect('auditreports');
	}
}
