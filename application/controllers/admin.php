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

    public function read(){
        $sql = "SELECT * FROM contact Order by id desc";
        $query = $this->db->query($sql);

        foreach($query->result() as $value){
            echo $value->id;
            echo "<br>";
        }
    }
}