<?php
require_once "vendor/autoload.php";

session_start();



$myvisitor = new visitor("nourhan", "1005");
echo "Welcome " . $myvisitor->getVisitorName() . "<br>";

$mycounter = new count();

if (!visitor::isCounted()) {
    $mycounter->increment();
}


$counterFile = 'counter_file';
$counterValue = file_get_contents($counterFile);
$currentCount = intval($counterValue);
$newCount = $mycounter->getCounter() + $currentCount;

file_put_contents($counterFile, $newCount);

echo "Unique visits: " . $newCount;
?>
