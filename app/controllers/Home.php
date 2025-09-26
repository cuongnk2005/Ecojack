<?php
class Home extends Controller
{
  public $model;
  private $data = [];
  public function __construct()
  {
    $this->model = $this->Model("Homemodel");
  }
  public function index()
  {
    //  $data = $this->model->getlist();
    //  echo '<pre>';
    //  print_r($data);
    //  echo '</pre>';
    //  $datail = $this->model->detail(0);
    //  echo '<pre>';
    //  print_r($datail);
    //  echo '</pre>';
    $this->data["content"] = 'index';
    $this->data['subcontent']['kq'] = "haha";
    $this->render('layout/layout_client', $this->data);
  }
  public function about()
  {
    $this->data["content"] = 'about';
     $this->data['subcontent']['kq'] = "haha";
    $this->render('layout/layout_client', $this->data);
    
  }
   public function contact()
  {
    $this->data["content"] = 'contact';
     $this->data['subcontent']['kq'] = "haha";
    $this->render('layout/layout_client', $this->data);
    
  }
    public function login()
  {
    $this->data["content"] = 'auth/login';
     $this->data['subcontent']['kq'] = "haha";
    $this->render('layout/layout_client', $this->data);
    
  }
   public function register()
  {
    $this->data["content"] = 'auth/logintest';
     $this->data['subcontent']['kq'] = "haha";
    $this->render('layout/layout_client', $this->data);
    
  }
   public function test()
  {
    $this->data["content"] = 'test/test';
     $this->data['subcontent']['kq'] = "haha";
    $this->render('layout/layout_client', $this->data);
    
  }
}
?>