<?php
class AuditReportsModel extends CI_Model {
    public function getReports() {
        $this->db->order_by('ScheduledAt', 'DESC');
        $query = $this->db->get('executionaudit');
        return$query->result_array();
    }

    public function getSystemHealth($date = null) {
      if(!$date) {
        $date = date("Y-m-d");
      }
      $this->db->where('createdAt >=', $date." 00:00:00");
      $this->db->where('createdAt <=', $date." 23:59:59");
      $query = $this->db->get('systemhealth');

      //var_dump($this->db->last_query() );exit;
        return $query->result_array();

    }

    public function getTestCasesModel($Project, $Environment, $testingTYpe, $Device, $platform)
    {
      //SELECT TestCases FROM `testexecutiondetails` where Project='Hydroflask' and Environment='Staging' and TestingType='Build smoke testing' and DeviceType='Web'
      $this->db->where('Project', $Project);
      $this->db->where('Environment', $Environment);
      $this->db->where('TestingType', $testingTYpe);
      $this->db->where('DeviceType', $Device);
      $this->db->select('TestCases');
      $query = $this->db->get('testexecutiondetails');
      $res_array =  $query->result_array();
      if($res_array) {
        return $res_array[0]['TestCases'];
      } else {
        return 'NA';
      }

    }

}
