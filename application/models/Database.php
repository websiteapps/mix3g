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
    public function createContactTable($tableName){
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
                'constraint' => '10',
            ),
            'phoneNumber1' => array(
                'type' =>'VARCHAR',
                'constraint' => '10',
            ),
            'phoneNumber2' => array(
                'type' =>'VARCHAR',
                'constraint' => '10',
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
        if($this->dbforge->create_table($tableName, TRUE)){
            log_message('info','Table Created');
        }else{
            log_message('error','Application = Fail to Create Table');
        }
    }
}