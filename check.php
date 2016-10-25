<?php
	session_start();
	
	echo "Your answer ".htmlentities($_POST['answer'])." <br /> ";

    if ($_SESSION['answer'] == $_POST['answer'] )
    {
            echo 'Correct';
    }
    else
    {
        echo 'Wrong. correct is '.$_SESSION['answer'];
    }
?>
