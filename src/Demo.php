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
        foreach ($data as $value) {
            if($value > 0)
                $this->book_count++;
        }
    }

    public function getPrice()
    {
        switch($this->book_count){
            case 2:
                foreach ($this->book as $key => $value) {
                    $this->totalPrice += $value * $this->unitPrice;
                    $this->book[$key]--;
                }
                $this->totalPrice *= 0.95;
                break;
            default:
                foreach ($this->book as $value) {
                    $this->totalPrice += $value * $this->unitPrice;
                }
        }
        return $this->totalPrice;
    }
}
