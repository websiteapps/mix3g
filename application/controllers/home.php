<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $sql = "SELECT * FROM indeximage where flg=1 ORDER BY id DESC";
        $indexImage = $this->db->query($sql);

        $sql = "SELECT * FROM tagline where flg=1 ORDER BY id DESC";
        $tagline = $this->db->query($sql);

        $sql = "SELECT * FROM about where flg=1 ORDER BY id DESC";
        $about = $this->db->query($sql);

        $data = array('indexImage'=>$indexImage->result(),'tagline'=>$tagline->result(),'about'=>$about->result());
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

        $sql = "SELECT * FROM tagline where flg=1 ORDER BY ID DESC";
        $tagline = $this->db->query($sql);

        $data = array('menu'=>$menus,'bestMenu'=>$bestMenuSql->result(),'special'=>$special->result(),'tagline'=>$tagline->result());
        $this->load->view('menu',$data);
    }

    public function contact(){
        $sql = "SELECT * FROM contact Order by id desc";
        $contact = $this->db->query($sql);

        $sql = "SELECT * FROM tagline where flg=1 ORDER BY ID DESC";
        $tagline = $this->db->query($sql);

        $data = array('tagline'=>$tagline->result(),'contact'=>$contact->result());
        $this->load->view('contact', $data);
    }

    public function login(){
        $this->load->view('admin/login');
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */