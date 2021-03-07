<?php
class AuditReportsModel extends CI_Model {
    public function getReports() {
        $query = $this->db->get('executionaudit');
        return$query->result_array();
    }

    public function getSystemHealth() {
        $query = $this->db->get('systemhealth');
        return$query->result_array();
    }

}
