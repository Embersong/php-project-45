<?php

namespace BrainGames\Cli;

use function cli\prompt;

function progression(): void
{
    game('What number is missing in the progression?', function () {

        $start = rand(0, 3);
        $end = rand(20, 50);
        $step = rand(2, 5);
        $progression = range($start, $end, $step);
        $randKey = array_rand($progression);

        $correct = $progression[$randKey];
        $progression[$randKey] = '..';

        $question = implode(' ', $progression);

        $answer = answer($question);

        return [
            'result' => $answer == $correct,
            'correct' => $correct,
            'answer' => $answer,
        ];
    });
}
