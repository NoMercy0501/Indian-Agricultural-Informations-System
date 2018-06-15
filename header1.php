<header id="header">
        <?php include("top-bar.php");?>
	
        <nav  class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
				
                <div class="collapse navbar-collapse navbar-left">
				<ul class="nav navbar-nav">
                        <li id="menu1"><a href="index.php">Home</a></li>
						<li id="menu2" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
								<li id="menu2.1"><a href="login.php" target="_blank">Farmer Login</a></li>
                                <li id="menu2.2"><a href="adminlogin.php" target="_blank">Admin Login</a></li>
								<li id="menu2.3"><a href="register.php" target="_blank">Farmer Register</a></li>
                            </ul>
                        </li>
						<li id="menu3"><a href="information.php">Information Hub</a></li>
						<li id="menu4"><a href="di-sodium-tetra-borate-penta-hydrate.php">About Products</a></li>
						<li id="menu5" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
								<li><a href="about-us.php" target="_blank">Developers</a></li>
                                <li><a href="vision.php" target="_blank">Vison & Mission</a></li>
								<li><a href="pricing.php" target="_blank">Pricing Details</a></li>
                            </ul>
                        </li>
						<li id="menu6"><a href="contact-us.php" target="_blank">Contact Us</a></li>
						<li id="menu7"><a href="https://en.wikipedia.org/wiki/Indian_Farmers_Fertiliser_Cooperative" target="_blank">About IFFCO</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
</header><!--/header-->
