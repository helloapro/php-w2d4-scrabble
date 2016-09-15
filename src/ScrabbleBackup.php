<?php
class Scrabble
{
    private $score_1 = array('A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T');
    private $score_2 = array('D', 'G');
    private $score_3 = array('B', 'C', 'M', 'P');
    private $score_4 = array('F', 'H', 'V', 'W', 'Y');
    private $score_5 = array('K');
    private $score_8 = array('J', 'X');
    private $score_10 = array('Q', 'Z');
    function score($input)
    {
        $inputUpper = strtoupper($input);
        $inputArray = str_split($inputUpper);
        $score = 0;
        foreach ($inputArray as $letter) {
            if (in_array($letter, $this->score_1)){
                $score += 1;
            }
            if (in_array($letter, $this->score_2)){
                $score += 2;
            }
            if (in_array($letter, $this->score_3)){
                $score += 3;
            }
            if (in_array($letter, $this->score_4)){
                $score += 4;
            }
            if (in_array($letter, $this->score_5)){
                $score += 5;
            }
            if (in_array($letter, $this->score_8)){
                $score += 8;
            }
            if (in_array($letter, $this->score_10)){
                $score += 10;
            }
        }
        return $score;
    }
}

?>
