<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 30/4/13
 * Time: 5:22 PM
 * To change this template use File | Settings | File Templates.
 */

class admin extends CI_Controller {
    public function addContact(){
        $contact = new Contact();
        $contact->setContactName("Digvijay Mohite");
        $contact->setEmail("digsmoh@gmail.com");
        $contact->setPhoneNumber("9960966003");
        $contact->setPhoneNumber1("9960966003");
        $contact->setPhoneNumber2("9960966003");
        $contact->setFax("222222222");
        $contact->setStreet("Mohtie Banglow");
        $contact->setState("Maharashtra");
        $contact->setCity("Sangli");
        $contact->setZip("416416");

        $contact->addContact($contact);
    }

    public function addMenuFamily(){
        $menuFamily = new MenuFamily();
        $menuFamily->setMenuName($this->input->post("menuFamilyName"));
        $utility = new Utilities();
        $utility->addMenuFamily($menuFamily);
        redirect('adminPanel/menu', 'refresh');
    }

    public function deleteMenuFamily(){
        $menuId = $this->input->post("deleteMenuFamilyType");
        $sql = "DELETE FROM menufamily WHERE id = '".$menuId."'";
        $this->db->query($sql);

        $sql = "DELETE FROM MENU WHERE menuFamilyId = '".$menuId."'";
        $this->db->query($sql);

        redirect('adminPanel/menu', 'refresh');
    }
    public function addMenu(){
        if(strcmp($this->input->post('menuType'),"SPECIAL_MENU")  == 0){
            $special = new special();
            $special->setSpecialName($this->input->post("menuName"));
            $special->setSpecialDesc($this->input->post("spl_desc"));

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg';
            $config['max_size']	= '1000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $config['file_name'] = $special->getImg();
            $this->load->library('upload', $config);

            if ($this->upload->do_upload("menuPicture")){
                log_message("info","BestMenu image uploaded". $special->getImg());
                $utility = new Utilities();
                $utility->addSpecial($special);
                redirect('adminPanel/menu', 'refresh');
            }else{
                log_message("info","Fail to Upload Special Menu Image". $special->getImg());
                echo $this->upload->display_errors();
            }
        }else if(strcmp($this->input->post('menuType'),"REGULAR_MENU")  != 0){
            $menu = new Menu();
            $menu->setMenuType($this->input->post("menuType"));
            $menu->setMenuFamilyId($this->input->post("menuFamilyType"));
            $menu->setMenuName($this->input->post("menuName"));
            $menu->setMenuPrice($this->input->post("menuPrice"));

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg';
            $config['max_size']	= '1000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $config['file_name'] = $menu->getImg();
            $this->load->library('upload', $config);

            if ($this->upload->do_upload("menuPicture")){
                log_message("info","BestMenu image uploaded". $menu->getImg());
                $utility = new Utilities();
                $utility->addMenu($menu);
                redirect('adminPanel/menu', 'refresh');
            }else{
                log_message("info","Fail to Upload Best Menu Image". $menu->getImg());
                echo $this->upload->display_errors();
            }
        }
        else{
            $menu = new Menu();
            $menu->setMenuType($this->input->post("menuType"));
            $menu->setMenuFamilyId($this->input->post("menuFamilyType"));
            $menu->setMenuName($this->input->post("menuName"));
            $menu->setMenuPrice($this->input->post("menuPrice"));

            $menu->setImg("");
            $utility = new Utilities();
            $utility->addMenu($menu);
            redirect('adminPanel/menu', 'refresh');
        }
    }
}