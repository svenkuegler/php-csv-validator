<?php

/**
 * PHPUnit Test for Class PhpCsvValidatorScheme
 *
 * @author Sven Kuegler <sven.kuegler@gmail.com>
 */
class PhpCsvValidatorSchemeTest extends PHPUnit_Framework_TestCase
{
    private $json = "{\"label\":\"Test\", \"regex\": \"/(.*)/\"}";

    /**
     * @covers PhpCsvValidatorScheme::__construct
     */
    public function testSchemeOnConstruct() {
        $s = new PhpCsvValidatorScheme($this->json);

        $this->assertEquals("Test", $s->label);
        $this->assertEquals("/(.*)/", $s->regex);
    }

    /**
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
