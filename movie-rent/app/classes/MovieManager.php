<?php

require_once 'MovieBase.php';
require_once 'MovieActions.php';
require_once 'FileHandler.php';

class MovieManager extends MovieBase implements MovieActions {
    use FileHandler;

    public function addMovie($data) {
        $movies = $this->readFile();
        $movies[] = $data;
        $this->writeFile($movies);
    }

    public function editMovie($id, $data) {
        $movies = $this->readFile();
        if (isset($movies[$id])) {
            $movies[$id] = $data;
            $this->writeFile($movies);

        }
    }

    public function deleteMovie($id) {
        $movies = $this->readFile();
        if (isset($movies[$id])) {
            unset($movies[$id]);
            $movies = array_values($movies); // Reindex array
            $this->writeFile($movies);
        }
    }

    public function getMovies() {
        return $this->readFile();
       
    }

    // Implement abstract method
    public function getDetails() {
        
    }
}
