<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 1/5/13
 * Time: 12:42 PM
 * To change this template use File | Settings | File Templates.
 */

class Utilities extends CI_Model {
    public function addContact($contact){
        log_message('info','in AddContact');
        $data = array(
            'id'=>$contact->getId(),
            'contactName'=>$contact->getContactName(),
            'email'=>$contact->getEmail(),
            'phoneNumber'=>$contact->getPhoneNumber(),
            'phoneNumber1'=>$contact->getPhoneNumber1(),
            'phoneNumber2'=>$contact->getPhoneNumber2(),
            'fax'=>$contact->getFax(),
            'street'=>$contact->getStreet(),
            'state'=>$contact->getState(),
            'city'=>$contact->getCity(),
            'zip'=>$contact->getZip()
        );
        $this->db->insert("contact",$data);
        log_message("info", "Contact Info Added to Database");
    }

    public function addMenuFamily($menuFamily){
        log_message("info","in addMenuFamily");
        $data = array(
            'id'=>$menuFamily->getId(),
            'menuName'=>$menuFamily->getMenuName(),
            'flg'=>$menuFamily->getFlg()
        );
        $this->db->insert("menuFamily",$data);
        log_message("info", "Contact Info Added to Database");
    }

    public function addMenu($menu){
        log_message("info","in addMenu");
        $data = array(
            'id'=>$menu->getId(),
            'menuName'=>$menu->getMenuName(),
            'menuPrice'=>$menu->getMenuPrice(),
            'menuFamilyId'=>$menu->getMenuFamilyId(),
            'menuType'=>$menu->getMenuType(),
            'img'=>$menu->getImg(),
            'flg'=>$menu->getFlg()
        );
        $this->db->insert("menu",$data);
        log_message("info", "Menu Info Added to Database");
    }

    public function addSpecial($special){
        log_message("info","in addSpecial");
        $data = array(
            'id'=>$special->getId(),
            'specialName'=>$special->getSpecialName(),
            'SpecialDesc'=>$special->getSpecialDesc(),
            'img'=>$special->getImg(),
            'flg'=>$special->getFlg()
        );
        $this->db->insert("special",$data);
        log_message("info", "Special Info Added to Database");
    }

    public function addIndexImage($indexImage){
        log_message("info","in IndexImage");
        $data = array(
            'id'=>$indexImage->getId(),
            'imgName'=>$indexImage->getImgName(),
            'flg'=>$indexImage->getFlg()
        );
        $this->db->insert("indexImage",$data);
        log_message("info", "IndexImage Added to Database");
    }

    public function addTageLine($tagline){
        log_message("info","in TageLine");
        $data = array(
            'id'=>$tagline->getId(),
            'tagline1'=>$tagline->getTagline1(),
            'tagline2'=>$tagline->getTagline2(),
            'flg'=>$tagline->getFlg()
        );
        $this->db->insert("tagline",$data);
        log_message("info", "TagLine Added to Database");
    }

    public function addAbout($about){
        log_message("info","in About");
        $data = array(
            'id'=>$about->getId(),
            'about'=>$about->getAbout(),
            'flg'=>$about->getFlg()
        );
        $this->db->insert("about",$data);
        log_message("info", "About Added to Database");
    }
}