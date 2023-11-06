<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class MovieTopView extends Enum
{
    const none = 0;
    const day = 1;
    const week = 2;
    const month = 3;
}
