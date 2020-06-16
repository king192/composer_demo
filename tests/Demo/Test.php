<?php


use Demo\TestDir\Test1;

class Test extends \PHPUnit\Framework\TestCase
{
    public function test1() {
        $obj = new Test1();
        $this->assertTrue($obj->helo() === 'helo');
    }
}
