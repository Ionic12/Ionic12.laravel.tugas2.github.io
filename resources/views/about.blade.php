<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/aboutme.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <style>
    body {
        font-family: 'Josefin Sans';
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src='js/jquery-3.6.0.js'></script>
    <script>
		$(document).ready(function(){
				$(".icon").hide();
		});
		$(document).ready(function(){
			$(".button").click(function(){
				$(".icon").slideToggle(5000);			
			});
		});
	</script>
    <title>Hallo , <?php echo $nama?></title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/urwelcome"><img src="img/me.png" alt="..." height="40"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/urwelcome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "About Me") ? 'active' : '' }}" href="/aboutme">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Comment") ? 'active' : '' }}" href="/comment">Comment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Coming Soon") ? 'active' : '' }}" href="/comingsoon">Coming Soon</a>
            </li>
                </ul>
            </div>
            </div>
        </nav>
      @yield('area')