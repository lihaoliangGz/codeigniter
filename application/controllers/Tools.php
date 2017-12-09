<?php
defined("BASEPATH") OR exit("没有访问权限");

/**
 * User: lhl
 * Date: 2017/12/7 0007
 * Desc: TODO
 */
class Tools extends CI_Controller {

    public function index($to='World') {
        echo "Hello {$to}!" . PHP_EOL;
    }
}