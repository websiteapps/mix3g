<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 5/5/13
 * Time: 7:16 PM
 * To change this template use File | Settings | File Templates.
 */

class special {
    private $id;
    private $specialName;
    private $SpecialDesc;
    private $img;
    private $flg;

    public function __construct(){
        $this->generateId();
        $this->flg = 1;
    }

    private function generateId(){
        $this->id = "s" . time();
        $this->img = "spl_" . $this->id . ".jpg";
    }

    public function setSpecialDesc($SpecialDesc)
    {
        $this->SpecialDesc = $SpecialDesc;
    }

    public function getSpecialDesc()
    {
        return $this->SpecialDesc;
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

    public function setSpecialName($specialName)
    {
        $this->specialName = $specialName;
    }

    public function getSpecialName()
    {
        return $this->specialName;
    }
}