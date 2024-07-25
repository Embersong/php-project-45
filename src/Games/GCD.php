<?php

namespace BrainGames\Cli;

use function cli\prompt;

const MIN_GCD_NUMBER = 1;
const MAX_GCD_NUMBER = 100;

function greatCommonDiv(): void
{
    play('Find the greatest common divisor of given numbers.', function () {
        $first = rand(MIN_GCD_NUMBER, MAX_GCD_NUMBER);
        $second = rand(MIN_GCD_NUMBER, MAX_GCD_NUMBER);

        $question = "$first $second";

        $correct = gcd($first, $second);

        $answer = answer($question);

        return [
            'result' => $answer == $correct,
            'correct' => $correct,
            'answer' => $answer,
        ];
    });
}

function gcd(int $first, int $second): int
{
    while ($first != $second) {
        if ($first > $second) {
            $first = $first - $second;
        } else {
            $second = $second - $first;
        }
    }
    return $second;
}
