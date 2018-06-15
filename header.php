
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
				
                <div class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
                        <li id="menu1"><a href="admin_home.php">Home</a></li>
						<li id="menu5"><a href="logout2.php">Logout</a></li>
				</ul>
				</div>
				<div class="collapse navbar-collapse navbar-left">
				<ul class="nav navbar-nav">
						<li id="menu2" class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Add <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
										  <li id="menu2.1"><a  href="add_seeds.php">Seeds</a></li>
										  <li id="menu2.2"><a  href="add_fertilizers.php">Fertilizers</a></li>
									</ul>
						</li> 

						<li id="menu3" class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Approve<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
										<li id="menu3.1"><a href="approve_contracts.php">Contracts</a></li>
										<li id="menu3.2"><a href="approve_fertilizers.php">Ferterlisers</a></li>
										<li id="menu3.3"><a href="approve_seeds.php">Seeds</a></li>
									</ul>
						</li> 
						
						
						<li id="menu4" class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Update <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
										<li id="menu4.1"><a href="update_trainings.php">Trainings</a></li>
										<li id="menu4.2"><a href="update_inspection.php">Inspections</a></li>
										<li id="menu4.3"><a href="update_messages.php">Messages</a></li>
									</ul>
						</li>
						
						<li id="menu6" class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
									
										<li id="menu6.1"><a href="reports_contracts.php">Contracts</a></li>
										<li id="menu6.2"><a href="reports_fertilizers.php">Ferterlisers</a></li>
										<li id="menu6.3"><a href="reports_seeds.php">Seeds</a></li>
										<li id="menu6.4"><a href="reportPDF.php" target="_blank">Farmers</a></li>
									</ul>
						</li>
						
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
</header><!--/header-->


