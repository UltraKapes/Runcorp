<?php 
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "volunteam";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("SELECT * FROM feed");
    $stmt->execute();
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <title>Volunteam - Feed</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <div class="phone-nav zed">
            <a href="index.php">
                <div id="homeButton" class="col-xs-3 button-right clicked">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                </div>
            </a>
            <a href="organisation_stats.html">
                <div id="statsButton" class="col-xs-3 not-clicked">
                    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                </div>
            </a>
            <a href="opps.php">
                <div id="oppButton" class="col-xs-3 button-left not-clicked">
                    <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
                </div>   
            </a>
            <a href="create-feed.html">
                <div id="oppButton" class="col-xs-3 button-left not-clicked">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </div>
            </a>
        </div>


        
            <div class="row feedcontainer">

                <div id="feed">
                    <div class=" text-center">
                        <div class=" row homeHeader">VolunTeam News Feed</div>
                    </div>
                    <div class="outer">
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {?>
                            <div class=" col-sm-12 feedItem">
                               
                                <img class="profilePic" src="img/profile.jpg" width="50" height="50">
                                <h4 class="profileName"><?php echo $row['person_name']?> - <?php echo $row['charity_name']?></h4>
                                <p class="comment"><?php echo $row['comment']?></p>
                                <img class="commentPic"src="<?php echo $row['image']?>" width="100%" height="300">

                            </div>
                        <?php }?>
                        
                    </div>
                </div>
               
            </div>



                    
        

        <div class="container" style="
    margin-bottom: 52px;
">
            <div style="height:42px;"></div>
        </div>

        <script>
            $(document).ready(function(){
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                });

                $(window).scroll(function() {
                    $(".slideanim").each(function(){
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>

         <script type="text/javascript">

            // Wait for the page to load first
            window.onload = function() {

              //Get a reference to the link on the page
              // with an id of "mylink"
              var a = document.getElementById("button1");
              var b = document.getElementById("button2");
              var c = document.getElementById("button3");

              //Set code to run when the link is clicked
              // by assigning a function to "onclick"
              a.onclick = function() {

                // Your code here...

                //If you don't want the link to actually 
                // redirect the browser to another page,
                // "google.com" in our example here, then
                // return false at the end of this block.
                // Note that this also prevents event bubbling,
                // which is probably what we want here, but won't 
                // always be the case.
                document.getElementById('picture').src = 'img/graph.png';
                return false;
              }

              b.onclick = function() {
                document.getElementById('picture').src = 'img/graph1.png';
                return false;
              }

              c.onclick = function() {
                alert("test");
                return false;
              }
            }
        </script>

         <script>
            $(document).ready(function() {
               

            });

            

        </script>

    </body>
</html>
