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
        $contact->setContactName($this->input->post("contactName"));
        $contact->setEmail($this->input->post("contactEmail"));
        $contact->setPhoneNumber($this->input->post("phoneNumber"));
        $contact->setPhoneNumber1($this->input->post("phoneNumber1"));
        $contact->setPhoneNumber2($this->input->post("phoneNumber2"));
        $contact->setFax($this->input->post("fax"));
        $contact->setStreet($this->input->post("street"));
        $contact->setState($this->input->post("state"));
        $contact->setCity($this->input->post("city"));
        $contact->setZip($this->input->post("zip"));

        $utility = new Utilities();
        $utility->addContact($contact);
        redirect('adminPanel/contact','refresh');

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

    public function sendEmail(){
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $msg = $this->input->post("msg");

        $msg .= "Contact Email = ".$email."<br>".$msg;

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'digsmoh@gmail.com',
            'smtp_pass' => '1nc1p1entg',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($email);
        $this->email->to('digvijaymohite27@gmail.com');
        $this->email->subject('Mail from '.$name);
        $this->email->message($msg);

        if($this->email->send()){
            echo '1';
            log_message("info","Email Send");
        }else{
            log_message("error",$this->email->print_debugger());
            echo '0';
        }
    }
}