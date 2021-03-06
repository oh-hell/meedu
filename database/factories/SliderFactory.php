<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) 杭州白书科技有限公司
 */

use Faker\Generator as Faker;

$factory->define(\App\Services\Other\Models\Slider::class, function (Faker $faker) {
    return [
        'sort' => $faker->randomDigit,
        'url' => $faker->url,
        'thumb' => $faker->imageUrl(),
        'platform' => $faker->randomElement([
            \App\Constant\FrontendConstant::SLIDER_PLATFORM_MINI,
            \App\Constant\FrontendConstant::SLIDER_PLATFORM_APP,
            \App\Constant\FrontendConstant::SLIDER_PLATFORM_H5,
            \App\Constant\FrontendConstant::SLIDER_PLATFORM_PC
        ]),
    ];
});
