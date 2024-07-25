<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

const NUMBER_GAMES = 3;

function play(string $description, callable $game): void
{
    printWelcome();
    $name = getName();
    printHelloName($name);

    line($description);

    for ($i = 0; $i < NUMBER_GAMES; $i++) {
        $response = $game();

        $answer = getAnswer($response['question']);

        if ($answer == $response['correct']) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$response['correct']}'.");
            line("Let's try again, $name!");
            die();
        }
    }

    line("Congratulations, $name!");
}

function getAnswer(string $question): string
{
    return prompt("Question: $question\nYour answer");
}
