```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a']; // Note the '4a' element
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Unexpected result due to type juggling
```