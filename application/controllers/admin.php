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
        $menuFamily->setMenuName("Sandwiches");

        $utility = new Utilities();
        $utility->addMenuFamily($menuFamily);
    }

    public function addMenu(){
        $menu = new Menu();
        $menu->setMenuName("Mexican Sandwicthe");
      //$menu->setMenuFamilyId("f1367393223");
      //$menu->setMenuFamilyId("f1367400990");
        $menu->setMenuFamilyId("f1367406237");

        $utility = new Utilities();
        $utility->addMenu($menu);
    }
}