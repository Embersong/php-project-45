<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\play;

const MIN_GCD_NUMBER = 1;
const MAX_GCD_NUMBER = 100;

function run(): void
{
    play('Find the greatest common divisor of given numbers.', function () {
        $first = rand(MIN_GCD_NUMBER, MAX_GCD_NUMBER);
        $second = rand(MIN_GCD_NUMBER, MAX_GCD_NUMBER);

        $question = "$first $second";

        $correct = getGcd($first, $second);

        return [
            'question' => $question,
            'correct' => (string)$correct,
        ];
    });
}

function getGcd(int $first, int $second): int
{
    while ($first !== $second) {
        if ($first > $second) {
            $first = $first - $second;
        } else {
            $second = $second - $first;
        }
    }
    return $second;
}
