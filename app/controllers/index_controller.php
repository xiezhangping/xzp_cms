<?php
class IndexController extends CommonController
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
        echo "这里是前台首页";
    }
}