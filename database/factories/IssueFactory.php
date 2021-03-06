<?php

use App\Models\Issue;

$factory->define(Issue::class, function (Faker\Generator $faker) {
    return [
        'repository_id' => function () {
            return factory(Issue::class)->create()->id;
        },
        'number' => $faker->numberBetween(1, 1000),
        'title' => $faker->sentence,
        'url' => $faker->url,

    ];
});
