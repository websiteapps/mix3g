<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

    public function menu(){
        $this->load->view('menu');
    }

    public function contact(){
        $sql = "SELECT * FROM contact Order by id desc";
        $data = $this->db->query($sql);
        $data = $data->result();
        $this->load->view('contact', $data[0]);
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */