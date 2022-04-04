<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?> 

<form action="index.php" method="post">
	Enter your name: <input name="name" type="text">
	Enter the name of friend 1: <input name="nameOne" type="text">
	Enter the name of friend 2: <input name="nameTwo" type="text">
	<input type="submit">
</form>

<h1>
	<?php 
    $name = "Unset Name";
		try{
			if (isset($_POST["name"])){
				$name = $_POST["name"];
			}
		} catch(Exception $err){
			echo $err;
		}

		$nameOne = "unset";
		try{
			if (isset($_POST["nameOne"])){
				$nameOne = $_POST["nameOne"];
			}
		} catch(Exception $err){
			echo $err;
		}

		$nameTwo = "unset";
		try{
			if (isset($_POST["nameTwo"])){
				$nameTwo = $_POST["nameTwo"];
			}
		} catch(Exception $err){
			echo $err;
		}

		$nameList = [$nameOne,$nameTwo];
	
    $count = 0;
    echo "My name is " . $name;
		if (!isset($nameList)){
			echo ".";
		}
		else{
			echo " and my friends names are ";
		}
		if (isset($nameList)){
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
		}
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