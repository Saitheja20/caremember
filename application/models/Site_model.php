<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load any necessary libraries, helpers, etc.
    }

    public function getNotifications() {
        $this->db->select('*');
        $this->db->from('tbl_Notifications a');
        $this->db->where('a.status', '1');
        $query = $this->db->get();
        return $query->result_array(); // Directly return the result array
    }
    public function getBanners() {
        $this->db->select('*');
        $this->db->from('tbl_banner a');
        $this->db->where('a.status', '1');
        $query = $this->db->get();
        return $query->result_array(); // Directly return the result array
    }
    public function insertAdmission($data) {
        return $this->db->insert('tbl_admissions', $data);
    }
    public function getAchievements() {
        $this->db->select('*');
        $this->db->from('tbl_achievements a');
        $this->db->where('a.status', '1');
        $query = $this->db->get();
        return $query->result_array(); // Directly return the result array
    }
}
