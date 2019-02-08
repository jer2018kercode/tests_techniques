<?php
use Symfony\Component\Yaml\Yaml;

class Score 
{
    public $lose;
    public $tie;
    public $win;

    public function __construct() {
        $this->lose = $lose;
        $this->tie = $tie;
        $this->win = $win;
    }

    public function getScore()
    {
        return '$this->lose $this->tie $this->win';
    }
}