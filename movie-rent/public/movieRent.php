<?php

// ===============================
// Movie Class
// ===============================
class Movie {
    // Step 1: Declare private properties
    private $title;
    private $availableCopies;

    // Constructor - initializes title and copies
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Getter method to return movie title
    public function getTitle() {
        return $this->title;
    }

    // Getter method to return available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to rent a movie
    public function rentMovie() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--; // decrease by 1
            echo "Successfully rented '{$this->title}' ✅<br>";
        } else {
            echo "Sorry, '{$this->title}' is out of stock ❌<br>";
        }
    }

    // Method to return a movie
    public function returnMovie() {
        $this->availableCopies++; // increase by 1
        echo "Successfully returned '{$this->title}' 🔄<br>";
    }
}

// ===============================
// Customer Class
// ===============================
class Customer {
    // Step 2: Declare private property
    private $name;

    // Constructor - initializes customer name
    public function __construct($name) {
        $this->name = $name;
    }

    // Getter method to return customer name
    public function getName() {
        return $this->name;
    }

    // Method: customer rents a movie
    public function rentMovie(Movie $movie) {
        echo "{$this->name} wants to rent '{$movie->getTitle()}'...<br>";
        $movie->rentMovie(); // call Movie's rent method
    }

    // Method: customer returns a movie
    public function returnMovie(Movie $movie) {
        echo "{$this->name} is returning '{$movie->getTitle()}'...<br>";
        $movie->returnMovie(); // call Movie's return method
    }
}

// ===============================
// Usage Example
// ===============================

// Step 3: Create 2 Movies
$movie1 = new Movie("Inception", 4);
$movie2 = new Movie("Interstellar", 2);

// Step 4: Create 2 Customers
$customer1 = new Customer("Alice");
$customer2 = new Customer("Bob");

// Step 5: Each customer rents one movie
$customer1->rentMovie($movie1); // Alice rents Inception
$customer2->rentMovie($movie2); // Bob rents Interstellar

// Step 6: Display available copies
echo "<br>Available Copies of '{$movie1->getTitle()}': " . $movie1->getAvailableCopies() . "<br>";
echo "Available Copies of '{$movie2->getTitle()}': " . $movie2->getAvailableCopies() . "<br>";

?>
