<?php 

class Parties_model extends CI_model {

    public function __construct() {
        $this->load->database();
    }

    public function get_all_parties() {
      $query = $this->db->get('partyinfo');
      return $query->result_array();
    }
    
    public function get_party($partyID){
      $query = $this->db->where('partyID', $partyID);
      $query = $this->db->get('partyinfo');
      return $query->result_array();
    }
    
    public function get_searched_parties($type, $searchQuery) {
      $query = $this->db->where($type, $searchQuery);
      $query = $this->db->get('partyinfo');
      return $query->result_array();
    }

    //Recently viewed parties are set using the session_id. Obviously this session_id
    //won't exist forever, since users will create new sessions.
    //Entries with expired session_id's must be removed from database.
    //TODO: determine when session is 'old' and write a delete-function.

    public function set_recently_viewed($partyID, $userID) {
      $query = array('partyID' => $partyID, 'userID' => $userID);
      $this->db->insert('recently_viewed', $query);
    }
    public function browse_recently($userID) {
      $this->db->select("*");
      $this->db->from("recently_viewed");
      $temp = $this->db->where('userID', $userID);
      $query = $this->db->join('partyinfo', 'recently_viewed.partyID = parties.partyID');
      $query = $this->db->get();
      $temp = $query->result_array();
      return $temp;
    }
    public function set_favorite_party($partyID, $userID) {
      $data = array('userID' => $userID, 'partyID' => $partyID);
      $this->db->insert('favorite_parties', $data);
    }
    public function get_favorite_parties($userID) {
      $this->db->select("*");
      $this->db->from("favorite_parties");
      $temp = $this->db->where('userID', $userID);
      $query = $this->db->join('partyinfo', 'favorite_parties.partyID = partyinfo.partyID');
      $query = $this->db->get();
      $temp = $query->result_array();
      return $temp;
    }
}

