<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 12/5/13
 * Time: 11:08 AM
 * To change this template use File | Settings | File Templates.
 */

class WhyUs extends CI_Model{
    private $id;
    private $whyus;
    private $flg;

    public function __construct(){
        $this->generateId();
        $this->flg = 1;
    }

    public function generateId(){
        $this->id  = "w".time();
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

    public function setWhyus($whyus)
    {
        $this->whyus = $whyus;
    }

    public function getWhyus()
    {
        return $this->whyus;
    }
}