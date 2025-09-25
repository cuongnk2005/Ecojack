
<?php
class Thuvienanh extends Controller {
    public $model;
        private $data = [];
function __construct() {
// $this->model = $this->Model("Personmodel");
}
public function index() {
   $this->data["content"] = 'ketqua';
       $this->data['subcontent']['kq'] = "haha";
     $this->render('layout/layout_client',  $this->data); 
}
public function infor() {
    $data = [];
    $data["content"] = "person/person";
    $data["subcontent"]['subcontent'] = $this->model; 
$this->render('layout/layout_client', $data);
}
public function getsanpham(){
    $model = $this->Model('Sanphammodel');
    $data = [];
    $data['content'] = 'person/person';
    $data['subcontent']['kq'] =$model->getsp();
    echo '<pre>';
    print_r($data['subcontent']['kq']);
    echo '</pre>';
    $this->render('layout/layout_client', $data);

}
}

?>