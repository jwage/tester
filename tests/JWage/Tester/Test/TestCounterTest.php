<?php

namespace JWage\Tester\Test;

use JWage\Tester\TestCounter;

class TestCounterTest extends BaseTest
{
    /**
     * @var string
     */
    private $testsDirectory;

    /**
     * @var TestRunner
     */
    private $testCounter;

    protected function setUp()
    {
        $this->testsDirectory = realpath(__DIR__.'/../../../../tests');

        $this->testCounter = new TestCounter($this->testsDirectory);
    }

    public function testCountNumTestsInFile()
    {
        $this->assertEquals(9, $this->testCounter->countNumTestsInFile(__FILE__));
    }

    public function testCountTotalTestsInFiles()
    {
        $this->assertEquals(9, $this->testCounter->countTotalTestsInFiles([__FILE__]));
    }

    public function testCount1()
    {
    }

    public function testCount2()
    {
    }

    public function testCount3()
    {
    }

    /**
     * @test
     */
    public function methodWithoutTestPrefix()
    {
    }

    /**
     * @dataProvider getTestWithDataProviderData
     */
    public function testWithDataProvider()
    {
    }

    public function getTestWithDataProviderData()
    {
        return [
            [],
            [],
            [],
        ];
    }

    public function nonTestPublicMethod()
    {
    }

    protected function nonTestProtectedMethod()
    {
    }

    private function nonTestPrivateMethod()
    {
    }
}