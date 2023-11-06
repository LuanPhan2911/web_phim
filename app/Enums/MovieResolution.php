<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class MovieResolution extends Enum
{
    const HD = 0;
    const HDCAM = 1;
    const FULLHD = 2;
    const FULLCAM = 3;
    const SD = 4;
}
