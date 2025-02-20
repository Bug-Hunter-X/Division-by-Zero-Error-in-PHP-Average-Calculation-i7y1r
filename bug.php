```php
function calculate_average($numbers) {
  $sum = 0;
  $count = 0;
  foreach ($numbers as $number) {
    $sum += $number;
    $count++;
  }
  if ($count === 0) {
    return 0; // Handle empty array
  }
  return $sum / $count;
}

$numbers = [10, 20, 30, 0, 50];
echo calculate_average($numbers); // Output: 22

$numbers = [];
echo calculate_average($numbers); //Output: 0

$numbers = [10, 20, 30, 'a', 50];
echo calculate_average($numbers); //Warning: Division by zero
```