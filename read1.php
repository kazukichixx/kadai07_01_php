<?php
$data = file_get_contents("data/data1.txt");

$lines = explode("\n", trim($data));
echo "<table border='1'>";
echo "<tr><th>Time</th><th>Good Point</th><th>Bad Point</th></tr>";
foreach ($lines as $line) {
    if (!empty($line)) {
        $time = substr($line, 0, 19);
        $goodPoint = substr($line, 19, 25); // Extract Good Point from position 20 to 22
        $badPoint = substr($line, 44, 25); // Extract Bad Point from position 23 to 25
        echo "<tr><td>{$time}</td><td>{$goodPoint}</td><td>{$badPoint}</td></tr>";
    }
}
echo "</table>";
