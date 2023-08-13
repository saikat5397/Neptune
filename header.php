<?php
 session_start();
 
 if (!isset($_SESSION['s_email'])) {
    header('location: 404.php');
 }
 $db_connect=mysqli_connect('localhost','root','','nuptune');
 $id=$_SESSION['s_id'];
 $profil_photo_query="SELECT profile_photo FROM users WHERE id='$id';";
 $profile_photo_finel=mysqli_query( $db_connect,$profil_photo_query);
 $profile_photo_assoc=mysqli_fetch_assoc($profile_photo_finel);
 $profile_photo=$profile_photo_assoc['profile_photo'];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />

 
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="upload\profile_photo/<?= $profile_photo;?>">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?= $_SESSION['s_name']?><br><span class="user-state-info"><?=$_SESSION['s_email']?></span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="active-page">
                        <a href="dashboard.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="active-page">
                        <a href="users.php" class="active"><i class="material-icons-two-tone">people_alt</i>Users</a>
                    </li>
                    <li class="active-page">
                        <a href="profile.php" class="active"><i class="material-icons-two-tone">people_alt</i>Profile</a>
                    </li>
                    <li class="active-page">
                        <a href="calcullator.php" class="active"><i class="material-icons-two-tone">calculate</i>calcullator</a>
                    </li>
       
                    <li>
                        <a href="#"><i class="material-icons-two-tone">card_giftcard</i>Components<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="components-accordions.html">Accordions</a>
                            </li>
                            <li>
                                <a href="components-block-ui.html">Block UI</a>
                            </li>
                            <li>
                                <a href="components-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="components-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="components-countdown.html">Countdown</a>
                            </li>
                            <li>
                                <a href="components-lightbox.html">Lightbox</a>
                            </li>
                            <li>
                                <a href="components-lists.html">Lists</a>
                            </li>
                            <li>
                                <a href="components-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="components-tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="components-session-timeout.html">Session Timeout</a>
                            </li>
                        </ul>
                    </li>
                   
                  
                
                    <li class="active-page">
                        <a href="#"><i class="material-icons-two-tone">color_lens</i>Icon<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a href="https://fonts.google.com/icons" class="active">Icons</a>
                            </li>
                        </ul>
                    </li>
                    
                 
                    
                      
                  
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
            
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                              
                              
                            <li> <a href="../login.php" class="btn btn-danger">Log out</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">