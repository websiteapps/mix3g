<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 4/5/13
 * Time: 1:02 PM
 * To change this template use File | Settings | File Templates.
 */

class adminPanel extends CI_Controller {
    public function loginVerify(){
           $sql = "SELECT * FROM login where
                   username = '".$this->input->post("username")."' and
                   password = '".$this->input->post("password")."'";

           $query = $this->db->query($sql);
           if($query -> num_rows() == 1){
               $sess_array = array();
               foreach($query->result() as $row)
               {
                   $sess_array = array(
                       'id' => $row->id,
                       'username' => $row->username);

                   $this->session->set_userdata('logged_in', $sess_array);
               }
               if($this->session->userdata('logged_in'))
               {
                  $this->load->view('admin/admin');
               }
           }
           else{
               echo "Invalid Login..!";
               echo $this->input->post("username");
               echo "<br>";
               echo $this->input->post("username");
           }
    }

    public function admin(){
        if($this->session->userdata('logged_in'))
        {
            $this->load->view("admin/admin");
        }
    }

    public function menu(){
        if($this->session->userdata('logged_in'))
        {
            $sql = "SELECT * FROM menufamily WHERE flg = 1";
            $menuFamily = $this->db->query($sql);
            $menuFamily = $menuFamily->result_array();
            $menus = array();
            foreach($menuFamily as $mf){
                $menuFamilyId = $mf['id'];
                $sqlMenu = "SELECT * FROM menu where menuFamilyid = '".$menuFamilyId."' and flg = 1";
                $menu = $this->db->query($sqlMenu);
                $menus[$mf['menuName']] = $menu->result();
            }
            $data = array('menuFamily'=>$menuFamily,'menu'=>$menus);
            $this->load->view("admin/menu",$data);
        }
    }

    public function contact(){
        if($this->session->userdata('logged_in')){
            $sql = "SELECT * FROM contact Order by id desc";
            $data = $this->db->query($sql);
            $data = $data->result();
            $this->load->view("admin/contact",$data[0]);
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->session->unset_userdata('logged_in');
        delete_cookie("ci_session");
        redirect('home', 'refresh');
    }
}