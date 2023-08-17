<?php
class Mainmodel extends CI_Model {

  public function add($data) {
    $this->db->insert('purchase_order', $data);
}


}
?>