# retval
[Absol Package](https://github.com/CaptSiro/absol) that adds Result object (inspired by rust)

### Installation

```shell
absol pickup https://github.com/CaptSiro/retval.git
```

### Import

```php
require_once __DIR__ . "/absol/import.php";

import("retval");
import("retval", "exc"); // -> only import Exc classes
```

### Usage

Retval provides functions to create new Result objects.

```php
function return_success(): \retval\Result {
    // some logic
    
    return \retval\success("my value");
}

function return_fail(): \retval\Result {
    // some logic
    
    return \retval\fail(new \retval\Exc\Exc("my exception"));
}
```

These functions are only decorative, which means that they could be replaced with Result construction.

```php
// same with code block above
function return_success(): \retval\Result {
    // some logic
    
    return new \retval\Result(true, "my value", null);
}

function return_fail(): \retval\Result {
    // some logic
    
    return new \retval\Result(false, null, new \retval\Exc\Exc("my exception"));
}
```

Result works like monad.

You... know what that is, right?

Good!

Almost all functions on Result object will in a Result instance.

```php
$success_value = return_success()
    ->succeeded(fn($success_value) => 10)
    ->getSuccess();

// calling succeeded method will inherently call provided function
// it will return new instance of Result where getSuccess() will return 10

$success_value = return_fail()
    ->strip(function (Exc $exc) {
        // will be called if Result failed
    });
```