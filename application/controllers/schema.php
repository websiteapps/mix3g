<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 1/5/13
 * Time: 12:36 PM
 * To change this template use File | Settings | File Templates.
 */

class schema extends CI_Controller {

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
}