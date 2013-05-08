<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 30/4/13
 * Time: 5:30 PM
 * To change this template use File | Settings | File Templates.
 */

class Database extends CI_Model {
    private $logger;

    function __construct(){
        $this->load->dbforge();
    }

    public function createLoginTable(){
        $fields = array(
            'id' => array(
                'type' => 'varchar',
                'constraint' => 50,
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'password' => array(
                'type' => 'varchar',
                'constraint' => '100',
            ),
        );
        $this->dbforge->add_field($fields);
        if($this->dbforge->create_table("login", TRUE)){
            log_message('info','login Table Created');
            echo "login Table Created";
        }else{
            log_message('error','Application = Fail to Create FamilyMenu Table');
            echo "Fail to Create FamilyMenu Table";
        }
    }
    public function createFamilyTable(){
        $fields = array(
            'id' => array(
                'type' => 'varchar',
                'constraint' => 50,
            ),
            'menuName' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'flg' => array(
                'type' => 'int',
                'constraint' => '1',
            ),
        );
        $this->dbforge->add_field($fields);
        if($this->dbforge->create_table("menuFamily", TRUE)){
            log_message('info','FamilyMenu Table Created');
            echo "FamilyMenu Table Created";
        }else{
            log_message('error','Application = Fail to Create FamilyMenu Table');
            echo "Fail to Create FamilyMenu Table";
        }
    }

    public function createMenuTable(){
        $fields = array(
            'id' => array(
                'type' => 'varchar',
                'constraint' => 50,
            ),
            'menuName' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'menuPrice' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'menuFamilyId' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'menuType' => array(
                'type' => 'varchar',
                'constraint' => '50',
            ),
            'img' => array(
                'type' => 'varchar',
                'constraint' => '100',
            ),
            'flg' => array(
                'type' => 'int',
                'constraint' => '1',
            ),
        );
        $this->dbforge->add_field($fields);
        if($this->dbforge->create_table("menu", TRUE)){
            log_message('info','Menu Table Created');
            echo "Menu Table Created";
        }else{
            log_message('error','Application = Fail to Create Menu Table');
            echo "Fail to Create Menu Table";
        }
    }

    public function createSpecialMenuTable(){
        $fields = array(
            'id' => array(
                'type' => 'varchar',
                'constraint' => 50,
            ),
            'specialName' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'specialDesc' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'img' => array(
                'type' => 'varchar',
                'constraint' => '100',
            ),
            'flg' => array(
                'type' => 'int',
                'constraint' => '1',
            ),
        );
        $this->dbforge->add_field($fields);
        if($this->dbforge->create_table("special", TRUE)){
            log_message('info','Special Table Created');
            echo "Speical Table Created";
        }else{
            log_message('error','Application = Fail to Create Special Table');
            echo "Fail to Create Speical Table";
        }
    }
    public function createContactTable(){
        $fields = array(
            'id' => array(
                'type' => 'varchar',
                'constraint' => 50,
            ),
            'contactName' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'phoneNumber' => array(
                'type' =>'VARCHAR',
                'constraint' => '20',
            ),
            'phoneNumber1' => array(
                'type' =>'VARCHAR',
                'constraint' => '20',
            ),
            'phoneNumber2' => array(
                'type' =>'VARCHAR',
                'constraint' => '20',
            ),
            'email' => array(
                'type' =>'VARCHAR',
                'constraint' => '50',
            ),
            'fax' => array(
                'type' =>'VARCHAR',
                'constraint' => '20',
            ),
            'street' => array(
                'type' =>'VARCHAR',
                'constraint' => '100',
            ),
            'state' => array(
                'type' =>'VARCHAR',
                'constraint' => '100',
            ),
            'city' => array(
                'type' =>'VARCHAR',
                'constraint' => '100',
            ),
            'zip' => array(
                'type' =>'VARCHAR',
                'constraint' => '15',
            ),
        );
        $this->dbforge->add_field($fields);
        if($this->dbforge->create_table("contact", TRUE)){
            log_message('info','Contact Table Created');
            echo "Contact Table Created";
        }else{
            log_message('error','Application = Fail to Contact Create Table');
            echo "Fail to Create Contact Table";
        }
    }

    public function createIndexImage(){
        $fields = array(
            'id' => array(
                'type' => 'varchar',
                'constraint' => 50,
            ),
            'imgName' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'flg' => array(
                'type' => 'int',
                'constraint' => '1',
            ),
        );
        $this->dbforge->add_field($fields);
        if($this->dbforge->create_table("indexImage", TRUE)){
            log_message('info','IndexImage Table Created');
            echo "IndexImage Table Created";
        }else{
            log_message('error','Application = Fail to Create IndexImage Table');
            echo "Fail to Create IndexImage Table";
        }
    }

    public function createTageLine(){
        $fields = array(
            'id' => array(
                'type' => 'varchar',
                'constraint' => 50,
            ),
            'tagline1' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'tagline2' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'flg' => array(
                'type' => 'int',
                'constraint' => '1',
            ),
        );
        $this->dbforge->add_field($fields);
        if($this->dbforge->create_table("tagline", TRUE)){
            log_message('info','Tagline Table Created');
            echo "Tagline Table Created";
        }else{
            log_message('error','Application = Fail to Create Tagline Table');
            echo "Fail to Create Tagline Table";
        }
    }
}