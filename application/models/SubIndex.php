<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 12/5/13
 * Time: 10:28 AM
 * To change this template use File | Settings | File Templates.
 */

class SubIndex extends CI_Model {
    private $id;
    private $imgName;
    private $flg;

    public function __construct(){
        $this->generateId();
        $this->flg = 1;
    }
    private function generateId(){
        $this->id = "sIndex".time();
        $this->imgName = "subIndex_".$this->id.".jpg";
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

    public function setImgName($imgName)
    {
        $this->imgName = $imgName;
    }

    public function getImgName()
    {
        return $this->imgName;
    }
}