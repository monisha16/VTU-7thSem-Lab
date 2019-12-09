<?php
    	$command = escapeshellcmd("python C:\Users\hp-pc\Desktop\webdev\htdocs\lab\match1.py");
    	$states = shell_exec($command);
			$statesArray = [];
			$states1 = explode(' ',$states);
			foreach($states1 as $state)
			{
				if(preg_match( '/xas$/', $state))
					$statesArray[0] = $state;
				else if(preg_match( '/^K.*s$/', $state))
					$statesArray[1] = $state;
				else if(preg_match( '/^M.*s$/', $state))
					$statesArray[2] = $state;
				else if(preg_match( '/a$/', $state))
					$statesArray[3] = $state;
			}
			ksort($statesArray);
			foreach( $statesArray as $element => $value )
			{
				print( $value." is the element ". $element."<br/>");
	}
?>
