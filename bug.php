```php
function processData(array $data): array {
  foreach ($data as &$value) {
    if (is_string($value)) {
      $value = strtoupper($value);
    }
  }
  return $data;
}

$myData = ['apple', 'banana', 123];
$processedData = processData($myData);
print_r($processedData); // Output: Notice: Only variables should be passed by reference
```