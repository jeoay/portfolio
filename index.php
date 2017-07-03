<!DOCTYPE html>

<html >
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--display the webpage in edge mode, which is the highest standards mode supported by Internet Explorer, from Internet Explorer 6 through IE11. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">    
    <title>Joseph Pellegrino | UI Engineer | UX Designer</title>
    
    <link rel="icon" href="img/favicon.png">
    
    <link rel="stylesheet" href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/story.css">
    <link rel="stylesheet" href="css/skills.css">

</head>

<body>

    <div class="sectionOne"><div id="top"></div>
        <div class="row">
        <?php include 'includes/nav.html' ?>
        <?php include 'includes/social.html' ?>
        </div>
        <div class="container-fluid text-center">
            <div class="row">
                
                <div class="headline">
                    <img src="img/0471f12.jpg" class="headshot">
                    <br>
                    Hello, I'm Joey. 
                     <br>
                    <span class="sub-headline">
                        I am <span id="changer"></span>.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="sectionTwo" id="storySection">
        <div class="container-fluid">
            <div class="row">
                <div class="headline text-center">This is my story.</div>
                <div class="col-sm-4 text-left story">
                    <h3 class="sub-headline">Success is not a destination, it is a journey. </h3>
                    <p class="content">I have been a Front-End Developer for over 3 years. I started out working as an intern at Aerojet Rocketdyne. I had the privilege to work with some great and talented people. I will always be appreciative toward my boss for giving me a chance and helping me become a professional. I was hired full-time at Aerojet once I graduated with a Digital Media Design bachelors degree from National University.</p>
                    <p class="content">After a few years at Aerojet I continued my growth as a professional by becoming a UI contractor at Intel. By no means am I finished learning and growing.</p>                        
                </div>
                <div class="text-center top-btn"><a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i> Top</a></div>
            </div>
        </div>
    </div> 
    <div class="sectionThree" id="projectsSection">
        <div class="container text-center">    
            <div class="row">
                <div class="banner"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
 The rest of this page is still under contruction and may not be functional. Thank you for your understanding. </div>
                <div class="headline">Some Past Projects.</div>
                <div class="col-sm-2">&nbsp;</div>
                <div class="col-xs-3 col-sm-2 projects">
                    <img src="img/placeholder.png" class="img-responsive">
                </div>
                <div class="col-xs-3 col-sm-2 projects">
                    <img src="img/placeholder.png" class="img-responsive">
                </div>
                <div class="col-xs-3 col-sm-2 projects">
                    <img src="img/placeholder.png" class="img-responsive">
                </div>
                <div class="col-xs-3 col-sm-2 projects">
                    <img src="img/placeholder.png" class="img-responsive">
                </div>
                <div class="col-sm-2">&nbsp;</div>
                <div class="text-center top-btn"><a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i> Top</a></div>    
            </div>
        </div>
    </div>
    <div class="sectionFour" id="contactSection">

        <div class="container text-center">    
            <div class="row">
                <div class="headline-white">Contact Me.</div>
                <div class="contact">   
                    <form>
                        <label>Name</label>
                        <input name="name" placeholder="Full Name">
                        
                        <label>Email</label>
                        <input name="email" type="email" placeholder="someone@something.com">
                        
                        <label>Message</label>
                        <textarea name="message" placeholder="What's your message?"></textarea>
                        <br>
                        <input id="submit" name="submit" type="submit" value="Submit">
        
                    </form>
                </div> 
            </div>
        
        
    </div>
<?php include 'includes/footer.html' ?>    
    </div>        
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/index.js"></script>
<script src="js/skills.js"></script>
<script src="js/nav.js"></script>



</body>
</html>
