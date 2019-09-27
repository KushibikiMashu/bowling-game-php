<?php

namespace App;

Class BowlingGame
{
    private $score = 0;

    public function roll(int $pins)
    {
        $this->score += $pins;
    }

    public function score()
    {
        return $this->score;
    }
}
