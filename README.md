# Error

`vendor/bin/pest handling the test event returned with error code 255`

## How to reproduce

1. composer install
2. composer run test

## When does the problem not occur

- When enabling the test in ["ATest.php"](./tests/Unit/ATest.php) the problem does not occur
- When removing the `when` and `expect` function calls from Brain/Monkey in ["ExampleTest.php"](./tests/Unit/ExampleTest.php)
- After patching all `never` return types to `void` in Pest and PHPUnit

## Stack trace

[log file](./stack-trace.txt)
