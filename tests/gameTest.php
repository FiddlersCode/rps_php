<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require './src/game.php';

class GameTest extends TestCase {
  public function testReturnsDraw() {
    $game = new Game();
    $rock = new Rock();
    $this->assertEquals($game->evaluates($rock, $rock), "Draw");
  }

  public function testRockBeatsScissors() {
    $game = new Game();
    $rock = new Rock();
    $scissors = new Scissors();
    $this->assertEquals($game->evaluates($rock, $scissors), $rock);
  }
}

?>
