<?php

require_once "../../app/classes/MovieManager.php";

$movieManager = new MovieManager("", "","", "");


$id = $_GET['id'];
if ($id === null) {
    header ('Location: ../index.php');
    exit;
}

$movies = $movieManager->getMovies();

$movie = $movies[$id] ?? null;

if ($movie === null) {
    header ('Location: ../index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $movieManager = new MovieManager("", "","", "");

    $movieManager->editMovie($id,
        [
            'name' => $_POST['name'],
            'type' => $_POST['type'],
            'price' => $_POST['price'],
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
    <h1>Edit Movie</h1>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Movie Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($movie['name'] ?? '') ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Movie Type</label>
            <input type="text" name="type" class="form-control" value="<?= htmlspecialchars($movie['type'] ?? '') ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" value="<?= htmlspecialchars($movie['price'] ?? '') ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="text" name="image" class="form-control" value="<?= htmlspecialchars($movie['image'] ?? '') ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Movie</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>