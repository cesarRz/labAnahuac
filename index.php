<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
	<h1>
		Cesar Roman Zu&ntilde;iga
	</h1>
	</header>

	<div class="showcase">
	<h2>Python Apps</h2>
	<ul>
		<li><a href="applications/Sentence_Creator-macOS.zip">Sentence creator para mac.</a></li>
	</ul>
	</div>
	
	<div class="showcase">
		<h2>Clase bases de datos 3er Semestre</h2>
		<ul>
		
		</ul>
	</div>

	<div class="showcase">
		<h2>Clase: Desarrollo de Aplicaciones Web</h2>
		<h3>Semestre: 6to</h3>
		<ul>
		<?php			
			$fileSystemIterator = new FilesystemIterator('images');
			$entries = array();
			foreach ($fileSystemIterator as $fileInfo){
    			$entries[] = $fileInfo->getFilename();
			}

			var_dump($entries);

		?>
		</ul>
	</div>



</body>
</html>
