<?php

include './header.php';

require_once "../../app/classes/MovieManager.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $movieManager = new MovieManager("", "","", "");
    
    $movieManager->addMovie(
        [
            'name' => $_POST['name'],
            'type' => $_POST['type'],
            'price' => $_POST['price'],
            'image' => $_POST['image']
        ]
    );

    header('Location: ../index.php');
}

?>

<div class="container my-4">
    <h1>Add Movie</h1>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Movie Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Movie Type</label>
            <input type="text" name="type" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="text" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Movie</button>
    </form>
</div>

</body>
</html>



    
