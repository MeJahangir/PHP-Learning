<?php

echo pi();
// Output : 3.1415926535898
echo '<br>';
$maximumNumber = [12.10,20,40,44,60,100,103];
echo max($maximumNumber);
echo '<br>';
// Output : 103
$maximumNumber = [12,10,20,40,44,60,100,103];
echo min($maximumNumber);
echo '<br>';

$name = "jahangir alam joy";
echo ucfirst($name);
echo '<br>';
echo ucwords($name);
echo '<br>';
echo lcfirst($name);
echo '<br>';
echo strtolower($name);
echo "<br>";

$post_title = "OUR PHP CLASS NO 8";
$post_slug = strtolower($post_title);
$post_slug = str_replace(' ', '-', $post_slug);
echo $post_slug;
echo "<br>";
















?>