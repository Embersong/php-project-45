<?php

namespace BrainGames\Cli;

use function cli\prompt;

const MIN_EVEN_NUMBER = 1;
const MAX_EVEN_NUMBER = 100;

function isEven(): void
{
    play('Answer "yes" if the number is even, otherwise answer "no".', function () {
        $question = rand(MIN_EVEN_NUMBER, MAX_EVEN_NUMBER);
        $correct = (($question & 1) == 1) ? "no" : "yes";

        $answer = answer((string)$question);

        return [
            'result' => ($answer === 'yes' || $answer === 'no') && $answer === $correct,
            'correct' => $correct,
            'answer' => $answer,
        ];
    });
}
