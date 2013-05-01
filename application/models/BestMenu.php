<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 30/4/13
 * Time: 4:44 PM
 * To change this template use File | Settings | File Templates.
 */

class BestMenu {
    private $imgId;
    private $menuName;
    private $menuPrice;
    private $flg;

    function __construct($menuName)
    {
        $this->menuName = $menuName;
        $this->setId($menuName); //Creating Unique id with Unix TimeStamp For ImageName
        $this->menuPrice = 0;
        $this->flg = 1;
    }


    public function setFlg($flg)
    {
        $this->flg = $flg;
    }

    public function getFlg()
    {
        return $this->flg;
    }

    private function setId($id)
    {
        $unixTimeStamp = time();
        $this->id = $unixTimeStamp . $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
    }

    public function getMenuName()
    {
        return $this->menuName;
    }

    public function setMenuPrice($menuPrice)
    {
        $this->menuPrice = $menuPrice;
    }

    public function getMenuPrice()
    {
        return $this->menuPrice;
    }




}