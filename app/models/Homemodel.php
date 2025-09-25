<?php 
// echo"<br> 7. da gọi đến Homemodel <br>";
class Homemodel {
    protected $table = 'products';
    public function getlist(){
    $data = [
        'item1',
      'item2', 
        'item3'
    ];
    return $data;
    }
    public function detail( $id ){
      $data = [
        'item1',
      'item2', 
        'item3'
    ];
    return $data[ $id ];
}

}
  

?>