<?php
$doc_name = 'Feista Mexicana'; 
?>


<!DOCTYPE html>
<html>
    <head>
        <title><? php echo $doc_name; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Rest.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    </head>

    <body>
    
        <header>
            <h1 class="logo"><? php echo $doc_name; ?></h1>
            
            
            <nav>
                <ul class="links">
                    <li><a href="Restuaurant.php">Home</a></li>
                    <li><a href="RestuarantMenu.html">Menu</a></li>
                    
                
                
                </ul>
            
            
            </nav>
        
        
        </header>
<!--Main Picture/ Press image to enter menu page-->        
        <section>       
            <div class="container">
               <div id="content">
                <h2 class="title">Welcome to Feista Mexicana!</h2>
                
                <div class="picture">
                
                    <a href="RestuarantMenu.html">
                    
                        <img src="/Users/kevinnesifort/Downloads/authentic_mexican_pork_tacos-carnitas_tacos-recipe.jpg" alt="Map">
                    </a>
                
                </div>
                </div>
            
            
            </div>
        
        
        </section>
 <!--Hours and Map Location-->       
        <section>
        
            <div class="container">
                
                <div class="time" id="sidebar">
                    <h2>Hours</h2>
                    <ul>
                        <li>Monday: 10 am- 10pm </li>
                        <li>Tuesday: 10 am- 10pm </li>
                        <li>Wednesday: 10 am- 10pm </li>
                        <li>Thursday: 10 am- 10pm </li>
                        <li>Friday: 10 am- 10pm </li>
                        <li>Saturday: 10 am- 10pm </li>
                        <li>Sunday: 10 am- 10pm </li>
                    
                    
                    </ul>
                
                
                
                
                    <div class="location">
                    
                        <a href="https://www.google.com/maps/place/Fiesta+Mexicana/@39.3276484,-76.5070058,17z/data=!3m1!4b1!4m5!3m4!1s0x89c8064d121301f3:0x41bc7af938f75133!8m2!3d39.3276484!4d-76.5048171">
                            
                            <p>8304 Philadelphia Rd, Rosedale MD 21237</p>
                            <img src="/Users/kevinnesifort/Desktop/Screen Shot 2018-11-22 at 12.26.23 AM.png" alt="Map">
                    
                            
                        </a>
                                                                                                                       
                
                                                                                                                       
                
                
                    </div>
                </div>
                 <!--
                <div id="map"></div>
                
                <script>
                    function initMap () {
                        // Location of Mexicana
                        var Feista = {lat: 39.327, lng: -76.504};
                        var map = new google.maps.Map(document.getElementById('map'), {zoom: 4, center: Feista});
                        
                        var marker = new google.maps.Marker({position: Feista, map:map});
                
                </script>
                -->
                
                
                
                
                
            
            </div>
        
        
        
        </section>
        
        <footer>
        
            <p><? php echo $doc_name; ?> &copy; <? php echo date('Y'); ?></p>
        
        
        </footer>
    
    
    
    
    </body>



</html>