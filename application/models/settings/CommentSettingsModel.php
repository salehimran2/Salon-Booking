<?php defined('BASEPATH') || exit('Direct script access is prohibited.');

class CommentSettingsModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get() {
        $res = $this->db
                    ->limit(1)
                    ->get('comments-settings')
                    ->row_array();
        return $res;
    }

    public function set($fields) {
        $this->db
             ->set($fields)
             ->where('id', 1)
             ->update('comments-settings');
    }
}