<?php
	session_start();
	session_destroy();
    echo "<Script type = 'text/javascript'>document.location = '../index.php'</script>";