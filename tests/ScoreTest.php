<?php
use PHPUnit\Framework\TestCase;
require('./src/Score.php');

class ScoreTest extends TestCase
{
    public function testCalculate()
    {
        $score = new Score();    

        $this->score->lose = 'Lost';
        $this->score->tie = 'Tie';
        $this->score->win = 'Win';

        $this->assertEquals('Lost', $user->getScore());
    }
}


    /* const POINTS = [
        1 => 3,
        2 => 1,
        3 => 0
    ];

        foreach (self::POINTS as $key => $value) {
            //$this->assertEquals($value, $key);
            $this->assertEquals('Hello', 'Hello');
        }
      */


