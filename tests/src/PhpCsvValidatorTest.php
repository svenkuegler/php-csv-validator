<?php

/**
 * PHPUnit Test for Class PhpCsvValidator
 *
 * @author Sven Kuegler <sven.kuegler@gmail.com>
 */
class PhpCsvValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PhpCsvValidator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new PhpCsvValidator();
    }

    /**
     * @covers PhpCsvValidator::isValidRow
     */
    public function testIsValidRow()
    {
        $this->assertEquals(1, 1);
    }

    /**
     * @covers PhpCsvValidator::isValidFile
     */
    public function testIsValidFile()
    {
        $this->assertEquals(1, 1);
    }

    /**
     * @covers PhpCsvValidator::loadSchemaFromFile
     */
    public function testLoadSchemaFromFile()
    {
        $this->assertEquals(1, 1);
    }

    /**
     * @covers PhpCsvValidator::getSchema
     */
    public function testGetSchema()
    {
        $this->assertEquals(1, 1);
    }

    /**
     * @covers PhpCsvValidator::setSchema
     */
    public function testSetSchema()
    {
        $this->assertEquals(1, 1);
    }

    /**
     * @covers PhpCsvValidator::getErrorMessages
     */
    public function testGetErrorMessages()
    {
        $this->assertEquals(1, 1);
    }

    /**
     * @covers PhpCsvValidator::setErrorMessages
     */
    public function testSetErrorMessages()
    {
        $this->assertEquals(1, 1);
    }
}
