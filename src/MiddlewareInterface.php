<?php

declare(strict_types=1);

namespace PeibinLaravel\Contracts;

use Closure;
use Illuminate\Http\Request;

interface MiddlewareInterface
{
    public function handle(Request $request, Closure $next): void;
}
