<?php 
echo"<br> 5. da gọi đến productmodel <br>";
class Productmodel {
    protected $table = 'products';
    public function getlist(){
    $data = [
        'item1',
      'item2', 
        'item3'
    ];
    return $data;
    }
    public function detail($id){
      $data = [
        'item1',
      'item2', 
        'item3'
    ];
    return $data[$id];
}
}
  

?>