
<?php
 if(isset($_GET['logout'])){
                session_destroy();
                header('location:index.php');
                exit();
        }
?>
<header id="fh5co-header-section" class="sticky-banner">
    <div class="container">
        <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"></a>
            <h1 id="fh5co-logo">
                <a href="index.php">
                    <i class = icon-logo-l></i>
                    E-Launch
                </a>
            </h1>
            <!-- START #fh5co-menu-wrap -->
            <nav id="fh5co-menu-wrap" role="navigation">
                <ul class="sf-menu" id="fh5co-primary-menu">
                    
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'index.php'){
                            echo'<li class="active">
                                    <a href="index.php">Home</a>
                                </li>';
                        }else echo'<li class="">
                                        <a href="index.php">Home</a>
                                    </li>';
                    ?>
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'launch.php'){
                            echo'<li class="active">
                                    <a href="launch.php">Launches</a>
                                </li>';
                        }else echo'<li class="">
                                        <a href="launch.php">Launches</a>
                                    </li>';
                    ?>
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'navigation.php'){
                            echo'<li class="active">
                                    <a href="navigation.php">Navigation</a>
                                </li>';
                        }else echo'<li class="">
                                        <a href="navigation.php">Navigation</a>
                                    </li>';
                    ?>
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'giveaway.php'){
                            echo'<li class="active">
                                    <a href="giveaway.php">Giveaway</a>
                                </li>';
                        }else echo'<li class="">
                                        <a href="giveaway.php">Giveaway</a>
                                    </li>';
                    ?>
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'contact.php'){
                            echo'<li class="active">
                                    <a href="contact.php">Contact</a>
                                </li>';
                        }else echo'<li class="">
                                        <a href="contact.php">Contact</a>
                                    </li>';
                    ?>
                    <?php
                      if(basename($_SERVER['PHP_SELF']) == 'profile.php'){
                            echo'<li class="active">
                                    <a href="profile.php">Profile</a>
                                </li>';
                        }else echo'<li class="">
                                        <a href="profile.php">Profile</a>
                                    </li>';
                    ?>
                </ul>
            </nav>
        </div>
    </div>
    <div class="login">
        
    <?php
        if(isset($_SESSION['email'])){
        
            echo "<a href='index.php?logout=1'> <i class='far fa-user'></i>logout</a>";
        }
        else{
            echo "<a href='login.php'> <i class='far fa-user'></i>login/signup</a>";
        }
    ?>
    </div>
    
</header>