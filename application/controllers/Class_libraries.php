<?php
defined("BASEPATH") OR exit("没有访问权限");
/**
 * User: lhl
 * Date: 2017/12/8 0008
 * Desc: TODO
 */

class Class_libraries extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    /**
     * 日历类
     */
    public function index() {
        $this->load->library('calendar');
        $data = array(
            3 => "http://www.baidu.com",
            7 => "http://www.taobao.com",
        );
        echo $this->calendar->generate(2017,6,$data);
    }

    /**
     * 配置类
     */
    public function test_config() {

    }

    /**
     * 加密类
     */
    public function test_encryption() {
        $this->load->library('encryption');
        $this->encryption;
    }

    /**
     * 文件上传
     */
    public function test_upload() {

        $this->load->view('upload', array('error' => ''));
    }

    /**
     * 处理文件上传
     */
    public function do_upload() {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 100;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }
}