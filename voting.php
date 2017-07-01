<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../sheet.css" />

</head>

<body>
	<table>
		<tr class="nav-bar-item">
			<td>
				<a href="../index.html" class="nav-bar-item">Home</a>

				<a href="../camera.html" class="nav-bar-item">Camera</a>
			</td>
		</tr>
		<tr>		
		</tr>
		<tr>		
		</tr>		
		<tr class="nav-bar-item">
			<td>
				<a href="../leaderboard.html" class="nav-bar-item">Leader Board</a>

				<a href="voting.php" class="nav-bar-item">Voting</a>
			</td>		
		</tr>
	</table>
</body>

</html>

<?php include("image-voting.php")?>
<?php
    $directory = '../snapattack';

    if (! is_dir($directory)) {
        exit('Invalid diretory path');
    }

    //$files = array();
	$arrayOfStuff = array();
	$arrayOfvals = array();
    foreach (scandir($directory) as $file) {
		if ('.' === $file) continue;
        if ('..' === $file) continue;
		
        //$files[] = $file;
		$var = var_export($file, true);
		if($var == "'upload.php'")
			continue;
		else if($var == "'camera.html'")
			continue;
		else if($var == "'voting.php'")
			continue;
		else if($var == "'error_log'")
			continue;
		else if($var == "'information.csv'")
			continue;
		else if($var == "'namecount.csv'")
			continue;
		else if($var == "'counter.txt'")
			continue;		
		else if($var == "'vote.php'")
			continue;		
		else if($var == "'idinfo.txt'")
			continue;
		
		
		$myfile = fopen("idinfo.txt", "w") or die("Unable to open file!");
		
		fwrite($myfile, $var);
		fclose($myfile);
		
		
		print '<img src='.$var .'alt="img" height="800" width="450">';
		print '
			<form>
				<button action="vote.php" method="post">
					Vote for
				</button>
				<button>
					Invalid
				</button>
			</form>';


    }

?>
