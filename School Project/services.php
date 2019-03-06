<!DOCTYPE html>
<html>
<head>
    <title>Oyamo Brian</title>
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/4.2.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
</head>
<body data-spy="scroll" target="#nav">
<!-- nav section -->

<nav id="nav" class="navbar navbar-expand-md bg-warning navbar-light sticky-top">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Kevin Rotich<i class="fa fa-khanda"></i></a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="../home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../FAQs.php">FAQs</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Log Out</a>
            </li>

        </ul>
    </div>
</nav>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>

</div>
</div>
<br><br>
<!-- carousel end section -->
<!-- start skill section -->
<div class="container" id="skills">
    <table class="table table-stripped table-dark table-hover table-bordered">
        <thead>
        <tr>
            <th colspan="2">Front End</th>
            <th colspan="2">Back End</th>

        </tr>
        <tr>
            <th>Language</th>
            <th>Skills</th>
            <th>Language</th>
            <th>Skills</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>HTML</td>
            <td>
                <div class="progress">
                    <div class="progress-bar" style="width:90%">HTML</div>
                </div>
            </td>
            <td>PHP</td>
            <td>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width:95%">PHP</div>
                </div>
            </td>

        </tr>
        <tr>
            <td>CSS</td>
            <td>
                <div class="progress">
                    <div class="progress-bar bg-warning" style="width:45%">CSS</div>
                </div>
            </td>
            <td>PYTHON</td>
            <td>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width:90%">PYTHON</div>
                </div>
            </td>
        </tr>
        <tr>
            <td>AGULAR JS</td>
            <td>
                <div class="progress">
                    <div class="progress-bar bg-warning" style="width:60%">ANGULAR JS</div>
                </div>
            </td>
            <td>RUBY ON RAILS</td>
            <td>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width:100%">RUBY ON RAILS</div>
                </div>
            </td>
        </tr>

        </tbody>
    </table>


</div>
<button type="button" class="btn btn-primary hidden" data-toggle="modal" data-target="#myModal" hidden="true">
    Open modal
</button>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Hire me!</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Looking for a full stack developer?
                <button type="button" class="btn btn-info btn-lg" data-dismiss="modal" onclick="alert('Thank you please check my contacts at the bottom of the page')">Hire me</button><br>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- start of project showcase section -->
<br><br>
<div class="container-fluid bg-dark" id="showcase">
    <div class="row text-center">
        <div class="col-lg-3 col-mx-12 col-md-6 resize border-right">
            <h5 class="display-4">Oyamnet</h5>
            <img src="../images/16.jpg" class="rounded-circle img-fluid img-responsive">
            <p>
                A complete social network made with PHP 7 and MySQL. An admin panel for the socialsite is available.</p>
            <button class="btn btn-lg btn-secondary">Read more</button>
        </div>
        <div class="col-lg-3 col-mx-12 col-md-6 resize border-right">
            <h5 class="display-4">PHP MySqliConnect 2.1</h5>
            <img src="../images/11.jpg" class="rounded-circle img-fluid img-responsive">
            <p>
                A lightweight framework easy to install and use. It basically automates all mysqli queries and gives out clean results. It also detects SQLinjection</p>
            <button class="btn btn-lg btn-secondary">Read more</button>
        </div>
        <div class="col-lg-3 col-mx-12 col-md-6 resize border-right">
            <h5 class="display-4">WebSpy Ultimate</h5>
            <img src="../images/17.jpg" class="rounded-circle img-fluid img-responsive">
            <p>Ulimate spy to help you know who is malicious. It has an API for form validation and detects XSS attempts.</p>
            <button class="btn btn-lg btn-secondary">Read more</button>

        </div>
        <div class="col-lg-3 col-mx-12 col-md-6 resize">
            <h5 class="display-4">ServerLog Analyser </h5>
            <img src="../images/3.jpg" class="rounded-circle img-fluid img-responsive">
            <p>Reads the server logs and using machine learning identifies threats, friends and help in user experience analytics</p>
            <button class="btn btn-lg btn-secondary">Read more</button>
        </div>
    </div>
</div>
<!-- end of project showcase section -->
<br><br>
<!-- start contact section -->
<div class="container" id="find">
    <div class="row text-left">
        <div class="col-lg-5 col-md-5 col-mx-12 bg-info">
            <h3>Contact me!</h3>
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <textarea cols="41" rows="7"></textarea>
                </div>
                <div class="form-group">
                    <input id="submit" type="submit" name="Submit" value="Submit" class="btn btn-secondary btn-block" placeholder="Enter name">
                </div>
            </form>

        </div>
        <div class="col-lg-7 col-md-7 col-mx-12 bg-dark text-center">
            <h3>Find me on map</h3>
            <iframe style="margin:30px;" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3988.840983843953!2d36.797768514753955!3d-1.2682123990750005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-1.2682095!2d36.798096799999996!4m5!1s0x182f1741d324c663%3A0x7fd3e7ccd9e69154!2semobilis!3m2!1d-1.2647929999999998!2d36.800743!5e0!3m2!1sen!2ske!4v1549027953502" width="80%" height="70%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- end contact section -->
<footer>
    <div class="container-fluid" id="footer">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-mx-12 dark">
                <div id="quote">
                    <h3>Those who live by the <code>code</code> shall die by the <code>code.</code></h3>
                    <h5>KEvin Rotich</h5>
                </div>
                <br>	<br>
                <div id="quote">
                    <h3>With <code>God	</code> everything is possible. With <code>code </code>nothing is impossible.</h3>
                    <h5>Kevin Rotich</h5>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-mx-12">
                <div id="contacts">
                    <h3>Reach me</h3>

                    <span><i class="fa fa-phone"></i><a href="tel://+254758002357">+254758002357</a></span><br>
                    <span><i class="fa fa-envelope"></i><a href="mailto://kevinrotich423@gmail.com">kevinrotich423@gmail.com</a></span><br>

                </div>


            </div>
        </div>
    </div>
    <br>	<br>
</footer>
<script type="text/javascript" src="../bootstrap/4.2.1/js/jquery.js"></script>
<script type="text/javascript" src="../bootstrap/4.2.1/js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#submit").click(function(){
            $(this).html("Thanks for feedback")
        })
        $("img").addClass("img-responsive")
        $(".resize button").hide();
        setTimeout(function(){
            $(".hidden").click();
        },13000)
        var x=1;

        $(".navbar").mouseleave(function(){


            if(x==1){

                $(this).removeClass("bg-warning");
                $(this).slideUp("slow");

                $(this).addClass("bg-info");
                $(this).slideToggle("slow");
                $(this).fadeIn("slow");
                x=0;
            }
            else{
                $(this).removeClass("bg-info");
                $(this).slideUp("slow");
                $(this).addClass("bg-warning");
                $(this).slideToggle("slow");
                $(this).fadeIn("slow");
                x=1;
            }

        })

        $(".resize").mouseenter(function(){
            $(this).children("img").animate({opacity:"0.5",left:"20"},"slow");
            $(this).removeClass("bg-dark");
            $(this).children("button").addClass("bg-success")

            $(this).children("button").show("slide")
            $(this).addClass("greyscale")
            $(this).addClass("bg-info");

        })
        $(".resize").mouseleave(function(){
            $(this).children("img").animate({opacity:"1",right:"20"},"slow");
            $(this).removeClass("greyscale");
            $(this).children("button").removeClass("bg-success");
            $(this).children("button").hide("slide")
            $(this).addClass("bg-dark");



        })
    })
</script>
</script>
</body>
</html>