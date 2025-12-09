<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\play;

const MIN_PRIME_NUMBER = 1;
const MAX_PRIME_NUMBER = 20;

function run(): void
{
    play('Answer "yes" if given number is prime. Otherwise answer "no".', function () {

        $question = rand(MIN_PRIME_NUMBER, MAX_PRIME_NUMBER);

        $correct = isPrime($question) ? 'yes' : 'no';

        return [
            'question' => $question,
            'correct' => $correct,
        ];
    });
}

function isPrime(int $number): bool
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
