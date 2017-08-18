<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require './src/game.php';

class GameTest extends TestCase {
  public function testCheckType() {
    $game = new Game();
    $rock = new Rock();
    $this->assertEquals($game->evaluates($rock, $rock), "Draw");
  }
}

?>
