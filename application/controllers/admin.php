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
                log_message("info","Special image uploaded". $special->getImg());
                $utility = new Utilities();
                $utility->addSpecial($special);
                redirect('adminPanel/menu', 'refresh');
            }else{
                log_message("info","Fail to Upload Special Menu Image". $special->getImg());
                echo $this->upload->display_errors();
            }
        }else if(strcmp($this->input->post('menuType'),"REGULAR_MENU")  != 0){  //For Best Menu
            $menu = new Menu();
            $menu->setMenuType($this->input->post("menuType"));
            $menu->setMenuFamilyId("BEST_MENU");
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

    public function addIndexImage(){
        $indexImage = new IndexImage();
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg';
        $config['max_size']	= '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['file_name'] = $indexImage->getImgName();
        $this->load->library('upload', $config);

        if ($this->upload->do_upload("indexPicture")){
            log_message("info","Index image uploaded". $indexImage->getImgName());
            $utility = new Utilities();
            $utility->addIndexImage($indexImage);
            redirect('adminPanel/admin', 'refresh');
        }else{
            log_message("info","Fail to Upload Index Image". $indexImage->getImgName());
            echo $this->upload->display_errors();
        }
    }

    public function addSubIndexImage(){
        $subIndex = new SubIndex();
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg';
        $config['max_size']	= '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['file_name'] = $subIndex->getImgName();
        $this->load->library('upload', $config);

        if ($this->upload->do_upload("subIndexPicture")){
            log_message("info","Index image uploaded". $subIndex->getImgName());
            $utility = new Utilities();
            $utility->addSubIndex($subIndex);
            redirect('adminPanel/admin', 'refresh');
        }else{
            log_message("info","Fail to Upload Index Image". $subIndex->getImgName());
            echo $this->upload->display_errors();
        }
    }

    public function addTagLine(){
        $tagline = new TagLine();
        $tagline->setTagline1($this->input->post("tagLine1"));
        $tagline->setTagline2($this->input->post("tagLine2"));

        $utility = new Utilities();
        $utility->addTageLine($tagline);
        redirect('adminPanel/admin','refresh');
    }

    public function addWhyUs(){
        $whyUs = new WhyUs();
        $whyUs->setWhyus($this->input->post("whyUs"));

        $utility = new Utilities();
        $utility->addWhyUs($whyUs);
        redirect('adminPanel/admin','refresh');
    }

    public function addAbout(){
        $about = new About();
        $about->setAbout($this->input->post('about'));

        $utility = new Utilities();
        $utility->addAbout($about);
        redirect('adminPanel/admin','refresh');
    }

    public function deleteMenu(){
        foreach($this->input->post('MENU_OPT') as $id){
            $sql = "DELETE FROM menu WHERE id = '".$id."'";
            $this->db->query($sql);
        }
        redirect('adminPanel/menu','refresh');
    }

    public function addPeople(){
        $people = new People();
        $people->setName($this->input->post('peopleName'));
        $people->setDesignation($this->input->post('designation'));
        $people->setDesc($this->input->post('peopleDesc'));

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg';
        $config['max_size']	= '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['file_name'] = $people->getImg();
        $this->load->library('upload', $config);

        if ($this->upload->do_upload("peoplePicture")){
            $utility = new Utilities();
            $utility->addPeople($people);
        }
        redirect('adminPanel/people','refresh');
    }

    public function deletePeople(){
        foreach($this->input->post('people') as $id){
            $sql = "DELETE FROM people WHERE id = '".$id."'";
            $this->db->query($sql);
        }
        redirect('adminPanel/people','refresh');
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