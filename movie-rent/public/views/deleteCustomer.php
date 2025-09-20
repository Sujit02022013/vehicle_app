<?php

include './header.php';

require_once "../../app/classes/CustomerManager.php";

$customerManager = new CustomerManager("", "");


$id = $_GET['id'];
if ($id === null) {
    header ('Location: ../index.php');
    exit;
}

$customers = $customerManager->getCustomers();

$cutomer = $cutomers[$id] ?? null;

if ($cutomer === null) {
    header ('Location: ../index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {
        $customerManager->deleteCustomer($id);
    }
    header('Location: ../index.php');
}
?>

<div class="container my-4">
    <h1>Delete Customer</h1>
    <p>Are you sure you want to delete <strong></strong>?</p>
    <form method="POST">
        <button type="submit" name="confirm" value="yes" class="btn btn-danger">Yes, Delete</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>