
<?php
class Thuvienanh extends Controller {
    public $model;
        private $data = [];
function __construct() {
// $this->model = $this->Model("Personmodel");
}
public function index() {
   $this->data["content"] = 'test/test';
       $this->data['subcontent']['kq'] = "haha";
     $this->render('layout/layout_client',  $this->data); 
}
public function result() {
   $this->data["content"] = 'ketqua';
       $this->data['subcontent']['kq'] = "haha";
     $this->render('layout/layout_client',  $this->data); 
}

}

?>