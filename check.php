<?php

echo "Module 1 :<br>";
for ($i=1;$i<=2;$i++)
{
	if($_POST["1u$i"] == "on")
	{
		echo "unit $i is set ";
	}
}
echo "<br>Module 2 : <br>";
for ($i=1;$i<=4;$i++)
{
	if($_POST["2u$i"] == "on")
	{
		echo "unit $i is set ";
	}
}
echo "<br>Module 3 : <br>";
for ($i=1;$i<=3;$i++)
{
	if($_POST["3u$i"] == "on")
	{
		echo "unit $i is set ";
	}
}


?>