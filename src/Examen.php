<?php

namespace Deg540\ExamenTests1Abril;

use Exception;

class Examen
{
    // TODO: Examen Kata

    /**
     * @param string $instruction
     *
     * @return string
     */
    public function instructionProcessor(string $instruction): string
    {
        if(strlen($instruction) > 1){
            $book = explode(" ", $instruction)[1];
            return "Success lending " . $book;
        }
        return "" ;
    }
}