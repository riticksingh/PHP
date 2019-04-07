
<?php
$subject="the quick brown fox jumps over the lazy dog.";
echo "<br> At starting :<br>$subject";
//echo str_replace("the", "That", $subject);

$pos = strpos($subject, "the");
if ($pos !== false) {
    $newstring = substr_replace($subject, "That", $pos, strlen("the"));
}
echo "<br>After changing :<br>"."$newstring";
?>
