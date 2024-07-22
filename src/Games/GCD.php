<?php

namespace BrainGames\Cli;

use function cli\prompt;

function greatCommonDiv(): void
{
    game('Find the greatest common divisor of given numbers.', function () {
        $first = rand(1, 100);
        $second = rand(1, 100);

        $question = "$first $second";

        while ($first != $second) {
            if ($first > $second) {
                $first = $first - $second;
            } else {
                $second = $second - $first;
            }
        }
        $correct = $second;
        $answer = answer($question);

        return [
            'result' => $answer == $correct,
            'correct' => $correct,
            'answer' => $answer,
        ];
    });
}
