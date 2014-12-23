<?php
class FriendController extends CommonController
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
        $this->display("friend.html");
    }
}