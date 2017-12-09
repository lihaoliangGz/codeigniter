<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/5 0005
 * Time: 下午 4:05
 */

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
        echo "News控制器的__construct执行";
    }

    public function index(){
        $data['news'] = $this->news_model->get_news();
        $data['title'] = "新闻内容";

        //var_dump($data) ;
        $this->load->view("news/index", $data);
    }

    public function view($slug = null) {
        $data['news_item'] = $this->news_model->get_news($slug);
        var_dump($data);
    }

    public function create(){

    }
}