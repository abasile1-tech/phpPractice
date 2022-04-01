<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?> 

<h1>
	<?php 
    $name = "John";
    $nameList = ["Steve","Javier","Rico","Robby"];
    $count = 0;
    echo "My name is " . $name  . " and my friends names are ";
    foreach ($nameList as $item) {
    	$count++;
    	echo $item;
        if ($count != count($nameList)){
        	echo ", ";
        } else {
        	echo ".";
        }
        if ($count == count($nameList)-1){
        	echo "and ";
        }
     };
	?>
</h1>

    <p>
    <?php
    for ($i = 1; $i <= 100; $i++)
    {
	if ($i % 3 == 0 && $i % 5 == 0)
	{
        echo nl2br($i . " - FizzBuzz\n");
	}
	elseif ($i % 3 == 0)
	{
		echo nl2br($i . " - Fizz\n");
	}
	elseif ($i % 5 == 0)
	{
		echo nl2br($i . " - Buzz\n");
	}
	else echo nl2br($i . "\n");
    }
    ?>
    </p>

</body>
</html>