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

    public function try_to_login() {
      ini_set('display_errors',1);
      error_reporting(E_ALL);
      $user = $this->input->post("login_username");
      $password = $this->input->post("login_password");
      if ($this->real_login($user, $password) == true) {
      
        $data['title'] = 'Login succesfull';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/login_ok', $data);
        $this->load->view('templates/footer', $data);
      }
      else {
        $data['title'] = 'Login failed';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/login_failed', $data);
        $this->load->view('templates/footer', $data);

      }
    }

    /**
     * Login and sets session variables
     *
     * @access    public
     * @param    string
     * @param    string
     * @return    bool
     */
    function real_login($user, $password) {
        //Load
        $this->load->helper('url');
        /* 
        //Check incoming variables
        $rules['login_username']	= "required|min_length[4]|max_length[32]|alpha_dash";
        $rules['login_password']	= "required|min_length[4]|max_length[32]|alpha_dash";		

        $this->form_validation->set_rules($rules);

        $fields['login_username'] = $user;
        $fields['login_password'] = $password;
        
        $this->form_validation->set_rules($fields);
        
            
        if ($this->form_validation->run() == false) {
          /*
          //If you are using OBSession you can uncomment these lines
          $flashdata = array('error' => true, 'error_text' => $this->validation->error_string);
          $this->session->set_flashdata($flashdata); 
          $this->session->set_flashdata($_POST);
          */
          //redirect('/pages/home');	
        //} else { 
          //Create account */
          if($this->simplelogin->login($user, $password)) {
            /*
            //If you are using OBSession you can uncomment these lines
            $flashdata = array('success' => true, 'success_text' => 'Login Successful!');
            $this->session->set_flashdata($flashdata);
            */
            return true;
          } else {
            /*
            //If you are using OBSession you can uncomment these lines
            $flashdata = array('error' => true, 'error_text' => 'There was a problem logging into the account.');
            $this->session->set_flashdata($flashdata); 
            $this->session->set_flashdata($_POST);
            */
            return false;
          }			
     // }

    }

    /**
     * Logout user
     *
     * @access    public
     * @return    void
     */
    function logout() {
        //Put here for PHP 4 users
        $this->CI =& get_instance();        

        //Destroy session
        $this->CI->session->unset_userdata();
    }
    
    public function signup() {
      $data['title'] = "Signup page";

      $this->load->view('templates/header', $data);
      $this->load->view('pages/signup', $data);
      $this->load->view('templates/footer', $data);
    }

    public function try_to_create() {
      $user = $_GET["username"];
      $password = $_GET["passwd"];
      //Username already exists
      $auto_login = "false";
      if ($this->create($user, $password, $auto_login) == false) {
        $data['title'] = "Signup";
        $data['user'] = $user;
        $data['password'] = $password;
        $this->load->view('templates/header', $data);
        $this->load->view('pages/signup_failed', $data);
        $this->load->view('templates/footer', $data);
      }
      else {
        $data['title'] = "Signup";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/signup_ok', $data);
        $this->load->view('templates/footer', $data);
      }
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
    function create($user, $password, $auto_login = "true") {
        $this->load->library("simplelogin");
        $this->load->library("form_validation");
        //Put here for PHP 4 users
        $this->CI =& get_instance();        

        //Make sure account info was sent
        if($user == '' OR $password == '') {
            return false;
        }
        
        //Check against user table
        $this->CI->db->where('username', $user); 
        $query = $this->CI->db->get_where('users');
        
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
            if(!$this->CI->db->insert('users')) {
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
    

	  public function show_all_parties() {
      $data['allParties'] = $this->parties_model->get_all_parties(); 
      $data['title'] = 'Browse all parties';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/allParties', $data);
      $this->load->view('templates/footer', $data);
    }

    public function search_parties() {
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
      //Searchquery is empty, so no dbquery can be done. 
      if ($type == 'partyLocation') {
        $locationType = $_GET["partyLocation"];
        $data['searchedParties'] = $this->parties_model->get_searched_parties('partyLocation', $locationType);
        echo "LAKSDJFLKJSDFLJSA;DFJLSJFDL;KAJSF";
        $data['title'] = 'Search results for '.$locationType;
      }
      else if ($type == 'partyDate') {
        echo "ooooooooooooooooooooh<br>";
        $dateType = $_GET['partyDate'];
        echo $dateType;
        if ($dateType == "today") {
          $current_date = getdate();
          echo "today<br>";
          $date = $current_date['year']."-".$current_date['mon']."-".$current_date['mday'];
        }
        else if ($dateType == "tomorrow") {
          $current_date = getdate();
          echo "tomorrow<br>";
          $date = $current_date['year']."-".$current_date['mon']."-".$current_date['mday'];
        }
        else {
          $date = $dateType;
        }
        $data['searchedParties'] = $this->parties_model->get_searched_parties('partyDate', $date);
        $data['title'] = 'Search results for '.$date;
      }

      $this->load->view('templates/header', $data);
      $this->load->view('pages/searchResults', $data);
      $this->load->view('templates/footer', $data);
    
    }
    public function set_favorite() {
      $partyID = $_GET['partyID'];
      $this->parties_model->set_favorite_party($partyID, session_id());
      $data['title'] = 'Set as favorite';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/favorite_setted', $data);
      $this->load->view('templates/footer', $data);
    }
    public function favorite_parties() {
      $data['favoriteParties'] = $this->parties_model->get_favorite_parties(session_id());
      $data['title'] = 'Page with your favorite parties';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/favoriteParties', $data);
      $this->load->view('templates/footer', $data);
    }


}
