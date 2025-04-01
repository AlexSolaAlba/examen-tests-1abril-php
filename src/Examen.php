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
            if(explode(" ", $instruction)[0] == "lend") return $this->lendBooks($instruction);
        }
        return "" ;
    }

    /**
     * @param string $instruction
     *
     * @return string
     */
    public function lendBooks(string $instruction): string
    {
        $arguments = explode(" ", $instruction);
        $numArguments = count($arguments);
        $book = explode(" ", $instruction)[1];
        if($numArguments == 2){
            return "Success lending " . $book;
        }else{
            $bookCopies = explode(" ", $instruction)[2];
            return "Success lending " . $book . " " . $bookCopies;
        }
    }
}