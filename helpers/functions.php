<?php

function split_time($time_num) {
    return [floor($time_num / 100), $time_num % 100];
}

function time_diff($start, $end) {
    list($sh, $sm) = split_time($start);
    list($eh, $em) = split_time($end);
    $m = ($eh * 60 + $em) - ($sh * 60 + $sm);
    return floor($m / 60) * 100 + $m % 60;
}

function time_least_str($time) {
    list($h, $m) = split_time($time);
    if ($h != 0 && $m < 10) {
        return sprintf("%d時間", $h);
    }
    if ($h != 0) {
        return sprintf("%d時間%d分", $h, floor($m / 10) * 10);
    }
    return sprintf("%d分", $m);

}
