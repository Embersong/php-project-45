<?php

namespace BrainGames\Cli;

const MIN_PROGRESS_NUMBERS = 5;

const MIN_PROGRESS_STEP = 2;
const MAX_PROGRESS_STEP = 5;

const MIN_PROGRESS_START = 0;
const MAX_PROGRESS_START = 3;

const END_PROGRESS_NUMBER_START = 20;

function progression(): void
{
    game('What number is missing in the progression?', function () {

        $start = rand(MIN_PROGRESS_START, MAX_PROGRESS_START);
        $end = rand(END_PROGRESS_NUMBER_START, END_PROGRESS_NUMBER_START + MIN_PROGRESS_NUMBERS * MAX_PROGRESS_STEP);
        $step = rand(MIN_PROGRESS_STEP, MAX_PROGRESS_STEP);

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
