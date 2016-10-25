<?php
	session_start();

	$digit1 = mt_rand(1,20);
    $digit2 = mt_rand(1,20);
    $operator = mt_rand(0,2);
    switch ($operator) {
    	case 0:
    		$math = "$digit1 - $digit2";
        	$_SESSION['answer'] = $digit1 - $digit2;
    		break;

    	case 1:
    		$math = "$digit1 x $digit2";
        	$_SESSION['answer'] = $digit1 * $digit2;
    		break;
    	
    	default:
    		$math = "$digit1 + $digit2";
        	$_SESSION['answer'] = $digit1 + $digit2;
    		break;
    }
?>

<h1>Captcha Math</h1>
<form method="POST" action="check.php">
    What's <?php echo $math; ?> = <input name="answer" type="text" /><br />
    <input type="submit" />
</form>
