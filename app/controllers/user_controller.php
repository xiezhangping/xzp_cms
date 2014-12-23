<?php
class UserController extends CommonController
{
    var $m;

    function __construct(){
        parent::__construct();
        //$this->m = D("article");
    }

    /***
     * 首页
     */
    function index(){
        //$this->display("user.html");
    }

    function login()
    {
        $this->display();
    }
}