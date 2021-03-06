<?php
class IncorrectNonAbstractMethodTestClass
{
    function testClass1();
    public function testClass2();
    private function testClass3();
    protected function testClass4();

    function hasBodyClass1() {
    }

    public function hasBodyClass2() {
    }

    private function hasBodyClass3() {
    }

    protected function hasBodyClass4() {
    }
}

abstract class IncorrectNonAbstractMethodTestAbstractClass
{
    public function testAbstractClass();
    abstract function abstractTest1();
    abstract public function abstractTest2();
    abstract protected function abstractTest3();

    function hasBodyAbstractClass1() {
    }

    public function hasBodyAbstractClass2() {
    }

    private function hasBodyAbstractClass3() {
    }

    protected function hasBodyAbstractClass4() {
    }
}

trait IncorrectNonAbstractMethodTestTrait
{
    public function testTrait();
    abstract function abstractTest1();
    abstract public function abstractTest2();
    abstract protected function abstractTest3();

    function hasBodyTrait1() {
    }

    public function hasBodyTrait2() {
    }

    private function hasBodyTrait3() {
    }

    protected function hasBodyTrait4() {
    }
}

interface IncorrectNonAbstractMethodTestInterface
{
    public function test();
    function test2();
}
