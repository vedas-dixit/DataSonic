<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

    <!DOCTYPE html>
<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="anime.css">
        
    </head>
    <body>
        
    <video class= "vdobk" src="Anime/mylivewallpapers.com-No-Face-Spirited-Away.mp4" muted loop autoplay></video>
    
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a class="logout btn" id="kmb" href="logout.php">Logout</a>
        <nav class="row">
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="#" id="brand-logo" class="brand-logo">鞍馬アニメ| Kurama</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <form id="search_form" class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" name="search" id="search" type="text" class="validate">
                            <label for="search">Search</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="search-results" class="container">
            
        </div>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>        
        <script src="./anime.js"></script>
    </body>
</html>