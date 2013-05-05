<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 30/4/13
 * Time: 4:25 PM
 * To change this template use File | Settings | File Templates.
 */

class Menu {
    private $id;
    private $menuFamilyId;
    private $menuName;
    private $menuPrice;
    private $img;
    private $menuType;
    private $flg;

    public function __construct()
    {
        $this->menuPrice = 0;
        $this->generateId();
        $this->flg = 1;
    }

    public function generateId(){
        $this->id = "m".time();
        $this->img = "menu_" . $this->id . ".jpg";
    }
    public function setMenuFamilyId($menuFamilyId)
    {
        $this->menuFamilyId = $menuFamilyId;
    }

    public function getMenuFamilyId()
    {
        return $this->menuFamilyId;
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

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setMenuType($menuType)
    {
        $this->menuType = $menuType;
    }

    public function getMenuType()
    {
        return $this->menuType;
    }

}