<?php

namespace BrainGames\Cli;

use function cli\prompt;

function Calc(): void
{
    game('What is the result of the expression?', function () {
        $first = rand(1, 100);
        $second = rand(1, 100);

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
                $first = rand(1, 9);
                $second =  rand(1, 9);
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
