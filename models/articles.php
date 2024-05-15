<?php
class Articles {
    public $image;
    public $title;
    public $price;
    public $tipology; 
    public $category; 

    public function __construct($_image, $_title, $_price, Typologies $_tipology, Categories $_category)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
        $this->tipology = $_tipology; 
        $this->category = $_category; 
    }
}
?>