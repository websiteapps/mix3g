<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 8/5/13
 * Time: 5:12 PM
 * To change this template use File | Settings | File Templates.
 */

class About extends CI_Model {
    private $id;
    private $about;
    private $flg;

    function __construct(){
        $this->generateId();
        $this->flg = 1;
    }

    function generateId(){
        $this->id = "a".time();
    }

    public function setAbout($about)
    {
        $this->about = $about;
    }

    public function getAbout()
    {
        return $this->about;
    }

    public function setFlg($flg)
    {
        $this->flg = $flg;
    }

    public function getFlg()
    {
        return $this->flg;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}