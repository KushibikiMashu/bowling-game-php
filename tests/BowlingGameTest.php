<?php

use PHPUnit\Framework\TestCase;
use App\BowlingGame;

// 全部ガーター
// 全部１点
// 一回スペア
// 一回ストライク
// 全部ストライク

Class BowlingGameTest extends TestCase
{
    private $bowlingGame;

    public function setUp()
    {
        $this->bowlingGame = new BowlingGame;
    }

    /**
     * @test
     */
    public function allGutter()
    {
        $this->makeRoll(0, 20);
        $actual = $this->bowlingGame->score();
        $this->assertSame(0, $actual);
    }

    /**
     * @test
     */
    public function allOnePin()
    {
        $this->makeRoll(1, 20);
        $actual = $this->bowlingGame->score();
        $this->assertSame(20, $actual);
    }

    private function makeRoll(int $pins, int $times)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->bowlingGame->roll($pins);
        }
    }
}
