<?php
class LoginModel extends CI_Model {
    public function getUserData($email) {
        //query the table 'users' and get the result count
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->row();
    }

    public function getPassword($email)
    {
      $this->db->where('email', $email);
      $query = $this->db->get('users');
      return $query->row()->password;
    }

    public function updatePassword($email, $pwd)
    {
      $this->db->where('email', $email);
      $this->db->set('password', $pwd);
      return $query = $this->db->update('users');
    }
}
