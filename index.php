<?php 
function generateRandomString($length = 2) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$indexKey = generateRandomString();
$url = "PLYqfXQ-ztmZLUpVdZiOMdGUl7ksGCgOos";
?>
<html>
<head>
<title>MrBurtboxUK</title>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
	<body>
		<div class="row">
			<div class="col s0 m2"></div>
			<div class="col s12 m8">
			  <div class="card">
				<div class="card-image">
				 <div class="video-container">
				  <iframe width="560" height="315" src="http://www.youtube.com/embed/videoseries?list=<?php echo $url; ?>&index=<?php echo $indexKey; ?>&autoplay=1" frameborder="0" allowfullscreen></iframe>
				 </div>
				</div>
				<div class="card-action">
				  <a target="_blank" href="http://www.youtube.com/playlist?list=<?php echo $url; ?>">Playlist</a>
				</div>
			  </div>
			</div>
	  </div>
	  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
	</body>
</html>