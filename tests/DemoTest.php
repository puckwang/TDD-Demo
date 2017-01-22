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

    /** 第一集買了一本，第三集也買了一本，價格應為100*2*0.95=190 */
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

    /** 一三五集各買了一本，價格應為100*3*0.9=270 */
    public function test_for_買了三本不同的書_則會有10off的折扣()
    {
        /** arrange */
        $data = [
            'first' => 1,
            'second' => 0,
            'third' => 1,
            'fourth' => 0,
            'fifth' => 1
        ];
        $totalPrice = 270;

        /** act */
        $Demo = new Demo($data);
        $resultPrice = $Demo->getPrice();

        /** assert */
        $this->assertEquals($totalPrice, $resultPrice);
    }

    /** 一二三四集各買了一本，價格應為100*4*0.8=320 */
    public function test_for_買了四本不同的書_則會有20off的折扣()
    {
        /** arrange */
        $data = [
            'first' => 1,
            'second' => 1,
            'third' => 1,
            'fourth' => 1,
            'fifth' => 0
        ];
        $totalPrice = 320;

        /** act */
        $Demo = new Demo($data);
        $resultPrice = $Demo->getPrice();

        /** assert */
        $this->assertEquals($totalPrice, $resultPrice);
    }

    /** 一次買了整套，一二三四五集各買了一本，價格應為100*5*0.75=375 */
    public function test_for_買了整套五本_則會有25off的折扣()
    {
        /** arrange */
        $data = [
            'first' => 1,
            'second' => 1,
            'third' => 1,
            'fourth' => 1,
            'fifth' => 1
        ];
        $totalPrice = 375;

        /** act */
        $Demo = new Demo($data);
        $resultPrice = $Demo->getPrice();

        /** assert */
        $this->assertEquals($totalPrice, $resultPrice);
    }
}
