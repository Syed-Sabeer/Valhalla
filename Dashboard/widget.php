<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta name="description" content="Responsive Admin Template">
        <meta name="author" content="SmartUniversity">
        <title>
            ECab - Taxi Admin Bootstrap 4 Material Design Dashboard Template
        </title><!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css"><!-- icons -->
        <link href="assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css">
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!--bootstrap -->
        <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet"><!-- morris chart -->
        <link href="assets/plugins/morris/morris.css" rel="stylesheet" type="text/css"><!-- Material Design Lite CSS -->
        <link rel="stylesheet" href="assets/plugins/material/material.min.css">
        <link rel="stylesheet" href="assets/css/material_style.css"><!-- animation -->
        <link href="assets/css/pages/animate_page.css" rel="stylesheet"><!-- inbox style -->
        <link href="assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css"><!-- Theme Styles -->
        <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
        <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css"><!-- Owl Carousel Assets -->
        <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet"><!-- favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico">
    </head>
    <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-white">
        <div class="page-wrapper">
            <!-- start header -->
            <div class="page-header navbar navbar-fixed-top">
                <div class="page-header-inner">
                    <!-- logo start -->
                    <div class="page-logo">
                        <a href="index.php"><img alt="" src="assets/img/logo.png"><span class="logo-default">ECab</span></a>
                    </div><!-- logo end -->
                    <ul class="nav navbar-nav navbar-left in">
                        <li>
                            <a href="#" class="menu-toggler sidebar-toggler font-size-23"><i class="fa fa-bars"></i></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left in">
                        <!-- start full screen button -->
                        <li>
                            <a href="javascript:;" class="fullscreen-click font-size-20"><i class="fa fa-arrows-alt"></i></a>
                        </li><!-- end full screen button -->
                    </ul>
                    <form class="search-form-opened" action="#" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query"><span class="input-group-btn search-btn"><a href="javascript:;" class="btn submit"><i class="fa fa-search"></i></a></span>
                        </div>
                    </form><!-- start mobile menu --><a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"><span></span></a><!-- end mobile menu --><!-- start header menu -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- start notification dropdown -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="fa fa-bell-o"></i><span class="notify"></span><span class="heartbeat"></span></a>
                                <ul class="dropdown-menu pullDown">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">Notifications</span>
                                        </h3><span class="notification-label purple-bgcolor">New 6</span>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;"><span class="time">just now</span><span class="details"><span class="notification-icon circle deepPink-bgcolor box-shadow-1"><i class="fa fa-check"></i></span>Congratulations!.</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><span class="time">3 mins</span><span class="details"><span class="notification-icon circle purple-bgcolor box-shadow-1"><i class="fa fa-user o"></i></span><b>John Micle</b> is now following you.</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><span class="time">7 mins</span><span class="details"><span class="notification-icon circle blue-bgcolor box-shadow-1"><i class="fa fa-comments-o"></i></span><b>Sneha Jogi</b> sent you a message.</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><span class="time">12 mins</span><span class="details"><span class="notification-icon circle pink box-shadow-1"><i class="fa fa-heart"></i></span><b>Ravi Patel</b> like your photo.</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><span class="time">15 mins</span><span class="details"><span class="notification-icon circle yellow box-shadow-1"><i class="fa fa-warning"></i></span>Warning!</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><span class="time">10 hrs</span><span class="details"><span class="notification-icon circle red box-shadow-1"><i class="fa fa-times"></i></span>Application error.</span></a>
                                            </li>
                                        </ul>
                                        <div class="dropdown-menu-footer">
                                            <a href="javascript:void(0)">All notifications</a>
                                        </div>
                                    </li>
                                </ul>
                            </li><!-- end notification dropdown --><!-- start message dropdown -->
                            <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="fa fa-envelope-o"></i><span class="notify"></span><span class="heartbeat"></span></a>
                                <ul class="dropdown-menu animated pullDown">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">Messages</span>
                                        </h3><span class="notification-label cyan-bgcolor">New 2</span>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                            <li>
                                                <a href="#"><span class="photo"><img src="assets/img/user/user2.jpg" class="img-circle" alt=""></span><span class="subject"><span class="from">Sarah Smith</span><span class="time">Just Now</span></span><span class="message">Jatin I found you on LinkedIn...</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="photo"><img src="assets/img/user/user3.jpg" class="img-circle" alt=""></span><span class="subject"><span class="from">John Deo</span><span class="time">16 mins</span></span><span class="message">Fwd: Important Notice Regarding Your Domain Name...</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="photo"><img src="assets/img/user/user1.jpg" class="img-circle" alt=""></span><span class="subject"><span class="from">Rajesh</span><span class="time">2 hrs</span></span><span class="message">pls take a print of attachments.</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="photo"><img src="assets/img/user/user8.jpg" class="img-circle" alt=""></span><span class="subject"><span class="from">Lina Smith</span><span class="time">40 mins</span></span><span class="message">Apply for Ortho Surgeon</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="photo"><img src="assets/img/user/user5.jpg" class="img-circle" alt=""></span><span class="subject"><span class="from">Jacob Ryan</span><span class="time">46 mins</span></span><span class="message">Request for leave application.</span></a>
                                            </li>
                                        </ul>
                                        <div class="dropdown-menu-footer">
                                            <a href="#">All Messages</a>
                                        </div>
                                    </li>
                                </ul>
                            </li><!-- end message dropdown --><!-- start manage user dropdown -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><img alt="" class="img-circle" src="assets/img/dp.jpg"></a>
                                <ul class="dropdown-menu dropdown-menu-default animated jello">
                                    <li>
                                        <a href="user_profile.php"><i class="fa fa-user-o"></i>Profile</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-cogs"></i>Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-question-circle"></i>Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="lock_screen.php"><i class="fa fa-lock"></i>Lock</a>
                                    </li>
                                    <li>
                                        <a href="login.php"><i class="fa fa-sign-out"></i>Log Out</a>
                                    </li>
                                </ul>
                            </li><!-- end manage user dropdown -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- end header --><!-- start page container -->
            <div class="page-container">
                <!-- start sidebar menu -->
                <div class="sidebar-container">
                    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                        <div id="remove-scroll">
                            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                                <li class="sidebar-toggler-wrapper hide">
                                    <div class="sidebar-toggler">
                                        <span></span>
                                    </div>
                                </li>
                                <li class="sidebar-user-panel">
                                    <div class="user-panel">
                                        <div class="pull-left image">
                                            <img src="assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image">
                                        </div>
                                        <div class="pull-left info">
                                            <p>
                                                Marria
                                            </p><a title="Inbox" href="email_inbox.php"><i class="material-icons">email</i></a><a title="Profile" href="user_profile.php"><i class="material-icons">person</i></a><a title="Logout" href="login.php"><i class="material-icons">power_settings_new</i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-heading">
                                    <span>-- Main</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">dashboard</i><span class="title">Dashboard</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="index.php" class="nav-link"><span class="title">Dashboard 1</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard2.php" class="nav-link"><span class="title">Dashboard 2</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">email</i><span class="title">Email</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="email_inbox.php" class="nav-link"><span class="title">Inbox</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="email_view.php" class="nav-link"><span class="title">View Mail</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="email_compose.php" class="nav-link"><span class="title">Compose Mail</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">local_taxi</i><span class="title">Trip</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="active_trips.php" class="nav-link"><span class="title">Active Trips</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="completed_trips.php" class="nav-link"><span class="title">Completed Trips</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="booked_trips.php" class="nav-link"><span class="title">Booked Trips</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="route_map.php" class="nav-link"><span class="title">Route Map</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">person</i><span class="title">Drivers</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="add_driver.php" class="nav-link"><span class="title">Add New Driver</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="all_drivers.php" class="nav-link"><span class="title">All Drivers</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="driver_payment.php" class="nav-link"><span class="title">Driver Payment</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="all_passenger.php" class="nav-link nav-toggle"><i class="material-icons">people</i><span class="title">All Passengers</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">airport_shuttle</i><span class="title">Vehicle</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="add_vehicle.php" class="nav-link"><span class="title">Add Vehicle Details</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="all_vehicles.php" class="nav-link"><span class="title">View All Vehicle</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="edit_vehicle.php" class="nav-link"><span class="title">Edit Vehicle Details</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">style</i><span class="title">Coupons</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="coupon_generation.php" class="nav-link"><span class="title">Coupon Generation</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coupon_list.php" class="nav-link"><span class="title">Coupon List</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">local_atm</i><span class="title">Fare Management</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="add_fare.php" class="nav-link"><span class="title">Add Fare</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="fair_list.php" class="nav-link"><span class="title">Fail List</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-heading m-t-20">
                                    <span>-- Layout, Apps & Widget</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">desktop_mac</i><span class="title">Layout</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="layout_boxed.php" class="nav-link"><span class="title">Boxed</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layout_full_width.php" class="nav-link"><span class="title">Full Width</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layout_collapse.php" class="nav-link"><span class="title">Collapse Menu</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layout_right_sidebar.php" class="nav-link"><span class="title">Right Sidebar</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layout_sidebar_hover_menu.php" class="nav-link"><span class="title">Hover Sidebar Menu</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">grain</i><span class="title">Apps</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="chat.php" class="nav-link"><span class="title">Chat</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact_list.php" class="nav-link"><span class="title">Contact List</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact_grid.php" class="nav-link"><span class="title">Contact Grid</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="gallery.php" class="nav-link"><span class="title">Gallery</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="support.php" class="nav-link"><span class="title">Support</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="calendar.php" class="nav-link"><span class="title">Calendar</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item active">
                                    <a href="widget.php" class="nav-link nav-toggle"><i class="material-icons">widgets</i><span class="title">Widget</span><span class="selected"></span></a>
                                </li>
                                <li class="menu-heading m-t-20">
                                    <span>-- Elements, Forms & Tables</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">dvr</i><span class="title">UI Elements</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="buttons.php" class="nav-link"><span class="title">Buttons</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="alert.php" class="nav-link"><span class="title">Alert</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tabs_accordions_navs.php" class="nav-link"><span class="title">Tabs & Accordions</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="typography.php" class="nav-link"><span class="title">Typography</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="notification.php" class="nav-link"><span class="title">Notifications</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sweet_alert.php" class="nav-link"><span class="title">Sweet Alert</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="panels.php" class="nav-link"><span class="title">Panels</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="grid.php" class="nav-link"><span class="title">Grids</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tree.php" class="nav-link"><span class="title">Tree View</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="carousel.php" class="nav-link"><span class="title">Carousel</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="animation.php" class="nav-link"><span class="title">Animations</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">store</i><span class="title">Material Elements</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="material_button.php" class="nav-link"><span class="title">Buttons</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_tab.php" class="nav-link"><span class="title">Tabs</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_chips.php" class="nav-link"><span class="title">Chips</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_grid.php" class="nav-link"><span class="title">Grid</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_form.php" class="nav-link"><span class="title">Form</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_datepicker.php" class="nav-link"><span class="title">DatePicker</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_select.php" class="nav-link"><span class="title">Select Item</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_loading.php" class="nav-link"><span class="title">Loading</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_menu.php" class="nav-link"><span class="title">Menu</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_slider.php" class="nav-link"><span class="title">Slider</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_tables.php" class="nav-link"><span class="title">Tables</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_toggle.php" class="nav-link"><span class="title">Toggle</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_badges.php" class="nav-link"><span class="title">Badges</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">subtitles</i><span class="title">Forms</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="layouts_form.php" class="nav-link"><span class="title">Form Layout</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advance_form.php" class="nav-link"><span class="title">Advance Component</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="validation_form.php" class="nav-link"><span class="title">Form Validation</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="steps.php" class="nav-link"><span class="title">Wizard</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="file_upload.php" class="nav-link"><span class="title">File Upload</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="editable_form.php" class="nav-link"><span class="title">Editor</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">list</i><span class="title">Data Tables</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="basic_table.php" class="nav-link"><span class="title">Basic Tables</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advanced_table.php" class="nav-link"><span class="title">Advance Tables</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="editable_table.php" class="nav-link"><span class="title">Editable Tables</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="group_table.php" class="nav-link"><span class="title">Grouping</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="table_data.php" class="nav-link"><span class="title">Tables With Sourced Data</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-heading m-t-20">
                                    <span>-- Extra Components</span>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">timeline</i><span class="title">Charts</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="charts_echarts.php" class="nav-link"><span class="title">eCharts</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts_morris.php" class="nav-link"><span class="title">Morris Charts</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts_chartjs.php" class="nav-link"><span class="title">Chartjs</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">map</i><span class="title">Maps</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="google_maps.php" class="nav-link"><span class="title">Google Maps</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="vector_maps.php" class="nav-link"><span class="title">Vector Maps</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">album</i><span class="title">Icons</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="fontawesome_icons.php" class="nav-link"><span class="title">Font Awesome</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_icons.php" class="nav-link"><span class="title">Material Icon</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">description</i><span class="title">Extra pages</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="timeline.php" class="nav-link"><span class="title">Timeline</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="login.php" class="nav-link"><span class="title">Login</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sign_up.php" class="nav-link"><span class="title">Registration</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forgot_password.php" class="nav-link"><span class="title">Forgot Password</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="user_profile.php" class="nav-link"><span class="title">Profile</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pricing.php" class="nav-link"><span class="title">Pricing</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contactus.php" class="nav-link"><span class="title">Contact Us</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="invoice.php" class="nav-link"><span class="title">Invoice</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.php" class="nav-link"><span class="title">Faq</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="lock_screen.php" class="nav-link"><span class="title">Lock Screen</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="page-404.php" class="nav-link"><span class="title">404 Page</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="page-500.php" class="nav-link"><span class="title">500 Page</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blank_page.php" class="nav-link"><span class="title">Blank Page</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">slideshow</i><span class="title">Multi Level Menu</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-university"></i>Item 1 <span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-bell-o"></i>Arrow Toggle <span class="arrow"></span></a>
                                                    <ul class="sub-menu">
                                                        <li class="nav-item">
                                                            <a href="javascript:;" class="nav-link"><i class="fa fa-calculator"></i>Sample Link 1</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link"><i class="fa fa-clone"></i>Sample Link 2</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link"><i class="fa fa-cogs"></i>Sample Link 3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-file-pdf-o"></i>Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-rss"></i>Sample Link 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-hdd-o"></i>Sample Link 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-gavel"></i>Arrow Toggle <span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-paper-plane"></i>Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-power-off"></i>Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-recycle"></i>Sample Link 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fa fa-volume-up"></i>Item 3</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end sidebar menu --><!-- start page content -->
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class="pull-left">
                                    <div class="page-title">
                                        Widgets
                                    </div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li>
                                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">Widgets
                                    </li>
                                </ol>
                            </div>
                        </div><!-- start widget -->
                        <div class="state-overview">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 col-12">
                                    <div class="info-box bg-b-purple">
                                        <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Booked Trips</span><span class="info-box-number">450</span>
                                            <div class="progress">
                                                <div class="progress-bar width-60"></div>
                                            </div><span class="progress-description">60% Increase in 28 Days</span>
                                        </div><!-- /.info-box-content -->
                                    </div><!-- /.info-box -->
                                </div><!-- /.col -->
                                <div class="col-xl-3 col-md-6 col-12">
                                    <div class="info-box bg-b-green">
                                        <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Cancelled Trip</span><span class="info-box-number">155</span>
                                            <div class="progress">
                                                <div class="progress-bar width-40"></div>
                                            </div><span class="progress-description">40% Increase in 28 Days</span>
                                        </div><!-- /.info-box-content -->
                                    </div><!-- /.info-box -->
                                </div><!-- /.col -->
                                <div class="col-xl-3 col-md-6 col-12">
                                    <div class="info-box bg-b-black">
                                        <span class="info-box-icon push-bottom"><i class="material-icons">content_cut</i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">New Users</span><span class="info-box-number">52</span>
                                            <div class="progress">
                                                <div class="progress-bar width-80"></div>
                                            </div><span class="progress-description">80% Increase in 28 Days</span>
                                        </div><!-- /.info-box-content -->
                                    </div><!-- /.info-box -->
                                </div><!-- /.col -->
                                <div class="col-xl-3 col-md-6 col-12">
                                    <div class="info-box bg-b-danger">
                                        <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total Earning</span><span class="info-box-number">13,921</span><span>$</span>
                                            <div class="progress">
                                                <div class="progress-bar width-60"></div>
                                            </div><span class="progress-description">60% Increase in 28 Days</span>
                                        </div><!-- /.info-box-content -->
                                    </div><!-- /.info-box -->
                                </div><!-- /.col -->
                            </div>
                        </div>
                        <div class="row">
                            <!-- Quick Mail start -->
                            <div class="col-md-6 col-sm-6">
                                <div class="card-box">
                                    <div class="card-head">
                                        <header>
                                            Quick Mail
                                        </header><button id="demo_menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="demo_menu-lower-right">
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">assistant_photo</i>Action
                                            </li>
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">print</i>Another action
                                            </li>
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">favorite</i>Something else here
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="mail-list">
                                            <div class="compose-mail">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <label for="to" class="">To:</label><input type="text" tabindex="1" id="to" class="form-control">
                                                        <div class="compose-options">
                                                            <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a><a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group hidden">
                                                        <label for="cc" class="">Cc:</label><input type="text" tabindex="2" id="cc" class="form-control">
                                                    </div>
                                                    <div class="form-group hidden">
                                                        <label for="bcc" class="">Bcc:</label><input type="text" tabindex="2" id="bcc" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="subject" class="">Subject:</label><input type="text" tabindex="1" id="subject" class="form-control">
                                                    </div>
                                                    <div>
                                                        <div id="summernote"></div><input type="file" class="default" multiple>
                                                    </div>
                                                    <div class="box-footer clearfix">
                                                        <button type="button" class="mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right">Send <i class="fa fa-paper-plane-o"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Quick Mail end --><!-- Activity feed start -->
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card-box">
                                    <div class="card-head">
                                        <header>
                                            Activity Feed
                                        </header><button id="feedMenu" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="feedMenu">
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">assistant_photo</i>Action
                                            </li>
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">print</i>Another action
                                            </li>
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">favorite</i>Something else here
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <ul class="feedBody">
                                            <li class="active-feed">
                                                <div class="feed-user-img">
                                                    <img src="assets/img/user/user1.jpg" class="img-radius" alt="User-Profile-Image">
                                                </div>
                                                <h6>
                                                    <span class="feedLblStyle lblFileStyle">File</span>Sarah Smith <small class="text-muted">6 hours ago</small>
                                                </h6>
                                                <p class="m-b-15 m-t-15">
                                                    hii John, I have upload doc related to task.
                                                </p>
                                            </li>
                                            <li class="diactive-feed">
                                                <div class="feed-user-img">
                                                    <img src="assets/img/user/user2.jpg" class="img-radius" alt="User-Profile-Image">
                                                </div>
                                                <h6>
                                                    <span class="feedLblStyle lblTaskStyle">Task</span> Jalpa Joshi<small class="text-muted">5 hours ago</small>
                                                </h6>
                                                <p class="m-b-15 m-t-15">
                                                    Please do as specify. Let me know if you have any query.
                                                </p>
                                            </li>
                                            <li class="diactive-feed">
                                                <div class="feed-user-img">
                                                    <img src="assets/img/user/user3.jpg" class="img-radius" alt="User-Profile-Image">
                                                </div>
                                                <h6>
                                                    <span class="feedLblStyle lblCommentStyle">comment</span>Lina Smith<small class="text-muted">6 hours ago</small>
                                                </h6>
                                                <p class="m-b-15 m-t-15">
                                                    Hey, How are you??
                                                </p>
                                            </li>
                                            <li class="active-feed">
                                                <div class="feed-user-img">
                                                    <img src="assets/img/user/user4.jpg" class="img-radius" alt="User-Profile-Image">
                                                </div>
                                                <h6>
                                                    <span class="feedLblStyle lblReplyStyle">Reply</span>Jacob Ryan <small class="text-muted">7 hours ago</small>
                                                </h6>
                                                <p class="m-b-15 m-t-15">
                                                    I am fine. You??
                                                </p>
                                            </li>
                                            <li class="active-feed">
                                                <div class="feed-user-img">
                                                    <img src="assets/img/user/user5.jpg" class="img-radius" alt="User-Profile-Image">
                                                </div>
                                                <h6>
                                                    <span class="feedLblStyle lblFileStyle">File</span>Sarah Smith <small class="text-muted">6 hours ago</small>
                                                </h6>
                                                <p class="m-b-15 m-t-15">
                                                    hii John, I have upload doc related to task.
                                                </p>
                                            </li>
                                            <li class="diactive-feed">
                                                <div class="feed-user-img">
                                                    <img src="assets/img/user/user6.jpg" class="img-radius" alt="User-Profile-Image">
                                                </div>
                                                <h6>
                                                    <span class="feedLblStyle lblTaskStyle">Task</span> Jalpa Joshi<small class="text-muted">5 hours ago</small>
                                                </h6>
                                                <p class="m-b-15 m-t-15">
                                                    Please do as specify. Let me know if you have any query.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- Activity feed end -->
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="card">
                                            <div class="panel-body">
                                                <h3>
                                                    Booked Trips
                                                </h3>
                                                <div class="progressbar-xs progress box-shadow-1">
                                                    <div class="progress-bar progress-bar-green width-60" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div><span class="text-small margin-top-10 full-width">14% higher than last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="panel-body">
                                                <h3>
                                                    Cancelled Trip
                                                </h3>
                                                <div class="progressbar-xs progress box-shadow-1">
                                                    <div class="progress-bar progress-bar-orange width-75" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div><span class="text-small margin-top-10 full-width">7% higher than last month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="panel-body">
                                                <h3>
                                                    New Users
                                                </h3>
                                                <div class="progressbar-xs progress box-shadow-1">
                                                    <div class="progress-bar progress-bar-purple width-40" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div><span class="text-small margin-top-10 full-width">34% higher than last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="panel-body">
                                                <h3>
                                                    Collection
                                                </h3>
                                                <div class="progressbar-xs progress box-shadow-1">
                                                    <div class="progress-bar progress-bar-cyan width-60" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div><span class="text-small margin-top-10 full-width">20% higher than last month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row1 clearfix top-report">
                                    <div class="col-12-1">
                                        <div class="card">
                                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                                </ol><!-- Wrapper for slides -->
                                                <div class="carousel-inner owl-carousel" role="listbox" id="owl-demo">
                                                    <div class="item active">
                                                        <img src="assets/img/slider/slider1.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <img src="assets/img/slider/slider2.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <img src="assets/img/slider/slider3.jpg" alt="">
                                                    </div>
                                                </div><!-- Controls --><a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="state-overview">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel purple">
                                        <div class="symbol">
                                            <i class="fa fa-users usr-clr"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="23">
                                                0
                                            </p>
                                            <p>
                                                Orders
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel deepPink-bgcolor">
                                        <div class="symbol">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="48">
                                                0
                                            </p>
                                            <p>
                                                New Users
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel orange">
                                        <div class="symbol">
                                            <i class="fa fa-heartbeat"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="14">
                                                0
                                            </p>
                                            <p>
                                                Sales
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel blue-bgcolor">
                                        <div class="symbol">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="3421">
                                                0
                                            </p><span>$</span>
                                            <p>
                                                Collectios
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end widget -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                <div class="blogThumb">
                                    <div class="thumb-center">
                                        <img class="img-responsive" alt="user" src="assets/img/blog/blog1.jpg">
                                    </div>
                                    <div class="white-box">
                                        <div class="text-muted">
                                            <span class="m-r-10">June 16</span><a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i>56</a>
                                        </div>
                                        <h3 class="m-t-20 m-b-20">
                                            White Woman Practices Yoga In
                                        </h3>
                                        <p>
                                            There is a new neighbor on Sesame Street. Her name is Julia
                                        </p><button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                <div class="blogThumb">
                                    <div class="thumb-center">
                                        <img class="img-responsive" alt="user" src="assets/img/blog/blog2.jpg">
                                    </div>
                                    <div class="white-box">
                                        <div class="text-muted">
                                            <span class="m-r-10">Feb 12</span><a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i>45</a>
                                        </div>
                                        <h3 class="m-t-20 m-b-20">
                                            How Much Radon is In Your Home?
                                        </h3>
                                        <p>
                                            There is a new neighbor on Sesame Street. Her name is Julia
                                        </p><button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                <div class="blogThumb">
                                    <div class="thumb-center">
                                        <img class="img-responsive" alt="user" src="assets/img/blog/blog3.jpg">
                                    </div>
                                    <div class="white-box">
                                        <div class="text-muted">
                                            <span class="m-r-10">Dec 17</span><a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i>79</a>
                                        </div>
                                        <h3 class="m-t-20 m-b-20">
                                            White Woman Practices Yoga In
                                        </h3>
                                        <p>
                                            There is a new neighbor on Sesame Street. Her name is Julia
                                        </p><button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                <div class="blogThumb">
                                    <div class="thumb-center">
                                        <img class="img-responsive" alt="user" src="assets/img/blog/blog4.jpg">
                                    </div>
                                    <div class="white-box">
                                        <div class="text-muted">
                                            <span class="m-r-10">April 23</span><a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i>654</a>
                                        </div>
                                        <h3 class="m-t-20 m-b-20">
                                            How Much Radon is In Your Home?
                                        </h3>
                                        <p>
                                            There is a new neighbor on Sesame Street. Her name is Julia
                                        </p><button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                                <div class="card circle">
                                    <div class="panel-body">
                                        <div class="m-t-20">
                                            <input type="text" class="knob" value="76" data-width="90" data-height="90" data-thickness="0.1" data-fgcolor="#fbbc4d" readonly>
                                        </div>
                                        <h4>
                                            Booked
                                        </h4>
                                        <p>
                                            <i class="material-icons text-success">trending_up</i>20% Increase
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                                <div class="card circle">
                                    <div class="panel-body">
                                        <div class="m-t-20">
                                            <input type="text" class="knob" value="86" data-width="90" data-height="90" data-thickness="0.1" data-fgcolor="#18d1ef" readonly>
                                        </div>
                                        <h4>
                                            Cancelled
                                        </h4>
                                        <p>
                                            <i class="material-icons text-danger">trending_down</i>41% Decrease
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                                <div class="card circle">
                                    <div class="panel-body">
                                        <div class="m-t-20">
                                            <input type="text" class="knob" value="86" data-width="90" data-height="90" data-thickness="0.1" data-fgcolor="#F44336" readonly>
                                        </div>
                                        <h4>
                                            New Users
                                        </h4>
                                        <p>
                                            <i class="material-icons text-success">trending_up</i>76% Increase
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                                <div class="card circle">
                                    <div class="panel-body">
                                        <div class="m-t-20">
                                            <input type="text" class="knob" value="86" data-width="90" data-height="90" data-thickness="0.1" data-fgcolor="#7836f4" readonly>
                                        </div>
                                        <h4>
                                            Collection
                                        </h4>
                                        <p>
                                            <i class="material-icons text-success">trending_up</i>37% Increase
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- start Payment Details -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Payment Details
                                        </header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a><a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a><a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table display product-overview mb-30" id="support_table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                No
                                                            </th>
                                                            <th>
                                                                Name
                                                            </th>
                                                            <th>
                                                                Assigned Agent
                                                            </th>
                                                            <th>
                                                                Date Of Admit
                                                            </th>
                                                            <th>
                                                                Fees
                                                            </th>
                                                            <th>
                                                                Branch
                                                            </th>
                                                            <th>
                                                                Edit
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                Jens Brincker
                                                            </td>
                                                            <td>
                                                                Kenny Josh
                                                            </td>
                                                            <td>
                                                                27/05/2016
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success">paid</span>
                                                            </td>
                                                            <td>
                                                                Mechanical
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                Mark Hay
                                                            </td>
                                                            <td>
                                                                Mark
                                                            </td>
                                                            <td>
                                                                26/05/2017
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning">unpaid</span>
                                                            </td>
                                                            <td>
                                                                Science
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                Anthony Davie
                                                            </td>
                                                            <td>
                                                                Cinnabar
                                                            </td>
                                                            <td>
                                                                21/05/2016
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success">paid</span>
                                                            </td>
                                                            <td>
                                                                Commerce
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                4
                                                            </td>
                                                            <td>
                                                                David Perry
                                                            </td>
                                                            <td>
                                                                Felix
                                                            </td>
                                                            <td>
                                                                20/04/2016
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-danger">unpaid</span>
                                                            </td>
                                                            <td>
                                                                Mechanical
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                5
                                                            </td>
                                                            <td>
                                                                Anthony Davie
                                                            </td>
                                                            <td>
                                                                Beryl
                                                            </td>
                                                            <td>
                                                                24/05/2016
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success">paid</span>
                                                            </td>
                                                            <td>
                                                                M.B.A.
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                6
                                                            </td>
                                                            <td>
                                                                Alan Gilchrist
                                                            </td>
                                                            <td>
                                                                Joshep
                                                            </td>
                                                            <td>
                                                                22/05/2016
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning">unpaid</span>
                                                            </td>
                                                            <td>
                                                                Science
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                7
                                                            </td>
                                                            <td>
                                                                Mark Hay
                                                            </td>
                                                            <td>
                                                                Jayesh
                                                            </td>
                                                            <td>
                                                                18/06/2016
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success">paid</span>
                                                            </td>
                                                            <td>
                                                                Commerce
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                8
                                                            </td>
                                                            <td>
                                                                Sue Woodger
                                                            </td>
                                                            <td>
                                                                Sharma
                                                            </td>
                                                            <td>
                                                                17/05/2016
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-danger">unpaid</span>
                                                            </td>
                                                            <td>
                                                                Mechanical
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end Payment Details -->
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="card bg-b-purple">
                                    <div class="text-white py-3 px-4">
                                        <h6 class="card-title text-white mb-0">
                                            Page View
                                        </h6>
                                        <p>
                                            7582
                                        </p>
                                        <div id="sparkline26"></div><small class="text-white">View Details</small>
                                    </div>
                                </div>
                                <div class="card bg-b-green">
                                    <div class="text-white py-3 px-4">
                                        <h6 class="card-title text-white mb-0">
                                            Earning
                                        </h6>
                                        <p>
                                            3669.25
                                        </p>
                                        <div id="sparkline27"></div><small class="text-white">View Details</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Notifications
                                        </header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a><a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a><a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <div class="noti-information notification-menu">
                                                <div class="notification-list mail-list not-list small-slimscroll-style">
                                                    <a href="javascript:;" class="single-mail"><span class="icon bg-b-green box-shadow-1"><i class="fa fa-user-o"></i></span><span class="text-purple">Abhay Jani</span>Booked a car<span class="notificationtime"><small>Just Now</small></span></a><a href="javascript:;" class="single-mail"><span class="icon bg-b-orange box-shadow-1"><i class="fa fa-envelope-o"></i></span><span class="text-purple">John Doe</span>Give review for ride<span class="notificationtime"><small>Just Now</small></span></a><a href="javascript:;" class="single-mail"><span class="icon bg-b-purple box-shadow-1"><i class="fa fa-check-square-o"></i></span>Success Message<span class="notificationtime"><small>2 Days Ago</small></span></a><a href="javascript:;" class="single-mail"><span class="icon bg-b-black box-shadow-1"><i class="fa fa-warning"></i></span>Database Overloaded Warning!<span class="notificationtime"><small>1 Week Ago</small></span></a><a href="javascript:;" class="single-mail"><span class="icon bg-b-pink box-shadow-1"><i class="fa fa-user-o"></i></span><span class="text-purple">Abhay Jani</span>Added you as friend<span class="notificationtime"><small>Just Now</small></span></a><a href="javascript:;" class="single-mail"><span class="icon bg-b-yellow box-shadow-1"><i class="fa fa-envelope-o"></i></span><span class="text-purple">John Doe</span>send you a mail<span class="notificationtime"><small>Just Now</small></span></a><a href="javascript:;" class="single-mail"><span class="icon bg-success box-shadow-1"><i class="fa fa-check-square-o"></i></span>Success Message<span class="notificationtime"><small>2 Days Ago</small></span></a><a href="javascript:;" class="single-mail"><span class="icon bg-warning box-shadow-1"><i class="fa fa-warning"></i></span><strong>Database Overloaded Warning!</strong><span class="notificationtime"><small>1 Week Ago</small></span></a><a href="javascript:;" class="single-mail"><span class="icon bg-danger box-shadow-1"><i class="fa fa-times"></i></span><strong>Server Error!</strong><span class="notificationtime"><small>10 Days Ago</small></span></a>
                                                </div>
                                                <div class="full-width text-center p-t-10">
                                                    <button type="button" class="btn purple btn-outline btn-circle margin-0">View All</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Employee List
                                        </header><button id="prfList" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="prfList">
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">assistant_photo</i>Action
                                            </li>
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">print</i>Another action
                                            </li>
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">favorite</i>Something else here
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <ul class="docListWindow small-slimscroll-style">
                                                <li>
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user1.jpg" alt="" width="40" height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Rajesh</a>-(M.Com, PHD)
                                                        </div>
                                                        <div>
                                                            <span class="clsAvailable">Available</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user2.jpg" alt="" width="40" height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Sarah Smith</a>-(M.A., B.Ed)
                                                        </div>
                                                        <div>
                                                            <span class="clsAvailable">Available</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user3.jpg" alt="" width="40" height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">John Deo</a>- (B.C.A., M.C.A.)
                                                        </div>
                                                        <div>
                                                            <span class="clsNotAvailable">Not Available</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user4.jpg" alt="" width="40" height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Jay Soni</a>- (B.E., M.E.)
                                                        </div>
                                                        <div>
                                                            <span class="clsOnLeave">On Leave</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user5.jpg" alt="" width="40" height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Jacob Ryan</a>- (M.Phil)
                                                        </div>
                                                        <div>
                                                            <span class="clsNotAvailable">Not Available</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user6.jpg" alt="" width="40" height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Megha Trivedi</a>- (M.S.W, PHD)
                                                        </div>
                                                        <div>
                                                            <span class="clsAvailable">Available</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user2.jpg" alt="" width="40" height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Sarah Smith</a>-(B.S.C, M.S.C.)
                                                        </div>
                                                        <div>
                                                            <span class="clsAvailable">Available</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user3.jpg" alt="" width="40" height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">John Deo</a>- (B.E., M.E.)
                                                        </div>
                                                        <div>
                                                            <span class="clsNotAvailable">Not Available</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user4.jpg" alt="" width="40" height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Jay Soni</a>- (B.C.A., M.C.A.)
                                                        </div>
                                                        <div>
                                                            <span class="clsOnLeave">On Leave</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="full-width text-center p-t-10">
                                                <a href="#" class="btn purple btn-outline btn-circle margin-0">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Sales
                                        </header>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 col-4 m-b-10">
                                                <span class="text-muted">This Week</span>
                                                <h5 class="m-b-0">
                                                    5,286
                                                </h5><span><i class="material-icons text-success">trending_up</i> +28%</span>
                                            </div>
                                            <div class="col-sm-4 col-4 m-b-10">
                                                <span class="text-muted">This Month</span>
                                                <h5 class="m-b-0">
                                                    421
                                                </h5><span><i class="material-icons text-danger">trending_down</i> -9%</span>
                                            </div>
                                            <div class="col-sm-4 col-4 m-b-10">
                                                <span class="text-muted">Average</span>
                                                <h5 class="m-b-0">
                                                    1081
                                                </h5><span><i class="material-icons text-success">trending_up</i> +7%</span>
                                            </div>
                                        </div>
                                        <div id="sparkline28"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Earning
                                        </header>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 col-4 m-b-10">
                                                <span class="text-muted">This Week</span>
                                                <h5 class="m-b-0">
                                                    1,389
                                                </h5><span><i class="material-icons text-success">trending_up</i> +21%</span>
                                            </div>
                                            <div class="col-sm-4 col-4 m-b-10">
                                                <span class="text-muted">This Month</span>
                                                <h5 class="m-b-0">
                                                    591
                                                </h5><span><i class="material-icons text-danger">trending_down</i> -6.3%</span>
                                            </div>
                                            <div class="col-sm-4 col-4 m-b-10">
                                                <span class="text-muted">Average</span>
                                                <h5 class="m-b-0">
                                                    781
                                                </h5><span><i class="material-icons text-success">trending_up</i> +6%</span>
                                            </div>
                                        </div>
                                        <div id="sparkline29"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Todo List
                                        </header><button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button">
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">assistant_photo</i>Action
                                            </li>
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">print</i>Another action
                                            </li>
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">favorite</i>Something else here
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <ul class="to-do-list ui-sortable" id="sortable-todo">
                                            <li class="clearfix">
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="None" id="todo-check1"><label for="todo-check1"></label>
                                                </div>
                                                <p class="todo-title">
                                                    Add fees details in system
                                                </p>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="None" id="todo-check2"><label for="todo-check2"></label>
                                                </div>
                                                <p class="todo-title">
                                                    Announcement for holiday
                                                </p>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="None" id="todo-check3"><label for="todo-check3"></label>
                                                </div>
                                                <p class="todo-title">
                                                    call bus driver
                                                </p>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="None" id="todo-check4"><label for="todo-check4"></label>
                                                </div>
                                                <p class="todo-title">
                                                    School picnic
                                                </p>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="None" id="todo-check5"><label for="todo-check5"></label>
                                                </div>
                                                <p class="todo-title">
                                                    Exam time table generate
                                                </p>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="None" id="todo-check6"><label for="todo-check6"></label>
                                                </div>
                                                <p class="todo-title">
                                                    Add fees details in system
                                                </p>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            CHAT
                                        </header><button id="chatlist" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="chatlist">
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">assistant_photo</i>Action
                                            </li>
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">print</i>Another action
                                            </li>
                                            <li class="mdl-menu__item">
                                                <i class="material-icons">favorite</i>Something else here
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <ul class="chat nice-chat small-slimscroll-style">
                                                <li class="in">
                                                    <img src="assets/img/user/user1.jpg" class="avatar" alt="">
                                                    <div class="message">
                                                        <span class="arrow"></span><a class="name" href="#">Jone Doe</a><span class="datetime">at Mar 12, 2014 6:12</span><span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span>
                                                    </div>
                                                </li>
                                                <li class="out">
                                                    <img src="assets/img/dp.jpg" class="avatar" alt="">
                                                    <div class="message">
                                                        <span class="arrow"></span><a class="name" href="#">Kiran Patel</a><span class="datetime">at Mar 12, 2014 6:13</span><span class="body">sed diam nonummy nibh euismod tincidunt ut</span>
                                                    </div>
                                                </li>
                                                <li class="in">
                                                    <img src="assets/img/user/user1.jpg" class="avatar" alt="">
                                                    <div class="message">
                                                        <span class="arrow"></span><a class="name" href="#">Jone Doe</a><span class="datetime">at Mar 12, 2014 6:12</span><span class="body">aoreet dolore magna aliquam erat volutpat.</span>
                                                    </div>
                                                </li>
                                                <li class="out">
                                                    <img src="assets/img/dp.jpg" class="avatar" alt="">
                                                    <div class="message">
                                                        <span class="arrow"></span><a class="name" href="#">Kiran Patel</a><span class="datetime">at Mar 12, 2014 6:13</span><span class="body">sed diam nonummy nibh euismod tincidunt ut</span>
                                                    </div>
                                                </li>
                                                <li class="in">
                                                    <img src="assets/img/user/user1.jpg" class="avatar" alt="">
                                                    <div class="message">
                                                        <span class="arrow"></span><a class="name" href="#">Jone Doe</a><span class="datetime">at Mar 12, 2014 6:12</span><span class="body">aoreet dolore magna aliquam erat volutpat.</span>
                                                    </div>
                                                </li>
                                                <li class="out">
                                                    <img src="assets/img/dp.jpg" class="avatar" alt="">
                                                    <div class="message">
                                                        <span class="arrow"></span><a class="name" href="#">Kiran Patel</a><span class="datetime">at Mar 12, 2014 6:13</span><span class="body">sed diam nonummy nibh</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="box-footer chat-box-submit">
                                                <form action="#" method="post">
                                                    <div class="input-group">
                                                        <input type="text" name="message" placeholder="Enter your ToDo List" class="form-control"><span class="input-group-btn"><button type="submit" class="btn btn-warning btn-flat"><span class="input-group-btn"><i class="fa fa-arrow-right"></i></span></button></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="white-box border-gray">
                                    <div class="user-bg">
                                        <div class="overlay-box">
                                            <div class="user-content">
                                                <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="assets/img/dp.jpg"></a>
                                                <h4 class="text-white">
                                                    Kiran Patel
                                                </h4>
                                                <h5 class="text-white">
                                                    info@example.com
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-btm-box">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 text-center">
                                                <p class="text-purple">
                                                    <i class="fa fa-facebook"></i>
                                                </p>
                                                <h1>
                                                    467
                                                </h1>
                                            </div>
                                            <div class="col-md-4 col-sm-4 text-center">
                                                <p class="text-success">
                                                    <i class="fa fa-twitter"></i>
                                                </p>
                                                <h1>
                                                    234
                                                </h1>
                                            </div>
                                            <div class="col-md-4 col-sm-4 text-center">
                                                <p class="text-danger">
                                                    <i class="fa fa-instagram"></i>
                                                </p>
                                                <h1>
                                                    686
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-b-0 text-center">
                                            <div class="stat-item">
                                                <h6>
                                                    Contact info
                                                </h6><b><i class="ti-mobile"></i>123-456-7890</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="white-box border-gray">
                                    <h3 class="box-title">
                                        <small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i>34% High then last month</small>Site Traffic
                                    </h3>
                                    <div class="stats-row">
                                        <div class="stat-item">
                                            <h6>
                                                Overall Growth
                                            </h6><b>40.40%</b>
                                        </div>
                                        <div class="stat-item">
                                            <h6>
                                                Montly
                                            </h6><b>55.40%</b>
                                        </div>
                                        <div class="stat-item">
                                            <h6>
                                                Day
                                            </h6><b>4.50%</b>
                                        </div>
                                    </div>
                                    <div id="sparkline13"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="white-box border-gray">
                                    <h3 class="box-title">
                                        <small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i>34% Low then last month</small>Site Traffic
                                    </h3>
                                    <div class="stats-row">
                                        <div class="stat-item">
                                            <h6>
                                                Overall Growth
                                            </h6><b>40.40%</b>
                                        </div>
                                        <div class="stat-item">
                                            <h6>
                                                Montly
                                            </h6><b>55.40%</b>
                                        </div>
                                        <div class="stat-item">
                                            <h6>
                                                Day
                                            </h6><b>4.50%</b>
                                        </div>
                                    </div>
                                    <div id="sparkline15"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="white-box border-gray">
                                    <h3 class="box-title">
                                        <small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i>18% High then last month</small>Site Traffic
                                    </h3>
                                    <div class="stats-row">
                                        <div class="stat-item">
                                            <h6>
                                                Overall Growth
                                            </h6><b>40.40%</b>
                                        </div>
                                        <div class="stat-item">
                                            <h6>
                                                Montly
                                            </h6><b>55.40%</b>
                                        </div>
                                        <div class="stat-item">
                                            <h6>
                                                Day
                                            </h6><b>4.50%</b>
                                        </div>
                                    </div>
                                    <div id="sparkline14"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-12 col-sm-6">
                                <div class="analysis-box m-b-0 bg-purple">
                                    <h3 class="text-white box-title">
                                        Analysis <span class="pull-right"><i class="fa fa-caret-up"></i>345</span>
                                    </h3>
                                    <div id="sparkline7">
                                        <canvas width="267" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12 col-sm-6">
                                <div class="analysis-box m-b-0 bg-danger">
                                    <h3 class="text-white box-title">
                                        Sales <span class="pull-right"><i class="fa fa-caret-up"></i>643</span>
                                    </h3>
                                    <div id="sparkline12">
                                        <canvas width="267" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12 col-sm-6">
                                <div class="analysis-box m-b-0 bg-blue">
                                    <h3 class="text-white box-title">
                                        Site visits <span class="pull-right"><i class="fa fa-caret-up"></i>765</span>
                                    </h3>
                                    <div id="sparkline9">
                                        <canvas width="267" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12 col-sm-6">
                                <div class="analysis-box m-b-0 bg-success">
                                    <h3 class="text-white box-title">
                                        Earning<span class="pull-right"><i class="fa fa-caret-up"></i>323</span>
                                    </h3>
                                    <div id="sparkline16" class="text-center">
                                        <canvas width="215" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end page content --><!-- start chat sidebar -->
                <div class="chat-sidebar-container" data-close-on-body-click="false">
                    <div class="chat-sidebar">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme</a>
                            </li>
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel" id="quick_sidebar_tab_1">
                                <div class="slimscroll-style">
                                    <div class="theme-light-dark">
                                        <h6>
                                            Sidebar Theme
                                        </h6><button type="button" data-theme="white" class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light Sidebar</button><button type="button" data-theme="dark" class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark Sidebar</button>
                                    </div>
                                    <div class="theme-light-dark">
                                        <h6>
                                            Sidebar Color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="complete">
                                                <div class="theme-color sidebar-theme">
                                                    <a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6>
                                            Header Brand color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="theme-option">
                                                <div class="theme-color logo-theme">
                                                    <a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6>
                                            Header color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="theme-option">
                                                <div class="theme-color header-theme">
                                                    <a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- Start Setting Panel -->
                            <div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_2">
                                <div class="chat-sidebar-settings-list slimscroll-style">
                                    <div class="chat-header">
                                        <h5 class="list-heading">
                                            Layout Settings
                                        </h5>
                                    </div>
                                    <div class="chatpane inner-content">
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Sidebar Position
                                                </div>
                                                <div class="setting-set">
                                                    <select class="sidebar-pos-option form-control input-inline input-sm input-small">
                                                        <option value="left" selected="selected">
                                                            Left
                                                        </option>
                                                        <option value="right">
                                                            Right
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Header
                                                </div>
                                                <div class="setting-set">
                                                    <select class="page-header-option form-control input-inline input-sm input-small">
                                                        <option value="fixed" selected="selected">
                                                            Fixed
                                                        </option>
                                                        <option value="default">
                                                            Default
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Sidebar Menu
                                                </div>
                                                <div class="setting-set">
                                                    <select class="sidebar-menu-option form-control input-inline input-sm input-small">
                                                        <option value="accordion" selected="selected">
                                                            Accordion
                                                        </option>
                                                        <option value="hover">
                                                            Hover
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Footer
                                                </div>
                                                <div class="setting-set">
                                                    <select class="page-footer-option form-control input-inline input-sm input-small">
                                                        <option value="fixed">
                                                            Fixed
                                                        </option>
                                                        <option value="default" selected="selected">
                                                            Default
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">
                                                Account Settings
                                            </h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Notifications
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1"><input type="checkbox" id="switch-1" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Show Online
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7"><input type="checkbox" id="switch-7" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Status
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2"><input type="checkbox" id="switch-2" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    2 Steps Verification
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3"><input type="checkbox" id="switch-3" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">
                                                General Settings
                                            </h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Location
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4"><input type="checkbox" id="switch-4" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Save Histry
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5"><input type="checkbox" id="switch-5" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Auto Updates
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6"><input type="checkbox" id="switch-6" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end chat sidebar -->
            </div><!-- end page container --><!-- start footer -->
            <div class="page-footer">
                <div class="page-footer-inner">
                    2018 © ECab Taxi Admin Template By <a href="http://www.dedemao.com/" target="_top" class="makerCss">Redstartheme</a>
                </div>
                <div class="scroll-to-top">
                    <i class="material-icons">eject</i>
                </div>
            </div><!-- end footer -->
        </div>
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <script src="assets/plugins/popper/popper.min.js"></script>
        <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/moment/moment.min.js"></script>
        <script src="assets/plugins/counterup/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script><!-- owl carousel -->
        <script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
        <script src="assets/js/pages/owl-carousel/owl_data.js"></script><!-- Common js-->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/layout.js"></script>
        <script src="assets/js/theme-color.js"></script><!-- Material -->
        <script src="assets/plugins/material/material.min.js"></script><!-- animation -->
        <script src="assets/js/pages/ui/animations.js"></script><!-- sparkline -->
        <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/js/pages/sparkline/sparkline-data.js"></script><!-- summernote -->
        <script src="assets/plugins/summernote/summernote.min.js"></script>
        <script src="assets/js/pages/summernote/summernote-data.js"></script><!-- knob -->'
        <script src="assets/plugins/jQuery-Knob/dist/jquery.knob.min.js"></script>
        <script src="assets/js/pages/chart/knob/knob_chart_data.js"></script>
    </body>
</html>