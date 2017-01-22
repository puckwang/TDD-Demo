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
        $this->book_count = $data['first'] + $data['second']
                           + $data['third'] + $data['fourth']
                           + $data['fifth'];
    }

    public function getPrice()
    {
        if($this->book_count === 1)
            $this->totalPrice = 100;

        return $this->totalPrice;
    }
}
