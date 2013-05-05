<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 30/4/13
 * Time: 4:44 PM
 * To change this template use File | Settings | File Templates.
 */

class BestMenu {
    private $id;
    private $menuName;
    private $menuPrice;
    private $img;
    private $flg;

    function __construct()
    {
        $this->generateId(); //Creating Unique id with Unix TimeStamp
        $this->generateImgPath();
        $this->menuPrice = 0;
        $this->flg = 1;
    }

    private function generateId(){
        $this->id = "b".time();
    }

    private function generateImgPath(){
        $this->img = "bestMenu_" . $this->id . ".jpg";
    }
    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getImg()
    {
        return $this->img;
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
        $this->id = $id;
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