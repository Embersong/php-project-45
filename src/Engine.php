<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

const NUMBER_GAMES = 3;

function play(string $description, callable $game): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($description);

    for ($i = 0; $i < NUMBER_GAMES; $i++) {
        $response = $game();

        $answer = prompt("Question: {$response['question']}\nYour answer");

        if ($answer === $response['correct']) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$response['correct']}'.");
            line("Let's try again, $name!");
            return;
        }
    }

    line("Congratulations, $name!");
}
