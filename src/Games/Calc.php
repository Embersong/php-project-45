<?php

namespace BrainGames\Cli;

use function cli\prompt;

const MIN_CALC_NUMBER = 1;
const MAX_CALC_NUMBER = 100;

function Calc(): void
{
    game('What is the result of the expression?', function () {
        $first = rand(MIN_CALC_NUMBER, MAX_CALC_NUMBER);
        $second = rand(MIN_CALC_NUMBER, MAX_CALC_NUMBER);
        $question = $correct = '';

        switch (mt_rand(1, 3)) {
            case 1:
                $question = "{$first} + {$second}";
                $correct = $first + $second;
                break;
            case 2:
                $question = "{$first} - {$second}";
                $correct = $first - $second;
                break;
            case 3:
                $question = "{$first} * {$second}";
                $correct = $first * $second;
                break;
        }
        $answer = answer($question);

        return [
            'result' => $answer == $correct,
            'correct' => $correct,
            'answer' => $answer,
        ];
    });
}
