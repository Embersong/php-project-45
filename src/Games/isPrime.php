<?php

namespace BrainGames\Cli;

use function cli\prompt;

function isPrime(): void
{
    game('Answer "yes" if given number is prime. Otherwise answer "no".', function () {
        $question = rand(1, 20);

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
