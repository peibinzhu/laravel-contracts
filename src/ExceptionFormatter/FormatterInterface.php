<?php

declare(strict_types=1);

namespace PeibinLaravel\Contracts\ExceptionFormatter;

use Throwable;

interface FormatterInterface
{
    public function format(Throwable $throwable): string;
}
