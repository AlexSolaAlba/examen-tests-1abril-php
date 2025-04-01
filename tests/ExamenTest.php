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
    public function givenStringReturnsEmptyString() : void
    {
        $returnValue = $this->examen->returnBorrowedBooks("ale");
        $this->assertEquals("",$returnValue);
    }


}