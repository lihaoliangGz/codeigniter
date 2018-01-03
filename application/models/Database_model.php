<?php
/**
 * User: lhl
 * Date: 2017/12/9 0009
 * Desc: TODO
 */

class Database_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function query_test() {
        //$query=$this->db->query('SELECT * FROM news');

        //标准插入
        //$sql = "INSERT INTO news VALUES(3,'第三条新闻','third','third new text')";
        //$this->db->query($sql);

        $query=$this->db->get('news');

        $data = array(
            'id' => 4,
            'title' => '第四条新闻',
            'slug' => 'four',
            'text'=>'four new text'
        );

        $this->db->insert('news', $data);

        return $query->row_array();
    }
}