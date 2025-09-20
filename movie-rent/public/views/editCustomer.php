<?php

require_once "../../app/classes/CustomerManager.php";

$customerManager = new CustomerManager("", "","", "");


$id = $_GET['id'];
if ($id === null) {
    header ('Location: ../index.php');
    exit;
}

$customers = $customerManager->getCustomers();

$customer = $customers[$id] ?? null;

if ($customer === null) {
    header ('Location: ../index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customerManager = new CustomerManager("", "");

    $customerManager->editCustomer($id,
        [
            'name' => $_POST['name'],
            'image' => $_POST['image']
        ]
    );

    header('Location: ../index.php');
}

// var_dump($id);
// exit;

include './header.php';
?>


<div class="container my-4">
    <h1>Edit Customer</h1>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Customer Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($customer['name'] ?? '') ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="text" name="image" class="form-control" value="<?= htmlspecialchars($customer['image'] ?? '') ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Customer</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>