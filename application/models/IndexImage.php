<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 8/5/13
 * Time: 1:25 PM
 * To change this template use File | Settings | File Templates.
 */

class IndexImage extends CI_Model {
    private $id;
    private $imgName;
    private $flg;

    public function __construct(){
        $this->generateId();
        $this->flg = 1;
    }

    private function generateId(){
        $this->id = "i".time();
        $this->imgName = "index_".$this->id.".jpg";
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