<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 13/5/13
 * Time: 6:21 PM
 * To change this template use File | Settings | File Templates.
 */

class People extends CI_Model {
    private $id;
    private $name;
    private $designation;
    private $img;
    private $desc;
    private $flg;

    public function __construct(){
        $this->generateId();
        $this->flg = 1;
    }

    private function generateId(){
        $this->id = "p".time();
        $this->img = "people_".$this->id.".jpg";
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    public function getDesignation()
    {
        return $this->designation;
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

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


}