<?php

declare(strict_types=1);

namespace PeibinLaravel\Contracts;

interface ListenerInterface
{
    public function handle(object $event): void;
}
