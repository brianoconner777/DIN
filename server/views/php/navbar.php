	<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element" style="margin-bottom:-20px;"> 
						<span>
							<a href="javascript:(0)">
								<img alt="" class="" src="img/logo.png" style="margin-left:13%; margin-top:-9%; margin-bottom:4%; width:70%; height:auto;"/>
							</a>
						</span>
                    </div>
                    <div class="logo-element">
                        <div>
							<a href="javascript:(0)">
								<img src="img/logo.png" style="width:50px; height:auto;"/>
							</a>
						</div>
                    </div>
                </li>
				<li <?php if($page == 'index.php'){ ?> class="active"<?php } ?>>
					<a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
				</li>
				<li <?php if($act == 'master'){ ?> class="active"<?php } ?>>
                    <a href="javascript:(0)"><i class="fa fa-user"></i> <span class="nav-label">Master</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li <?php if($act2 == 'add'){ ?> class="active"<?php } ?>>
							<a href="#"><i class="fa fa-plus"></i> <span class="nav-label">Add </span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li <?php if($page == 'add-centre-category.php'){ ?> class="active"<?php } ?>><a href="add-centre-category.php">Centre Category</a></li>
								<li <?php if($page == 'add-centre.php'){ ?> class="active"<?php } ?>><a href="add-centre.php">Centre</a></li>
								<li <?php if($page == 'add-session.php'){ ?> class="active"<?php } ?>><a href="add-session.php">Session</a></li>
								<li <?php if($page == 'add-membership.php'){ ?> class="active"<?php } ?>><a href="add-membership.php">Membership</a></li>
								<li <?php if($page == 'add-slot.php'){ ?> class="active"<?php } ?>><a href="add-slot.php">Slot</a></li>
							</ul>
						</li>
						<li <?php if($act2 == 'view'){ ?> class="active"<?php } ?>>
							<a href="#"><i class="fa fa-eye"></i> <span class="nav-label">View </span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li <?php if($page == 'view-centre-category.php'){ ?> class="active"<?php } ?>><a href="view-centre-category.php">Centre Category</a></li>
								<li <?php if($page == 'view-centre.php'){ ?> class="active"<?php } ?>><a href="view-centre.php">Centre</a></li>
								<li <?php if($page == 'view-session.php'){ ?> class="active"<?php } ?>><a href="view-session.php">Session</a></li>
								<li <?php if($page == 'view-membership.php'){ ?> class="active"<?php } ?>><a href="view-membership.php">Membership</a></li>
								<li <?php if($page == 'view-slot.php'){ ?> class="active"<?php } ?>><a href="view-slot.php">Slot</a></li>
							</ul>
						</li>
                    </ul>
                </li>
				<li <?php if($page == 'registrations.php'){ ?> class="active"<?php } ?>>
					<a href="registrations.php"><i class="fa fa-edit"></i> <span class="nav-label">Registrations</span></a>
				</li>
				<li <?php if($act == 'booking'){ ?> class="active"<?php } ?>>
					<a href="javascript:(0)"><i class="fa fa-id-card"></i> 
					<span class="nav-label">Booking </span><span class="fa arrow"></span> </a>
					<ul class="nav nav-second-level collapse">
                        <li <?php if($page == 'booking-membership.php'){ ?> class="active"<?php } ?>><a href="booking-membership.php">Membership</a></li>
						<li <?php if($page == 'booking-session.php'){ ?> class="active"<?php } ?>><a href="booking-session.php">Session</a></li>
                    </ul>
				</li>
			</ul>
        </div>
    </nav>
	<div id="page-wrapper" class="gray-bg">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
					</div>
					<ul class="nav navbar-top-links navbar-right">
						<li>
							<a href="php/logout.php">
								<i class="fa fa-sign-out"></i> Logout
							</a>
						</li>
					</ul>
				</nav>
			</div>