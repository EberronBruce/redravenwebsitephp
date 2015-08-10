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
                    <img id="navleftimg" src="image/navleftraven.png" alt="Left Red Raven" />
                    <ul id="navlist">
                        <li><a class="nav-item" id="navhome"  href="/" title="Home">Home</a></li>
                        <li><a class="nav-item" id="navproj" href="/projects" title="Projects">Projects</a></li>
                        <li><a class="nav-item" id="navstud" href="/aboutstudios" title="About the Studios">About the Studios</a></li>
                        <li><a class="nav-item" id="navcontact" href="/contactus" title="Contact Us">Contact Us</a></li>
                    </ul>
                    <div class="clear"></div>
                    <img  id="navrightimg" src="image/navrightraven.png" alt="Right Red Raven" />
                </nav>
                <div class="clear"></div>
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
                        <li><a href="/" title="Home">Home</a></li>
                        <li><a href="/projects" title="Projects">Projects</a></li>
                        <li><a href="/aboutstudios" title="About the Studios">About the Studios</a></li>
                        <li><a href="/contactus" title="Contact Us">Contact Us</a></li>
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
