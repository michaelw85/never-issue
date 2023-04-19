<?php

use function Brain\Monkey\Functions\expect as expectFunction;
use function Brain\Monkey\Functions\when;

test('example', function () {
    // When commenting both methods to mock a function the test runs fine.
    when('update_option')->justReturn('foo');
    expectFunction('get_option')->once()->andReturn('foo');
    
    expect(true)->toBeTrue();
});
