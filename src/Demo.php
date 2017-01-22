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
        $this->getSameCount();
    }
    private function getSameCount()
    {
        $this->book_count = 0;
        foreach ($this->book as $value) {
            if($value > 0)
                $this->book_count++;
        }
    }
    public function getPrice()
    {
        while($this->book_count > 0){
            $price = 0;
            switch($this->book_count){
                case 2:
                    foreach ($this->book as $key => $value) {
                        if($value > 0)
                        $price += $this->unitPrice;
                        $this->book[$key]--;
                    }
                    $price *= 0.95;
                    break;
                case 3:
                    foreach ($this->book as $key => $value) {
                        if($value > 0)
                        $price += $this->unitPrice;
                        $this->book[$key]--;
                    }
                    $price *= 0.90;
                    break;
                case 4:
                    foreach ($this->book as $key => $value) {
                        if($value > 0)
                        $price += $this->unitPrice;
                        $this->book[$key]--;
                    }
                    $price *= 0.8;
                    break;
                case 5:
                    foreach ($this->book as $key => $value) {
                        if($value > 0)
                            $price += $this->unitPrice;
                        $this->book[$key]--;
                    }
                    $price *= 0.75;
                    break;
                default:
                    foreach ($this->book as $key => $value) {
                        if($value > 0)
                            $price += $this->unitPrice;
                        $this->book[$key]--;
                    }
            }
            $this->totalPrice += $price;
            $this->getSameCount();
        }

        return $this->totalPrice;
    }
}
