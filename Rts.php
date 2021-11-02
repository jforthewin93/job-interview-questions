<?php

class Rts
{
    /**
     * Returns a map with the number of occurences a number is
     * above or below the comparison value.
     * 
     * @param array integer $numbers
     * @param integer $comparable
     * 
     * @return associative array
     *
     */
    function aboveBelow($numbers, $comparable)
    {
        //The return "php" hashmap.
        $hashMap = [
            "below" => 0,
            "above" => 0,
        ];
        foreach ($numbers as $number) {
            if ($number >= $comparable) {
                if ($number == $comparable) {
                    continue;
                }
                ++$hashMap["above"];
            } else {
                ++$hashMap["below"];
            }
        }
        return $hashMap;
    }

    /**
     * Returns a new string, rotating the characters in the original string to the right
     * by the rotation amount.
     * 
     * @param string $original
     * @param integer $rotationAmount
     * 
     * @return string $answer
     */
    function stringRightRotation($original, $rotationAmount)
    {
        return substr($original, -$rotationAmount, $rotationAmount) . substr($original, 0, strlen($original) - $rotationAmount);
    }
}

$rtsQuestion = new Rts();

$numbers = [1, 2, 3, 4, 5, 6];
$comparable = 3;

$original = "myString";
$rotationAmount = 2;

//question #1
var_dump($rtsQuestion->aboveBelow($numbers, $comparable));
//question #2
var_dump($rtsQuestion->stringRightRotation($original, $rotationAmount));
