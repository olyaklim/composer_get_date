<?php

namespace MyNamespace;

use Error;

class ComposerGetDate extends PHPUnit_Framework_TestCase
{
  public function setUp()
    {
        parent::setUp();
    }
    public function tearDown()
    {
        parent::tearDown();
    }
    
    public function loadFromUrl()
    {       
        $this->assertTrue(1 == 1);       
    }

    public function testLoadFromFile()
    {       
        $this->assertTrue(1 == 1);       
    }
}
