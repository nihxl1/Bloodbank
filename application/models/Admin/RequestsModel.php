<?php
class RequestsModel extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function get_all_requests() {
        $this->db->select('request.request_id, request.request_date, request.status, user.name');
        $this->db->from('request');
        $this->db->join('donor', 'request.donor_id = donor.donor_id');
        $this->db->join('user', 'donor.user_id = user.user_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function update_request_status($requestId, $status)
{
    $this->db->where('request_id', $requestId);
    $this->db->update('request', ['status' => $status]);
}

}
?>
