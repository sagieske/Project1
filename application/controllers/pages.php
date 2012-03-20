    <?php
session_start();

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('program_model');
    }

    public function emptyProgramsTable() {
      $this->program_model->emptyProgramsTable();

      $data['title'] = 'Programs table is emptied';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/emptyProgramsTable', $data);
      $this->load->view('templates/footer', $data);

    }

    public function xmlParser() {
    $this->program_model->xmlParser();
          
    $data['title'] = 'XML to SQL parser';

    $this->load->view('templates/header', $data);
    $this->load->view('pages/parser', $data);
    $this->load->view('templates/footer', $data);
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

	  public function show_all_programs() {
      $data['allPrograms'] = $this->program_model->get_all_programs(); 
      $data['title'] = 'Browse all programs';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/allPrograms', $data);
      $this->load->view('templates/footer', $data);
    }

    public function search_programs() {
      $data['title'] = 'Search for programs';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/searchPrograms', $data);
      $this->load->view('templates/footer', $data);
    }

    public function browse_recently() {
      $data['recentPrograms'] = $this->program_model->browse_recently(session_id());
      $data['title'] = 'Page with recently viewed';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/browseRecently', $data);
      $this->load->view('templates/footer', $data);

    }
    public function show_course($programID) {
      $data['title'] = 'Course information';
      $data['programItem'] = $this->program_model->get_program($programID);      
      //Set this course as recently viewed 
      $this->program_model->set_recently_viewed($programID, session_id());
      
      $this->load->view('templates/header', $data);
      $this->load->view('pages/course_content', $data);
      $this->load->view('templates/footer', $data);
      }
    public function show_searched_programs() {
    $type = $_GET["type"];
    $searchQuery = $_GET["searchQuery"];
      //Searchquery is empty, so no dbquery can be done. 
      if ($searchQuery == NULL) {
        //TODO create better error showing page
        show_404();
      }
      //The type var is the keyword which is searched on (name, summary, etc.)
      //Can only be one of 4 possibilities.
      $data['searchedPrograms'] = $this->program_model->get_searched_programs($type, $searchQuery);
      $data['title'] = 'Search results';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/searchResults', $data);
      $this->load->view('templates/footer', $data);
    
    }
    public function set_favorite_program() {
      $programID = $_GET['programID'];
      $this->program_model->set_favorite_program($programID, session_id());
      $data['title'] = 'Set as favorite';
      echo "HAA\nAAAA\nAAAA\nAAAA\nALLO";

      $this->load->view('templates/header', $data);
      $this->load->view('pages/favorite_setted', $data);
      $this->load->view('templates/footer', $data);
    }
    public function favorite_programs() {
      $data['favoritePrograms'] = $this->program_model->get_favorite_programs(session_id());
      $data['title'] = 'Page with your favorite programs';

      $this->load->view('templates/header', $data);
      $this->load->view('pages/favoritePrograms', $data);
      $this->load->view('templates/footer', $data);
    }


}
