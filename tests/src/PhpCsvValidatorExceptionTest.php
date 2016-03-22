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
     */
    public function testExceptionWrap() {
        $e = new PhpCsvValidatorException("Test Exception", "1");
        $this->assertEquals("1", $e->getCode());
    }
}
