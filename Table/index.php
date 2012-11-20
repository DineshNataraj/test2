<html>
<head>
<style type="text/css">
table {
	margin-left: 100px;
	margin-top: 50px;
	width: 500px;
	height: 500px;
}

table,th,td {
	border: 1px solid black;
}
td
{
text-align:center;
}
td:hover
{
color:yellow;
background-color:red;
}

</style>
</head>
<body>

	<?php

	$i=1;
	$k=1;
	$j=1;

	echo '<table>';

	for(;$i<=10;$i++)
	{


		echo '<tr>';
		$k=$i;
		$j=1;
		for(;$j<=10;$j++)
		{
			echo '<td>'.$k.'</td>';
			$k+=$i;
		}
		echo '</tr>';
	}
	echo '</table>';
	
	?>

</body>
</head>
