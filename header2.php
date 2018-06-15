<header id="header">
        <?php include("top-bar.php");?>
		
        <nav class="navbar navbar-inverse" role="banner">
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
						<li id="menu2" class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Apply <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
										  <li id="menu2.1"><a  href="apply_seeds.php">Seed</a></li>
										  <li id="menu2.2"><a  href="apply_fertilizer.php">Ferterlizer</a></li>
										  <li id="menu2.3"><a href="apply_contracts.php">Contracts</a></li>
									</ul>
						</li> 

						<li id="menu3" class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">View <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
									  <li id="menu3.1"><a href="view_trainigs.php">Trainings</a></li>
									  <li id="menu3.2"><a href="view_Inspections.php">Inspections</a></li>
									  <li id="menu3.3"><a href="view_messages.php">Messages</a></li>
									</ul>
						</li> 
						
						
						<li id="menu4" class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Approve <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
										<li id="menu4.1"><a href="fertilizers_report.php">Ferterlisers</a></li>
										<li id="menu4.2"><a href="seeds_report.php">Seeds</a></li>
										<li id="menu4.3"><a href="contract_report.php">Contracts</a></li>
									</ul>
						</li>
                    </ul>
                </div>
				<div class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
                        <li id="menu1"><a href="farmer_home.php">Home</a></li>
						<li id="menu5"><a href="logout.php">Logout</a></li>
				</ul>
				</div>
            </div><!--/.container-->
        </nav><!--/nav-->
</header><!--/header-->




