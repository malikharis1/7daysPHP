<?PHP

$number = 1;
echo "while loop";

while ($number <= 10) {
    echo "$number" . "</br>";
    $number++;
}
echo "for loop" . "</br>";
for (; $number <= 20; $number++) {
    echo "$number" . "</br>";
}
echo "do while loop" . "</br>";

do {
    echo "value of number is 21 and conditon is number is less than 20 still this prints ";
    $number++;
}
while ($number < 20);

echo "</br>";
echo "Foreach loop" . "</br>";

$arr = ["haris", "faizan", "basit"];

// echo var_dump($arr);
foreach ($arr as $value) {
    echo "$value </br>";
}
?>