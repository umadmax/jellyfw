<?php
  /*
   * Base Controller
   * Loads models & views
  */

  class Controller {
    // Load model
    public function model($model) {
      // Require model file...
      require_once('../app/models/' .$model. '.php');

      // ...and instatiate it
      return new $model();
    }

    // Load view
    public function view($view, $data = []) {
      // Check for view file
      if(file_exists('../app/views/' .$view. '.php')) {
        // If exists, require it
        require_once('../app/views/' .$view. '.php');
      }
      else {
        die('View does not exist');
      }


    }
  }
