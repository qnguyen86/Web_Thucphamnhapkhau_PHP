<?php
include "models/ModelThongBao.php";
    class ControllerThongBao extends Controller{
use ModelThongBao;
        public function index(){
            $this->loadView("ViewThongBao.php");
        }
    }
?>