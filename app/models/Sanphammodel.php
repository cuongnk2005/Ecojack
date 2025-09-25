<h1>SPMD</h1>
<?php
class Sanphammodel extends DB{

    public function getsp(){
        $sql = "SELECT * FROM sanpham";
        $kq = mysqli_query($this->conn,$sql);
        echo '<pre>';
        print_r($kq);
        echo '</pre>';
        return $kq;
    }

}

?>