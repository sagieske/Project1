<?php 

class Program_model extends CI_model {

    public function __construct() {
        $this->load->database();
    }

    public function emptyProgramsTable() {
      $this->db->emtpy_table('programs'); 
    }
    public function xmlParser() {
      $xmlstr = simpleXML_load_file('http://www.hodexer.nl/hodex/uva/hodexDirectory.xml');
      
      if ($xmlstr === FALSE) {
        show_404();
      }
      else {
        foreach ($xmlstr->hodexResource as $temp) {
          $tempID = $temp->programId;
          //echo $tempID;
          //echo '<br>';
          $tempUrl = $temp->hodexResourceURL; 
          //Load hodex page with information per program
          $tempXmlStr = simpleXML_load_file($tempUrl);
          //Get attributes from this hodex-program-page
          $tempProgramName = (string)$tempXmlStr->programDescriptions->programName;
          echo $tempProgramName;
          echo '<br>';
          $tempDescription = (string)$tempXmlStr->programDescriptions->programDescription;
          $tempSummary = (string)$tempXmlStr->programDescriptions->programSummary;
          $tempFaculty = (string)$tempXmlStr->programOrganization->faculty;

          //Put all data in an array, make ready for insertion
          $data = array('programID' => $tempID, 'programName' => $tempProgramName,  
                        'programSummary' => $tempSummary, 'programDescription' => $tempDescription,
                        'programFaculty' => $tempFaculty);
          $this->db->insert('programs', $data);
          echo $this->db->_error_message();
          echo '<br />';
        }


    }
    }
    public function get_all_programs() {
      $query = $this->db->get('programs');
      return $query->result_array();
    }
    
    public function get_program($programid){
      $query = $this->db->where('programID', $programid);
      $query = $this->db->get('programs');
      return $query->result_array();
    }
    
    public function get_searched_programs($type, $searchQuery) {
      $query = $this->db->where($type, $searchQuery);
      $query = $this->db->get('programs');
      return $query->result_array();
    }

    //Pprograms are set using the session_id. Obviously this session_id
    //won't exist forever, since users will create new sessions.
    //Entries with expired session_id's must be removed from database.
    //TODO: determine when session is 'old' and write a delete-function.

    public function set_recently_viewed($programID, $userID) {
      $query = array('programID' => $programID, 'userID' => $userID);
      $this->db->insert('recently_viewed', $query);
    }
    public function browse_recently($userID) {
      $this->db->select("*");
      $this->db->from("recently_viewed");
      $temp = $this->db->where('userID', $userID);
      $query = $this->db->join('programs', 'recently_viewed.programID = programs.programID');
      $query = $this->db->get();
      $temp = $query->result_array();
      return $temp;
    }
    public function set_favorite_program($programID, $userID) {
      $data = array('programID' => $programID, 'userID' => $userID);
      $this->db->insert('favorite_programs', $data);
    }
    public function get_favorite_programs($userID) {
      $this->db->select("*");
      $this->db->from("favorite_programs");
      $temp = $this->db->where('userID', $userID);
      $query = $this->db->join('programs', 'favorite_programs.programID = programs.programID');
      $query = $this->db->get();
      $temp = $query->result_array();
      return $temp;
    }
}

