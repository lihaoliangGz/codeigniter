<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/5 0005
 * Time: 下午 2:58
 */

class Pages extends CI_Controller {

    public function view($page = 'home'){
        //echo APPPATH . 'views/pages/' . $page . '.php';
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            var_dump("zhixing");
            show_404();
        }

        $data['title'] = ucfirst($page);
        $this->load->view('templates/header',$data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer',$data);

    }
}