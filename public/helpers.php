<?php

const VITE_HOST = 'http://localhost:5133';

function jsTag(string $entry): string
{
    $url = VITE_HOST . '/' . $entry;

    if (!$url) {
        return '';
    }
    return '<script type="module" crossorigin src="'
        . $url
        . '"></script>';
}