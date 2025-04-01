<?php

namespace Deg540\ExamenTests1Abril\Test;

use Exception;
use PHPUnit\Framework\TestCase;
use Deg540\ExamenTests1Abril\Examen;

class ExamenTest extends TestCase
{
    // TODO: Examen Kata Tests

    private Examen $examen;

    protected function setUp() : void
    {
        parent::setUp();
        $this->examen = new Examen();
    }

    /**
     * @test
     */
    public function givenEmptyStringReturnsEmptyString() : void
    {
        $returnValue = $this->examen->instructionProcessor("");
        $this->assertEquals("",$returnValue);
    }

    /**
     * @test
     */
    public function givenLendWithBookNameAndNoNumberReturnsSuccess() : void
    {
        $returnValue = $this->examen->instructionProcessor("lend dune");
        $this->assertEquals("Success lending dune",$returnValue);
    }

}