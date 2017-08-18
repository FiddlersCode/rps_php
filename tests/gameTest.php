<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require './src/game.php';

class GameTest extends TestCase {
  public function testCheckType() {
    $rock = new Rock();
    $this->assertEquals(get_class($rock), "Rock");
  }
}

?>
