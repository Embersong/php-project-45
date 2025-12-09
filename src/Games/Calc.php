<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\play;

const MIN_CALC_NUMBER = 1;
const MAX_CALC_NUMBER = 100;

function run(): void
{
    play('What is the result of the expression?', function () {
        $operations = ['+', '-', '*'];

        $first = rand(MIN_CALC_NUMBER, MAX_CALC_NUMBER);
        $second = rand(MIN_CALC_NUMBER, MAX_CALC_NUMBER);

        $operation = $operations[array_rand($operations)];

        $question = "$first $operation $second";
        $correct = calculate($first, $second, $operation);

        return [
            'question' => $question,
            'correct' => (string)$correct,
        ];
    });
}

function calculate(int $x, int $y, string $operation): int
{
    return match ($operation) {
        '+' => $x + $y,
        '-' => $x - $y,
        '*' => $x * $y,
        default => throw new \Exception("Unknown operator: {$operation}"),
    };
}
