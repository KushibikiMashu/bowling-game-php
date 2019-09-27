<?php

use PHPUnit\Framework\TestCase;
use App\BowlingGame;

Class BowlingGameTest extends TestCase
{
    /**
     * @test
     */
    public function 投げる()
    {
        $bowlingGame = new BowlingGame;
        $bowlingGame->roll();
    }
}
