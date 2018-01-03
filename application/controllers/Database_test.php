<?php
/**
 * User: lhl
 * Date: 2017/12/9 0009
 * Desc: TODO
 */

class Database_test extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('database_model');
    }

    public function index() {
        $data=$this->database_model->query_test();
        var_dump($data);
    }
}