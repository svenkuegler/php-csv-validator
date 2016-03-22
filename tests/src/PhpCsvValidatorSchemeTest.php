<?php

/**
 * PHPUnit Test for Class PhpCsvValidatorScheme
 *
 * @author Sven Kuegler <sven.kuegler@gmail.com>
 */
class PhpCsvValidatorSchemeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    private $json = "{\"label\":\"Test\", \"skipFirstLine\": 0, \"regex\": \"/(.*)/\"}";

    /**
     * @covers PhpCsvValidatorScheme::__construct
     * @covers PhpCsvValidatorScheme::set
     */
    public function testSchemeOnConstruct() {
        $s = new PhpCsvValidatorScheme($this->json);

        $this->assertEquals("Test", $s->label);
        $this->assertEquals("/(.*)/", $s->regex);
    }

    /**
     * @covers PhpCsvValidatorScheme::__construct
     * @covers PhpCsvValidatorScheme::set
     */
    public function testSchemeWithSetMethod() {
        $s = new PhpCsvValidatorScheme();
        $obj = json_decode($this->json);
        $s->set($obj);

        $this->assertEquals("Test", $s->label);
        $this->assertEquals("/(.*)/", $s->regex);
    }
}
