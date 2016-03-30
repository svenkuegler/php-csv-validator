<?php

/**
 * PHPUnit Test for Class PhpCsvValidatorException
 *
 * @author Sven Kuegler <sven.kuegler@gmail.com>
 */
class PhpCsvValidatorExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test Code
     * @covers PhpCsvValidatorException
     * @covers PhpCsvValidatorException::getCode
     * @covers PhpCsvValidatorException::getExceptionMessage
     */
    public function testExceptionWrap() {
        $e = new PhpCsvValidatorException("Test Exception", "1");
        $this->assertEquals("1", $e->getCode());
        $this->assertEquals("PhpCsvValidatorException: [1]: Test Exception\n", $e->getExceptionMessage());
    }

    /**
     * @covers PhpCsvValidatorException
     * @expectedException PhpCsvValidatorException
     */
    public function testException() {
        throw new PhpCsvValidatorException("TestException", "1");
    }
}
