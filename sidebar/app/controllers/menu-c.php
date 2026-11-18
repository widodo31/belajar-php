<?php
require_once 'menu-m.php';

class MenuC{
    private $menuModel;
    public function __construct(){
        $this->menuModel = new MenuM();
    }

    public function index(){
        return $this->menuModel->getMenuTree();
    }
}