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
    $stmt = $conn->prepare("SELECT * FROM events WHERE id=:id");
    $stmt->execute(array(':id' => $_GET['id']));
    $row = $stmt->fetch();
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
        <title>Volunteam - Some Op</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/form.css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <div class="phone-nav zed">
            <a href="index.php">
                <div id="homeButton" class="col-xs-3 button-right clicked">HOME</div>
            </a>
            <a href="organisation_stats.html">
                <div id="statsButton" class="col-xs-3 not-clicked">STATS</div>
            </a>
            <a href="opps.php">
                <div id="oppButton" class="col-xs-3 button-left not-clicked">OPP</div>
            </a>
            <a href="create-feed.html">
                <div id="oppButton" class="col-xs-3 button-left not-clicked">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </div>
            </a>
        </div>

        <div class="container text-right">
            <div class="row">
                <div class="col-xs-5 col-xs-offset-1 col-lg-5 col-lg-offset-0">
                    <h1>St Vincent De Pauls</h1>
                </div>
                <a href="join-thingo.html" class="btn btn-default col-xs-2 col-lg-1 col-xs-offset-3 col-lg-offset-6 push-down green" value="Sign Up">Join</a>
                <div class="col-xs-1">

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-4 text-right">
                    <p>Charity Name: </p>
                </div>
                <div class="col-xs-8 text-left">
                    <p><?php echo $row['charity_name'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 text-right">
                    <p>Approval Status: </p>
                </div>
                <?php if ($row['status'] == 1): ?>
                    <div class="col-xs-8 text-left">
                        <p class="pending">Pending</p>
                    </div>
                <?php elseif ($row['status'] == 2): ?>
                    <div class="col-xs-8 text-left">
                        <p class="pending">Approved</p>
                    </div>
                <?php elseif ($row['status'] == 3): ?>
                    <div class="col-xs-8 text-left">
                        <p class="pending">Denied</p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-xs-4 text-right">
                    <p>Description: </p>
                </div>
                <div class="col-xs-8 text-left">
                    <p><?php echo $row['description']?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 text-right">
                    <p>Address: </p>
                </div>
                <div class="col-xs-8 text-left">
                    <p><?php echo $row['address']?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 text-right">
                    <p>Contact Name: </p>
                </div>
                <div class="col-xs-8 text-left">
                    <p><?php echo $row['contact_name']?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 text-right">
                    <p>Contact Number: </p>
                </div>
                <div class="col-xs-8 text-left">
                    <p><?php echo $row['contact_number']?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 text-right">
                    <p>Contact email: </p>
                </div>
                <div class="col-xs-8 text-left">
                    <p><?php echo $row['contact_email']?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 text-right">
                    <p>Max Allowed People: </p>
                </div>
                <div class="col-xs-8 text-left">
                    <p><?php echo $row['max_volunteers']?></p>
                </div>
            </div>
        </div>

        <div class="container">
            <div style="height:100px;"></div>
        </div>

        <script>
            function testAlert() {
                alert("test");
            }
        </script>

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
    </body>
</html>
