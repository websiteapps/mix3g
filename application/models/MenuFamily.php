<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 1/5/13
 * Time: 11:00 AM
 * To change this template use File | Settings | File Templates.
 */

class MenuFamily extends CI_Model {
    private $id;
    private $menuName;
    private $flg;

    public function __construct(){
        $this->generateId();
        $this->flg = 1;
    }

    public function generateId()
    {
        $this->id = "f".time();
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

    public function setFlg($flg)
    {
        $this->flg = $flg;
    }

    public function getFlg()
    {
        return $this->flg;
    }


}