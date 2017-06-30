<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="sheet.css" />

</head>

<body>
	<table>
		<tr class="nav-bar-item">
			<td>
				<a href="index.html" class="nav-bar-item">Home</a>

				<a href="camera.html" class="nav-bar-item">Camera</a>
			</td>
		</tr>
		<tr>		
		</tr>
		<tr>		
		</tr>		
		<tr class="nav-bar-item">
			<td>
				<a href="leaderboard.html" class="nav-bar-item">Leader Board</a>

				<a href="voting.php" class="nav-bar-item">Voting</a>
			</td>		
		</tr>
	</table>
</body>

</html>


<?php
    $directory = '../snapattack';

    if (! is_dir($directory)) {
        exit('Invalid diretory path');
    }

    //$files = array();

    foreach (scandir($directory) as $file) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;

        //$files[] = $file;
		$var = var_export($file, true);
		//trim($var,"'");		
		//echo $var;
		print '<img src='.$var .'alt="img" height="100" width="100">';
    }

    //var_dump($files);
?>
