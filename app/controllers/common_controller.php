<?php
// smarty 配置
require(VENDOR_PATH.'/smarty/Smarty.class.php');

class CommonController extends Smarty
{

    //当前方法对应的模板
    var $template;

    function __construct(){
        global $a, $c;

        //smarty配置
        parent::__construct();
        //模板的路径
        $this->setTemplateDir(APP_PATH.'/views/'.$c);

        //编译模板位置
        $this->setCompileDir(APP_PATH.'/views/smarty/templates_c/');

        //配置文件路径
        $this->setConfigDir(APP_PATH.'/views/smarty/configs/');

        //缓存路径
        $this->setCacheDir(APP_PATH.'/views/smarty/cache/');

        $this->left_delimiter = "{{";
        $this->right_delimiter = "}}";


        $this->template = $a.".html";

        $this->assign("assets", "/app/assets");
    }


   // $s->display();
    /***
     * 重载smarty的display方法
     * @param null $template
     * @param null $cache_id
     * @param null $compile_id
     * @param null $parent
     */
    public function display($template = null, $cache_id = null, $compile_id = null, $parent = null)
    {
        $template = $template=="" ? $this->template : $template;
        parent::display($template, $cache_id = null, $compile_id = null, $parent = null);
    }

    /***
     * 清除session方法
     */
    function clearSession(){
        $_SESSION=array();
        if(isset($_COOKIE[session_name()])) {
            setcookie(session_name(), "", time()-3600, "/");
        }
    }
}