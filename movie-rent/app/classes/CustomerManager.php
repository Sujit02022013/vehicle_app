<?php

require_once 'CustomerBase.php';
require_once 'CustomerActions.php';
require_once 'CustomerFileHandler.php';

class CustomerManager extends CustomerBase implements CustomerActions {
    use CustomerFileHandler;

    public function addCustomer($data) {
        $customers = $this->readFile();
        $customers[] = $data;
        $this->writeFile($customers);
    }

    public function editCustomer($id, $data) {
        $customers = $this->readFile();
        if (isset($customers[$id])) {
            $customers[$id] = $data;
            $this->writeFile($customers);

        }
    }

    public function deleteCustomer($id) {
        $customers = $this->readFile();
        if (isset($customers[$id])) {
            unset($customers[$id]);
            $customers = array_values($customers); // Reindex array
            $this->writeFile($customers);
        }
    }

    public function getCustomers() {
        return $this->readFile();
       
    }

    // Implement abstract method
    public function getDetails() {
        
    }
}
