<?php

const NAMES = [
    'Vlad', 'Nadya', 'Vanya', 'Masha', 'Misha'
];

function createUser()
{
    return [
      'name' => NAMES[array_rand(NAMES)],
      'age' => mt_rand(18, 45)
    ];
};