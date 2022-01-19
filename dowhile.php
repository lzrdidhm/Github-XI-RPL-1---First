<?php
echo "<h2>Perulangan While</h2>";
$x = 1;
while($x <= 5) {
    echo "Nomor: $x <br>";
    $x++;
}
echo "<br>";
$i=50;
while ($i >= 0)
{
   echo "$i";
   echo "<br />";
   $i-=10;
}
echo "<br>";
$i = 5;
while($i > 0)
{
	echo $i;
	echo "<br/>";
	$i--;
}
echo "<h2>Perulangan Do While</h2>";
$i=1;
do
{
  echo "$i";
  echo "<br />";
  $i++;
} while ($i <= 5);
echo "<br>";
$i=5;
do
{
  echo "$i";
  echo "<br />";
  $i--;
} while ($i >= 1);
echo "<br>";
$i=1;
do
{
  echo "Nomor $i";
  echo "<br />";
  $i=$i+1;
} while ($i <= 5);
?>