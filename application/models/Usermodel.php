<?php
class Usermodel extends CI_Model {

  function __construct() { 
    // Set table name 
    $this->table = 'users'; 
} 

public $username;
public $password;


public function validate($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get($this->table, 1);

        return $result;
      }


}
?>