<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 1/5/13
 * Time: 12:36 PM
 * To change this template use File | Settings | File Templates.
 */

class schema extends CI_Controller {

    public function setUp(){
        $database = new Database();
        $database->createLoginTable();
        $database->createContactTable();
        $database->createFamilyTable();
        $database->createMenuTable();
        $database->createSpecialMenuTable();
        $database->createIndexImage();
        $database->createSubIndexImage();
        $database->createTageLine();
        $database->createAbout();
        $database->createWhyus();
        $database->createPeople();
    }
    public function createLogin(){
        $database = new Database();
        $database->createLoginTable();
    }
    public function createContact(){
        $database = new Database();
        $database->createContactTable();
    }

    public function createMenuFamily(){
        $database = new Database();
        $database->createFamilyTable();
     }

    public function createMenu(){
        $database = new Database();
        $database->createMenuTable();
    }

    public function createSpecial(){
        $database = new Database();
        $database->createSpecialMenuTable();
    }

    public function createIndexImage(){
        $database = new Database();
        $database->createIndexImage();
    }

    public function createSubIndex(){
        $database = new Database();
        $database->createSubIndexImage();
    }

    public function createTagLine(){
        $database = new Database();
        $database->createTageLine();
    }

    public function createAbout(){
        $database = new Database();
        $database->createAbout();
    }

    public function createWhyUs(){
        $database = new Database();
        $database->createWhyus();
    }

    public function createPeople(){
        $database = new Database();
        $database->createPeople();
    }
}