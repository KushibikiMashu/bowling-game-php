<?php

namespace App;

Class BowlingGame
{
    private $rolls       = [];
    private $currentRoll = 0;

    public function roll(int $pins)
    {
        $this->rolls[$this->currentRoll++] = $pins;
    }

    public function score(): int
    {
        $score = 0;
        for ($i = 0; $i < count($this->rolls); $i++) {
            if ($this->rolls[$i] + $this->rolls[$i + 1] === 10) {
                $score += $this->rolls[$i] + $this->rolls[$i + 2];
            } else {
                $score += $this->rolls[$i];
            }
        }
        return $score;
    }
}
