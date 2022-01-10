<?php

class Form {
    
    private $data; //donnée du formulaires


    public function __construct ($data) {
        $this->data = $data;

    }


    public function getData()
    {
        return $this->data;
    
    }

    public function getValue($key) {
    if(isset($this->data[$key])) 
    {
        return $this->data[$key];
    } else {
        return NULL;
    }
}

  
    public function createInput ($key) {
        echo '<label for="' .$key. '">' .$key. '</label>';
        echo '<input type="text" name="'.$key.'" value="'.$this->getValue($key).' ">';
    }



    public function createSubmit($text) {
        echo '<button type="submit"> ' . $text . '</button>';

    }

}



?>