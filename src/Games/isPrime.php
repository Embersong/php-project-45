<?php

namespace BrainGames\Cli;

use function cli\prompt;

const MIN_PRIME_NUMBER = 1;
const MAX_PRIME_NUMBER = 20;

function isPrime(): void
{
    play('Answer "yes" if given number is prime. Otherwise answer "no".', function () {
        $question = rand(MIN_PRIME_NUMBER, MAX_PRIME_NUMBER);

        $correct = primeCheck($question);

        $answer = answer((string)$question);

        return [
            'result' => $answer === $correct,
            'correct' => $correct,
            'answer' => $answer,
        ];
    });
}

function primeCheck(int $number): string
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}
