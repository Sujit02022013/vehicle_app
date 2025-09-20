<?php

include './header.php';

require_once "../../app/classes/CustomerManager.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customerManager = new CustomerManager("", "");
    
    $customerManager->addCustomer(
        [
            'name' => $_POST['name'],
            'image' => $_POST['image']
        ]
    );

    header('Location: ../index.php');
}

?>

<div class="container my-4">
    <h1>Add Customer</h1>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Customer Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="text" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Customer</button>
    </form>
</div>

</body>
</html>



    
