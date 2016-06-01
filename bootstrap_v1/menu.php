
            <nav>
              <ul class="nav nav-justified">
                <li <?php if(basename($_SERVER['PHP_SELF'], ".php")=="index"){ echo "class=\"active\""; } ?> ><a href="index.php">HOME</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF'], ".php")=="about"){ echo "class=\"active\""; } ?> ><a href="about.php">ABOUT</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF'], ".php")=="gallery"){ echo "class=\"active\""; } ?>><a href="gallery.php">GALLERY</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF'], ".php")=="party"){ echo "class=\"active\""; } ?>><a href="party.php">PARTY</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF'], ".php")=="play"){ echo "class=\"active\""; } ?>><a href="play.php">PLAY</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF'], ".php")=="calendar"){ echo "class=\"active\""; } ?>><a href="#">CALENDER</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF'], ".php")=="contact"){ echo "class=\"active\""; } ?>><a href="contact.php">CONTACT</a></li>
              </ul>
            </nav>

