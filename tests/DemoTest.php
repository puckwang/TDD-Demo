<?php

use App\Demo;

class DemoTest extends \PHPUnit\Framework\TestCase
{
    /** 一到五集的哈利波特，每一本都是賣100元 */
    public function test_for_只一本就是100元()
    {
        /** arrange */
        $data = [
            'first' => 1,
            'second' => 0,
            'third' => 0,
            'fourth' => 0,
            'fifth' => 0
        ];
        $totalPrice = 100;

        /** act */
        $Demo = new Demo($data);
        $resultPrice = $Demo->getPrice();

        /** assert */
        $this->assertEquals($totalPrice, $resultPrice);
    }

    public function test_for_買了兩本不同的書_則會有5off的折扣()
    {
        /** arrange */
        $data = [
            'first' => 1,
            'second' => 0,
            'third' => 1,
            'fourth' => 0,
            'fifth' => 0
        ];
        $totalPrice = 190;

        /** act */
        $Demo = new Demo($data);
        $resultPrice = $Demo->getPrice();

        /** assert */
        $this->assertEquals($totalPrice, $resultPrice);
    }
}
