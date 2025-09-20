<?php
include './views/header.php';

require_once "../app/classes/MovieManager.php";
require_once "../app/classes/CustomerManager.php";

$movieManager = new MovieManager("", "","", "");
$movies = $movieManager->getMovies();

$customerManager = new CustomerManager("", "");
$customers = $customerManager->getCustomers();

// var_dump($vehicles);
// exit;
?>
<!-- Movie Section -->
<div class="container my-4">
    <h1>Movie Available</h1>
    <a href="./../public/views/addMovie.php" class="btn btn-success mb-4">Add Movie</a>
    <div class="row">
        <!-- Loop Go here -->
         <?php foreach ($movies as $id => $movie): ?>

            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $movie['image']; ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie['name']; ?></h5>
                        <p class="card-text">Type: <?php echo $movie['type']; ?></p>
                        <p class="card-text">Price: $<?= $movie['price']; ?></p>
                        <a href="./views/editMovie.php?id=<?= $id; ?>" class="btn btn-primary">Edit</a>
                        <a href="./views/deleteMovie.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
        <!-- Loop ends here -->
    </div>
</div>
<!-- Customer Section -->
<div class="container my-4">
    <h1>Our valued Customers</h1>
    <a href="./../public/views/addCustomer.php" class="btn btn-success mb-4">Add Customer</a>
    <div class="row">
        <!-- Loop Go here -->
    <?php foreach ($customers as $id => $customer): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $customer['image']; ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $customer['name']; ?></h5>
                        <a href="./views/editCustomer.php?id=<?= $id; ?>" class="btn btn-primary">Edit</a>
                        <a href="./views/deleteCustomer.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
         <?php endforeach; ?> 
        <!-- Loop ends here -->
    </div>
</div>

</body>
</html>
