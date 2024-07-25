<?php

namespace BrainGames\Cli;

use function cli\prompt;

const MIN_PRIME_NUMBER = 1;
const MAX_PRIME_NUMBER = 20;

function isPrime(): void
{
    play('Answer "yes" if given number is prime. Otherwise answer "no".', function () {

        $question = rand(MIN_PRIME_NUMBER, MAX_PRIME_NUMBER);

        $correct = primeCheck($question) ? 'yes' : 'no';

        $answer = answer((string)$question);

        return [
            'result' => $answer === $correct,
            'correct' => $correct,
            'answer' => $answer,
        ];
    });
}

function primeCheck(int $number): bool
{
    if ($number == 1) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
