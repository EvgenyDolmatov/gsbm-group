<?php

function timeToSeconds($time): int
{
    $time_limit = 0;
    $time_arr = explode(':', $time);
    foreach ($time_arr as $key => $time_item) {
        if ($key == 0) {
            $time_limit += intval($time_item) * 60 * 60;
        }
        if ($key == 1) {
            $time_limit += intval($time_item) * 60;
        }
        if ($key == 2) {
            $time_limit += intval($time_item);
        }
    }
    return $time_limit;
}

function secondsToTime($seconds) : string
{
    $hours = $seconds / 3600 >= 1 ? floor($seconds / 3600) : 0;
    $minutes = $seconds % 3600 / 60 >= 1 ? floor($seconds % 3600 / 60) : 0;
    $seconds = $seconds % 3600 % 60;

    if ($hours < 10) $hours = "0" . $hours;
    if ($minutes < 10) $minutes = "0" . $minutes;
    if ($seconds < 10) $seconds = "0" . $seconds;

    return $hours . ':' . $minutes . ':' . $seconds;
}
