<?php
    class Controller {
       /* protected function model($model) {
            require_once 'app/models/' . $model . '.php';
            return new $model();
        }
      */
        protected function view($view, $data = [],$main="",$row="",$about="",$contact="") {
            require_once 'app/views/' . $view . '.php';
        }
    }