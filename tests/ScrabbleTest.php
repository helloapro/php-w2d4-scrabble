<?php
  require_once "src/Scrabble.php";

  class ScissorsTest extends PHPUnit_Framework_TestCase
  {
    function test_score()
    {
        $test_Scrabble = new Scrabble;
        $input = "I";

        $result = $test_Scrabble->score($input);

        $this->assertEquals(1, $result);
    }

    function test_score_same_value()
    {
        $test_Scrabble = new Scrabble;
        $input = "ran";

        $result = $test_Scrabble->score($input);

        $this->assertEquals(3, $result);
    }

    function test_score_multi_value()
    {
        $test_Scrabble = new Scrabble;
        $input = "champion";

        $result = $test_Scrabble->score($input);

        $this->assertEquals(17, $result);
    }

  }
?>
