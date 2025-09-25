<?php

class product extends Controller {
    public $Productmodel;
    public $data =[];
    public function __construct() {
        echo "<br> 5. đã chạy vào product <br>";
      $this->Productmodel = $this->Model('Productmodel');
    }
    public function index(){
       echo'gọi hàm index';
    }
    public function getlist(): void{
      $this->data['subcontents']['title']= 'danh sách sản phẩm';
    //  $dataproduct = $this->Productmodel->getList();
    //  $this->data['dataproduct'] = $dataproduct;
    //  echo'đã gọi được vào trong hàm';
    //  $this->render('product/list',$this->data);
    $this->data['content'] = 'product/list'; 
    $this->data['subcontent']['dataproduct'] = $this->Productmodel->getlist();
    $this->render('layout/layout_client', $this->data);
    }
  public function detail($id= 0){
    $detail = $this->Productmodel->detail($id);
    $this->data['content'] = $detail;  
    $this->render('product/detail',$this->data);
  }
}
?>