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
    public function 全部ガーター()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->bowlingGame->roll(0);
        }
        $actual = $this->bowlingGame->score();
        $this->assertSame(0, $actual);
    }

    /**
     * @test
     */
    public function 全部一本倒す()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->bowlingGame->roll(1);
        }
        $actual = $this->bowlingGame->score();
        $this->assertSame(20, $actual);
    }
}
