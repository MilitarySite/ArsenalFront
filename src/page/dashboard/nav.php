
<section>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php?name=<?php echo $name ?>"><img class="main-logo" src="img/logo/Military_Army_Logo.jpg" alt="Logo" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="index.php?name=<?php echo $name ?>"><img src="img/logo/Logo_account.jpg" alt="" /></a>
					<h2>
                        <?php 
                            if (strpos($current_url, 'index.php') !== false) {
                                echo $name;
                            } elseif (strpos($current_url, 'settings.php') !== false) {
                                echo $name;
                            } elseif (strpos($current_url, 'profile.php') !== false) {
                                echo $name;
                            } else {
                                echo "Admin";
                            }
                        ?> 
                    </h2>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.php?name=<?php echo $name ?>">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Home</span>
							</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard" href="./index.php?name=<?php echo $name ?>"><span class="mini-sub-pro">Dashboard</span></a></li>
                                <li><a title="Table List" href="./table_list.php" target="_blank"><span class="mini-sub-pro">Table List</span></a></li>
                                <li><a title="Edit" href="./f_edit.php" target="_blank"><span class="mini-sub-pro">Edit</span></a></li>
                                <li><a title="Insertion" href="./f_insertion.php" target="_blank"><span class="mini-sub-pro">Insertion</span></a></li>
                                <li><a title="Delete" href="./f_delete.php" target="_blank"><span class="mini-sub-pro">Delete</span></a></li>
                                <li><a title="File Manager" href="./file-manager.php" target="_blank"><span class="mini-sub-pro">File Manager</span></a></li>
                                <li><a title="Analytics" href="./analytics.php" target="_blank"><span class="mini-sub-pro">Analytics</span></a></li>
                                <li><a title="Widgets" href="./widgets.php" target="_blank"><span class="mini-sub-pro">Widgets</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Data Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="static-table.php" target="_blank"><span class="mini-sub-pro">Static Table</span></a></li>
                                <li><a title="Data Table" href="data-table.php" target="_blank"><span class="mini-sub-pro">Data Table</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><i class="fa big-icon fa-pie-chart icon-wrap"></i> <span class="mini-click-non">Miscellaneous</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="404 Page" href="404.php" target="_blank"><span class="mini-sub-pro">404 Page</span></a></li>
                                <li><a title="500 Page" href="500.php" target="_blank"><span class="mini-sub-pro">500 Page</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</section>

<section>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">  
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro bg-dark">
                        <a href="index.php?name=<?php echo $name ?>"><img class="main-logo" src="img/logo/Military_Army_Logo.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail nalika-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">24 Gen</span>
                                                                        <h2>Sistemi e Reti</h2>
                                                                        <p>Consegna prototipi, progetto finale sito</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">22 Gen</span>
                                                                        <h2>Sistemi e Reti</h2>
                                                                        <p>Imprecazioni, seguite da molte altre imprecazioni</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">20 Gen</span>
                                                                        <h2>Sistemi e Reti</h2>
                                                                        <p>Problemi dell'ultimo minuto, succede sempre no?</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">15 Gen</span>
                                                                        <h2>Sistemi e Reti</h2>
                                                                        <p>Progetto Completato "o cosi si pensa"</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-tick" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">24 Gen</span>
                                                                        <h2>Masciotta</h2>
                                                                        <p>Ricordo la consegna della relazione scade tra 5 minuti</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-cloud" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">24 Gen</span>
                                                                        <h2>Masciotta</h2>
                                                                        <p>Ricordo la consegna della relazione scade tra 120 minuti</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-folder" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">23 Gen</span>
                                                                        <h2>Masciotta</h2>
                                                                        <p>Ricordo la consegna della relazione scade tra 1 giorno</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-bar-chart" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">24 Dec</span>
                                                                        <h2>Masciotta</h2>
                                                                        <p>Ricordo la scadenza tra un mese</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
															<span class="admin-name">
                                                                <?php 
                                                                    if (strpos($current_url, 'index.php') !== false) {
                                                                        echo $name;
                                                                    } elseif (strpos($current_url, 'settings.php') !== false) {
                                                                        echo $name;
                                                                    } elseif (strpos($current_url, 'profile.php') !== false) {
                                                                        echo $name;
                                                                    } else {
                                                                        echo "Admin";
                                                                    }
                                                                ?> 
                                                            </span>
															<i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="profile.php?name=<?php echo $name ?>"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                        </li>
                                                        <li><a href="settings.php?name=<?php echo $name ?>"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                                        </li>
                                                        <li><a href="../../php/logout.php"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <!-- Mobile Menu start -->                      
    <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.php">Dashboard</a></li>
                                                
                                                <li><a href="product-list.php">List Table</a></li>
                                                <li><a href="product-edit.php">Table List</a></li>
                                                <li><a href="product-edit.php">Edit</a></li>
                                                <li><a href="product-edit.php">Insertion</a></li>
                                                <li><a href="product-edit.php">Delete</a></li>
                                                <li><a href="product-detail.php">Product Detail</a></li>
                                                <li><a href="file-manager.php">File Manager</a></li>
                                                <li><a href="analytics.php">Analytics</a></li>
                                                <li><a href="widgets.php">Widgets</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                                                                
                                                <li><a href="404.php">404 Page</a></li>
                                                <li><a href="500.php">500 Page</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.php">Static Table</a>
                                                </li>
                                                <li><a href="data-table.php">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>