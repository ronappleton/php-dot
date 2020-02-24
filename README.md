# Php Dot

Php Dot allows you to add and retreive values from a php array via dot notation.

## Installation

```composer require ronappleton/php-dot "v1.0"```

## Usage

Declare ```use RonAppleton\Dot\Dot;``` at the top of your file.

Then:

```$dot = new Dot;```

```$value = $dot->get($array, 'key.to.your.value', $defaultValue);```

```$success = $dot->set($array, 'key.to.append.value', $value);```

Note: set accesses the array via reference and returns true on success.
