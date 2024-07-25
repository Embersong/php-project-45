<?php

namespace BrainGames\Cli;

use function cli\prompt;

const MIN_EVEN_NUMBER = 1;
const MAX_EVEN_NUMBER = 100;

function even(): void
{
    play('Answer "yes" if the number is even, otherwise answer "no".', function () {
        $question = rand(MIN_EVEN_NUMBER, MAX_EVEN_NUMBER);

        $correct = isEven($question) ? "yes" : "no";

        return [
            'question' => $question,
            'correct' => $correct,
        ];
    });
}

function isEven(int $number): bool
{
    return !($number & 1);
}
