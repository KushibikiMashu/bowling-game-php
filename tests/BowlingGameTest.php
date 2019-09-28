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
        $this->rollMany(20, 0);
        $actual = $this->bowlingGame->score();
        $this->assertSame(0, $actual);
    }

    /**
     * @test
     */
    public function allOnePin()
    {
        $this->rollMany(20, 1);
        $actual = $this->bowlingGame->score();
        $this->assertSame(20, $actual);
    }

    /**
     * @test
     */
    public function oneSpare()
    {
        $this->rollSpare();
        $this->bowlingGame->roll(3);
        $this->rollMany(17, 0);

        $actual = $this->bowlingGame->score();
        $this->assertSame(16, $actual);
    }

    /**
     * @test
     */
    public function oneStrike()
    {
        $this->rollStrike();
        $this->bowlingGame->roll(3);
        $this->bowlingGame->roll(4);
        $this->rollMany(16, 0);

        $actual = $this->bowlingGame->score();
        $this->assertSame(24, $actual);
    }

    private function rollMany(int $n, int $pins)
    {
        for ($i = 0; $i < $n; $i++) {
            $this->bowlingGame->roll($pins);
        }
    }

    private function rollSpare()
    {
        $this->bowlingGame->roll(5);
        $this->bowlingGame->roll(5);
    }

    private function rollStrike()
    {
        $this->bowlingGame->roll(10);
    }
}
