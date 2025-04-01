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
            $arguments = explode(" ", $instruction);
            $numArguments = count($arguments);
            if($numArguments == 2){
                $book = explode(" ", $instruction)[1];
                return "Success lending " . $book;
            }else{
                $book = explode(" ", $instruction)[1];
                $bookCopies = explode(" ", $instruction)[2];
                return "Success lending " . $book . " " . $bookCopies;
            }

        }
        return "" ;
    }
}