```php
function calculate_average($numbers) {
  $sum = 0;
  $count = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
      $count++;
    } else {
      // Handle non-numeric values appropriately.  Here, we'll ignore them.
      // Alternative actions: throw an exception, return an error code, etc.
    }
  }
  if ($count === 0) {
    return 0; // Handle empty or non-numeric arrays
  }
  return $sum / $count;
}

$numbers = [10, 20, 30, 0, 50];
echo calculate_average($numbers); // Output: 22

$numbers = [];
echo calculate_average($numbers); //Output: 0

$numbers = [10, 20, 30, 'a', 50];
echo calculate_average($numbers); // Output: 27.5 (Non-numeric ignored)
```