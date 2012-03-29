    <?php
session_start();

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('parties_model');
    }

    public function index() {
      if (!file_exists('../application/views/pages/home.php')) {
      // Whoops, we don't have a page for that!
        show_404();
      }
    
      $data['title'] = 'Home';

      $this->load->view('templates/headerHome', $data);
      $this->load->view('pages/home', $data);
      $this->load->view('templates/footer', $data);
        
    }

    public function login() {
      $data['title'] = 'Login page';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/login', $data);
      $this->load->view('templates/footer', $data);
    }
    
    public function signup() {
      $data['title'] = "Signup page";

      $this->load->view('templates/header', $data);
      $this->load->view('pages/signup', $data);
      $this->load->view('templates/footer', $data);
    }

    
       /**
     * Create a user account
     *
     * @access    public
     * @param    string
     * @param    string
     * @param    bool
     * @return    bool
     */
    function create($user = '', $password = '', $auto_login = true) {
        //Put here for PHP 4 users
        $this->CI =& get_instance();        

        //Make sure account info was sent
        if($user == '' OR $password == '') {
            return false;
        }
        
        //Check against user table
        $this->CI->db->where('username', $user); 
        $query = $this->CI->db->get_where($this->user_table);
        
        if ($query->num_rows() > 0) {
            //username already exists
            return false;
            
        } else {
            //Encrypt password
            $password = hash("sha512",$password);
            
            //Insert account into the database
            $data = array(
                        'username' => $user,
                        'password' => $password
                    );
            $this->CI->db->set($data); 
            if(!$this->CI->db->insert($this->user_table)) {
                //There was a problem!
                return false;                        
            }
            $user_id = $this->CI->db->insert_id();
            
            //Automatically login to created account
            if($auto_login) {        
                //Destroy old session
                $this->CI->session->unset_userdata();
                
                //Set session data
                $this->CI->session->set_userdata(array('id' => $user_id,'username' => $user));
                
                //Set logged_in to true
                $this->CI->session->set_userdata(array('online' => true));            
            
            }
            
            //Login was successful            
            return true;
        }

    }
    

=======
>>>>>>> 9807b29a852b66a7fef3d53daa0eca0d19a7e5d0
	  public function show_all_parties() {
      $data['allParties'] = $this->parties_model->get_all_parties(); 
      $data['title'] = 'Browse all parties';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/allParties', $data);
      $this->load->view('templates/footer', $data);
    }

    public function search_all_parties() {
      $data['title'] = 'Search for parties';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/searchParties', $data);
      $this->load->view('templates/footer', $data);
    }

    /* 
     * TODO: session_id -> loginID
     * TODO: only show most recent 5 viewed
     */
    public function browse_recently() {
      $data['recentParties'] = $this->parties_model->browse_recently(session_id());
      $data['title'] = 'Page with recently viewed';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/browseRecently', $data);
      $this->load->view('templates/footer', $data);

    }
    public function show_party($partyID) {
      $data['title'] = 'Party information';
      $data['partyItem'] = $this->parties_model->get_party($partyID);      
      //Set this course as recently viewed 
      $this->parties_model->set_recently_viewed($partyID, session_id());
      
      $this->load->view('templates/header', $data);
      $this->load->view('pages/party_content', $data);
      $this->load->view('templates/footer', $data);
      }
    public function show_searched_parties() {
    $type = $_GET["type"];
    $searchQuery = $_GET["searchQuery"];
      //Searchquery is empty, so no dbquery can be done. 
      if ($searchQuery == NULL) {
        //TODO create better error showing page
        show_404();
      }
      //The type var is the keyword which is searched on (name, summary, etc.)
      //Can only be one of 4 possibilities.
      $data['searchedParties'] = $this->parties_model->get_searched_parties($type, $searchQuery);
      $data['title'] = 'Search results';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/searchResults', $data);
      $this->load->view('templates/footer', $data);
    
    }
    public function set_favorite() {
      $partyID = $_GET['partyID'];
      $this->parties_model->set_favorite($partyID, session_id());
      $data['title'] = 'Set as favorite';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/favorite_setted', $data);
      $this->load->view('templates/footer', $data);
    }
    public function favorite_parties() {
      $data['favoriteParties'] = $this->parties_model->get_favorite(session_id());
      $data['title'] = 'Page with your favorite parties';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/favoriteParties', $data);
      $this->load->view('templates/footer', $data);
    }


}
