<?php
 class UsersController extends Controller
 {     
     //Constructor
     public function __construct($model, $controllerName, $action)
     {
         parent::__construct($model, $controllerName, $action);
     }
     
     
     public function homepage()
     {
         $message = '';
         $this->set('header', "Oil's Well van Marijn!");
         $this->set('message', $message);
         
     }
 }
?>