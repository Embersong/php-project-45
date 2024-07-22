<?php

namespace BrainGames\Cli;

use function cli\prompt;

function isEven(): void
{
    game('Answer "yes" if the number is even, otherwise answer "no".', function () {
        $question = rand(1, 100);

        $answer = prompt("Question: $question\nYour answer");

        $correct = ($question & 1) ? "no" : "yes";

        return [
            'result' => ($answer === 'yes' || $answer === 'no') && $answer === $correct,
            'correct' => $correct,
            'answer' => $answer,
        ];
    });
}
