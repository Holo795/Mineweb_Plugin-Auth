<?php
class AuthAppSchema extends CakeSchema {
    
        public $file = 'schema.php';
    
        public function before($event = array()) {
            return true;
        }
    
        public function after($event = array()) {}

        public $users = [
            'auth-uuid' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
            'auth-accessToken' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
            'auth-clientToken' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1')
        ];
}
