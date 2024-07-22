<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function isEven()
{
    $name = welcome();

    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);

        $answer = prompt("Question: $number\nYour answer");

        $correct = ($number & 1) ? "no" : "yes";

        if (($answer === 'yes' || $answer === 'no') && $answer === $correct) {
            line("Correct!");
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correct'. \nLet's try again, $name!");
            die();
        }
    }

    line("Congratulations, $name!");
}
