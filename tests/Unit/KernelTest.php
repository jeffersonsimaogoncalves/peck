<?php

use Peck\Kernel;

it('handles multiple checkers', function (): void {
    $kernel = Kernel::default();

    $issues = $kernel->handle([
        'directory' => __DIR__.'/../Fixtures',
    ]);

    expect($issues)->toHaveCount(4);
});
