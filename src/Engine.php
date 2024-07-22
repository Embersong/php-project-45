<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function game(string $description, callable $game): void
{
    $name = welcome();

    line($description);

    for ($i = 0; $i < 3; $i++) {
        $response = $game();

        if ($response['result']) {
            line("Correct!");
        } else {
            line("'{$response['answer']}' is wrong answer ;(. Correct answer was '{$response['correct']}'.");
            line("Let's try again, $name!");
            die();
        }
    }

    line("Congratulations, $name!");
}

function answer($question): string
{
    return prompt("Question: $question\nYour answer");
}
