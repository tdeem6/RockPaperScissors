<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_rockPaperScissorsGame_rock_rock()
        {

            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "rock";
            $input2 = "rock";

            $result = $test_RockPaperScissors->rockPaperScissorsGame ($input1, $input2);

            $this->assertEquals("Draw", $result);
        }

         function test_rockPaperScissorsGame_scissors_scissors()
         {

             $test_RockPaperScissors = new RockPaperScissors;
             $input1 = "scissors";
             $input2 = "scissors";

             $result = $test_RockPaperScissors->rockPaperScissorsGame ($input1, $input2);

             $this->assertEquals("Draw", $result);
         }

         function test_rockPaperScissorsGame_paper_paper()
         {

             $test_RockPaperScissors = new RockPaperScissors;
             $input1 = "paper";
             $input2 = "paper";

             $result = $test_RockPaperScissors->rockPaperScissorsGame ($input1, $input2);

             $this->assertEquals("Draw", $result);
         }

          function test_rockPaperScissorsGame_rock_scissors1()
          {

              $test_RockPaperScissors = new RockPaperScissors;
              $input1 = "rock";
              $input2 = "scissors";

              $result = $test_RockPaperScissors->rockPaperScissorsGame ($input1, $input2);

              $this->assertEquals("Player 1", $result);
           }

           function test_rockPaperScissorsGame_paper_rock1()
           {

               $test_RockPaperScissors = new RockPaperScissors;
               $input1 = "rock";
               $input2 = "paper";

               $result = $test_RockPaperScissors->rockPaperScissorsGame ($input1, $input2);

               $this->assertEquals("Player 2", $result);
           }

            function test_rockPaperScissorsGame_scissors_paper1()
            {

                $test_RockPaperScissors = new RockPaperScissors;
                $input1 = "scissors";
                $input2 = "paper";

                $result = $test_RockPaperScissors->rockPaperScissorsGame ($input1, $input2);

                $this->assertEquals("Player 1", $result);
             }

             function test_rockPaperScissorsGame_rock_scissors2()
             {

                 $test_RockPaperScissors = new RockPaperScissors;
                 $input1 = "scissors";
                 $input2 = "rock";

                 $result = $test_RockPaperScissors->rockPaperScissorsGame ($input1, $input2);

                 $this->assertEquals("Player 2", $result);
             }

              function test_rockPaperScissorsGame_paper_rock2()
              {

                  $test_RockPaperScissors = new RockPaperScissors;
                  $input1 = "paper";
                  $input2 = "rock";

                  $result = $test_RockPaperScissors->rockPaperScissorsGame ($input1, $input2);

                  $this->assertEquals("Player 1", $result);
               }

               function test_rockPaperScissorsGame_scissors_paper2()
               {

                   $test_RockPaperScissors = new RockPaperScissors;
                   $input1 = "paper";
                   $input2 = "scissors";

                   $result = $test_RockPaperScissors->rockPaperScissorsGame ($input1, $input2);

                   $this->assertEquals("Player 2", $result);
                }

                function test_rockPaperScissorsGame_invalidEntry()
                {

                    $test_RockPaperScissors = new RockPaperScissors;
                    $input1 = "ldksjfalk";
                    $input2 = "sa;ldkfjlk";

                    $result = $test_RockPaperScissors->rockPaperScissorsGame ($input1, $input2);

                    $this->assertEquals("INVALID ENTRY", $result);
                 }


    }
?>
