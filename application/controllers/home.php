<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

    public function menu(){
        $sql = "SELECT * FROM menufamily";
        $menuFamily = $this->db->query($sql);
        $menuFamily = $menuFamily->result_array();
        $menus = array();
        foreach($menuFamily as $mf){
             $menuFamilyId = $mf['id'];
             $sqlMenu = "SELECT * FROM menu where menuFamilyid = '".$menuFamilyId."' and flg = 1";
             $menu = $this->db->query($sqlMenu);
             $menus[$mf['menuName']] = $menu->result();
        }
        $data = array('menu'=>$menus);
        $this->load->view('menu',$data);
    }

    public function contact(){
        $sql = "SELECT * FROM contact Order by id desc";
        $data = $this->db->query($sql);
        $data = $data->result();
        $this->load->view('contact', $data[0]);
    }

    public function login(){
        $this->load->view('admin/login');
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */