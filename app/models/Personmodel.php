<?php
class Personmodel
{
    public $id;
    public $name;
    public $email;
    public function __construct($id= 1, $name='nkc', $email='nkc@gmail.com')
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
    public function infor()
    {
        echo "id : $this->id <br>";
        echo "name : $this->name <br>";
        echo "email : $this->email";

    }
}

?>