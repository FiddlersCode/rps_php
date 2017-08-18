<?php

class Rock {

}

class Paper {

}

class Scissors {

}

class Game {
  public function evaluates($choiceOne, $choiceTwo) {
    if (get_class($choiceOne) == get_class($choiceTwo)) {
      return 'Draw';
    }
    else {
      return $choiceOne;
    }
  }
}

?>
