<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 8/5/13
 * Time: 3:10 PM
 * To change this template use File | Settings | File Templates.
 */

class TagLine extends CI_Model {
    private $id;
    private $tagline1;
    private $tagline2;
    private $flg;

    public function __construct(){
        $this->generateId();
        $this->flg = 1;
    }

    private function generateId(){
        $this->id = "t".time();
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

    public function setTagline1($tagline1)
    {
        $this->tagline1 = $tagline1;
    }

    public function getTagline1()
    {
        return $this->tagline1;
    }

    public function setTagline2($tagline2)
    {
        $this->tagline2 = $tagline2;
    }

    public function getTagline2()
    {
        return $this->tagline2;
    }
}