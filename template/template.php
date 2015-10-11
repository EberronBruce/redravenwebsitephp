<!DOCTYPE html>
<html>
    <head>
        <title>Red Raven Computing Studious</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/ravenstyle.css">
        <link rel="icon" href="image/favicon.ico">
    </head>
    <body>
        
        <div class="container">
        
            <header>
                <img class="mainlogo" src="image/logo.png" alt="Red Raven Computing Studious" />
                
                <nav id="topNav">
       
                    <ul id="navlist" class="center">
                        <li><a class="nav-item" id="navhome"  href="/" title="Home">Home</a></li>
                        <li><a class="nav-item" id="navproj" href="/projects" title="Projects">Projects</a></li>
                        <li><a class="nav-item" id="navstud" href="/aboutstudios" title="About Us">About Us</a></li>
                        <li><a class="nav-item" id="navcontact" href="/contactus" title="Contact Us">Contact Us</a></li>
                        <li><a class="nav-item" id="navblog" href="/" title="Blog">Blog</a></li>
                    </ul>
           
                </nav>
                
            </header>
            <div class="homeSection" id="sect">
                <!-- Insert the code in here to replace the content -->
                <?php echo $content['sect']; ?>
                
                
            </div>
            <div class="clear"></div>
            <footer>
                <nav class="navFooter"> 
                    <ul class="footerList">
                        <li id="copyright">&copy;Red Raven Computing Studios 2015</li>
                        <li><a href="#" title="Privacy">Privacy</a></li>
                        <li><a href="#" title="Disclaimer">Disclaimer</a></li>
                        <li><a href="#" title="Terms and Conditions">Terms and Conditions</a></li>
                        <li><a href="#" title="Copyright">Copyright</a></li>
                    </ul>
                </nav>
            </footer>
        </div>
        
        
        
    <script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/pagechange.js"></script>
    <script src="/js/navbar.js"></script>
    
     
    <script>
        
        
    
    </script>
    
    </body>
</html>
