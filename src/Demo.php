<?php
namespace App;

class Demo
{

    private $book = [];
    private $unitPrice = 100;
    private $book_count = 0;
    private $totalPrice = 0;

    function __construct(array $data)
    {
        $this->book = $data;
    }
    public function getPrice()
    {
        do{
            $price = 0;
            $this->book_count = 0;
            foreach ($this->book as $key => $value) {
                if($value > 0){
                    $price += $this->unitPrice;
                    $this->book[$key]--;
                    $this->book_count++;
                }
            }
            switch($this->book_count){
                case 2:
                    $price *= 0.95;
                    break;
                case 3:
                    $price *= 0.90;
                    break;
                case 4:
                    $price *= 0.8;
                    break;
                case 5:
                    $price *= 0.75;
                    break;
            }
            $this->totalPrice += $price;
        }while($this->book_count > 0);

        return $this->totalPrice;
    }
}
