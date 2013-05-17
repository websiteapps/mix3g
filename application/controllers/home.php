<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $sql = "SELECT * FROM indeximage where flg=1 ORDER BY id DESC LIMIT 3";
        $indexImage = $this->db->query($sql);

        $sql = "SELECT * FROM tagline where flg=1 ORDER BY id DESC LIMIT 1";
        $tagline = $this->db->query($sql);

        $sql = "SELECT * FROM about where flg=1 ORDER BY id DESC LIMIT 1";
        $about = $this->db->query($sql);

        $sql = "SELECT * FROM subindex WHERE flg = 1 ORDER BY id DESC LIMIT 3";
        $subIndex = $this->db->query($sql);

        $sql = "SELECT * FROM whyus WHERE flg = 1 ORDER BY id DESC";
        $whyUs = $this->db->query($sql);

        $data = array('indexImage'=>$indexImage->result(),'subIndex'=>$subIndex->result(),'tagline'=>$tagline->result(),'whyUs'=>$whyUs->result(),'about'=>$about->result());
      	$this->load->view('index',$data);
	}

    public function menu(){
        $sql = "SELECT * FROM menufamily WHERE flg = 1";
        $menuFamily = $this->db->query($sql);
        $menuFamily = $menuFamily->result_array();
        $menus = array();
        foreach($menuFamily as $mf){
             $menuFamilyId = $mf['id'];
             $sqlMenu = "SELECT * FROM menu where menuFamilyid = '".$menuFamilyId."' and flg = 1 and menuType = 'REGULAR_MENU'";
             $menu = $this->db->query($sqlMenu);
             $menus[$mf['menuName']] = $menu->result();
        }
        $bestMenuSql = "SELECT * FROM menu where flg = 1 and menuType='BEST_MENU'";
        $bestMenuSql = $this->db->query($bestMenuSql);

        $special = "SELECT* FROM special where flg = 1 ORDER BY id DESC";
        $special = $this->db->query($special);

        $sql = "SELECT * FROM tagline where flg=1 ORDER BY ID DESC LIMIT 1";
        $tagline = $this->db->query($sql);

        $data = array('menu'=>$menus,'bestMenu'=>$bestMenuSql->result(),'special'=>$special->result(),'tagline'=>$tagline->result());
        $this->load->view('menu',$data);
    }

    public function contact(){
        $sql = "SELECT * FROM contact Order by id desc LIMIT 1";
        $contact = $this->db->query($sql);

        $sql = "SELECT * FROM tagline where flg=1 ORDER BY ID DESC LIMIT 1";
        $tagline = $this->db->query($sql);

        $data = array('tagline'=>$tagline->result(),'contact'=>$contact->result());
        $this->load->view('contact', $data);
    }

    public function people(){
        $sql = "SELECT * FROM people WHERE flg = 1 ORDER BY id";
        $people = $this->db->query($sql);

        $sql = "SELECT * FROM tagline where flg=1 ORDER BY ID DESC LIMIT 1";
        $tagline = $this->db->query($sql);

        $data = array('tagline'=>$tagline->result(),'people'=>$people->result());
        $this->load->view('people',$data);
    }
    public function login(){
        $this->load->view('admin/login');
    }

    public function facebook(){
        $app_id = "120788068117691";
        $app_secret = "2575ff3013943aa1d12090d94d732fca";
        $pageUrl = "https://graph.facebook.com/StyloGentsSaloon";
        $accessTokan = $app_id."|".$app_secret;

        $this->load->library('Requests');
        $this->requests->register_autoloader();
        $response = $this->requests->get($pageUrl ."/posts?access_token=" . $accessTokan, array('Accept' => 'application/json'));
        $json = json_decode($response->body, true);
        echo json_encode($json);
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */