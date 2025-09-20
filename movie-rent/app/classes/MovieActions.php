<?php


interface MovieActions {

  public function addMovie($data);

  public function editMovie($id, $data);

  public function deleteMovie($id);

  public function getMovies();
   
}

