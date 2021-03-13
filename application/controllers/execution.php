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
		  CURLOPT_URL => $runURL,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_HTTPHEADER => array(
			'Authorization: Basic bWNoaXJ1dmVsbGE6MTFjN2MxNzdiNzExZjgxZTVjN2MzZTUzMWY5NjE0ZmJiNg==',
			'Cookie: JSESSIONID.a3638212=node062785luglgeo1bw0khrqx96us432.node0'
		  ),
		));


		$response = curl_exec($curl);

		curl_close($curl);
		$this->session->set_flashdata('run_response',$response);

		
		$status=$this->getrecorddetails();
		$nodestatus=$status->result;
		if(is_null($status->result)){
			$nodestatus="Running";
		}
		$BuildURL=$status->url;

		$record=array("Project"=>$this->input->post('project'),
				"Environment"=>$this->input->post('environment'),
				"TestingType"=>$this->input->post('testingTYpe'),
				"DeviceType"=>$this->input->post('device'),
				"Browser"=>$this->input->post('browsers'),
				"Devices"=>$this->input->post('devices'),
				"Machine"=>$this->input->post('machine'),
				"TriggeredBy"=>"mchiruvella@helenoftroy.com",
				"ExecutionStatus"=>$nodestatus,
				"BuildURL"=>$BuildURL,
				"Emails"=>$this->input->post('emails'));
		$this->load->database();
		$this->db->insert('ExecutionAudit',$record);
		//echo $response;
		redirect('auditreports');
	}

	function getrecorddetails() {

	
		$clientstatus=array();
		$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://jenkins.helenoftroy.com:8080/view/all/job/TestAutomation/job/RevlonSystemTests/lastBuild/api/json/',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Basic bWNoaXJ1dmVsbGE6MTFjN2MxNzdiNzExZjgxZTVjN2MzZTUzMWY5NjE0ZmJiNg==',
				'Cookie: JSESSIONID.a3638212=node062785luglgeo1bw0khrqx96us432.node0'
			),
			));

			$response = curl_exec($curl);

			curl_close($curl);

			if ($err) {
				echo "cURL Error #:" . $err;
			} else {
				//echo $response;
			}

		$status = json_decode($response);

		return $status;
		


	}
}
