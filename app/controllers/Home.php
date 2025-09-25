<?php
class Home extends Controller{
    public $model;
    public function __construct() {
      $this->model = $this->Model("Homemodel");
    }
    public function index(){
    //  $data = $this->model->getlist();
    //  echo '<pre>';
    //  print_r($data);
    //  echo '</pre>';
    //  $datail = $this->model->detail(0);
    //  echo '<pre>';
    //  print_r($datail);
    //  echo '</pre>';
    $this->render('index');
    }
    }
?>