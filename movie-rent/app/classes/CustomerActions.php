<?php


interface CustomerActions {

  public function addCustomer($data);

  public function editCustomer($id, $data);

  public function deleteCustomer($id);

  public function getCustomers();
   
}
