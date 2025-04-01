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
        $library = [];
        $libraryCopies = [1];

        if(strlen($instruction) > 1){
            if(explode(" ", $instruction)[0] == "lend") return $this->lendBooks($instruction,$library,$libraryCopies);
        }
        return "" ;
    }

    /**
     * @param string $instruction
     * @param array $library
     * @param array $libraryCopies
     * @return string
     */
    public function lendBooks(string $instruction, array $library, array $libraryCopies): string
    {
        $arguments = explode(" ", $instruction);
        $numArguments = count($arguments);
        $book = explode(" ", $instruction)[1];
        if($numArguments == 2){
            if(in_array($book, $library)){
                foreach ($library as $bookInLibrary) {
                    if ($bookInLibrary == $book) {}
                }
            }else{
                array_push($library, $book);
                array_push($libraryCopies, 1);
            }
            return "Success lending " . $book;
        }else{
            $bookCopies = explode(" ", $instruction)[2];
            return "Success lending " . $book . " " . $bookCopies;
        }
    }
}