<?php
class AdminController extends CommonController
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
        $this->display();
    }
    function friendly_link(){
        $this->display("friendly_link.html");
    }
}