```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $value) {
    if (is_string($value)) {
      $newData[] = strtoupper($value);
    } else {
      $newData[] = $value; //Handle non-string values
    }
  }
  return $newData;
}

$myData = ['apple', 'banana', 123];
$processedData = processData($myData);
print_r($processedData); // Output: Array ( [0] => APPLE [1] => BANANA [2] => 123 )
```