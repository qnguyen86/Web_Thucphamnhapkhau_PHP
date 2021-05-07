<?php
include "models/ModelContact.php";
    class ControllerContact extends Controller{
use ModelContact;
        public function index(){
            $this->loadView("ViewContact.php");
        }
    }
?>