 <header>
                    <div class="top-head ml-lg-auto text-center">
                        <div class="row">

                            <div class="col-md-4">
                                <span>Welcome Back!</span>
                            </div>
<?php

 if($_SESSION['crmsuid']==0){?>

                            <div class="col-md-3 sign-btn">
                                <a href="user/login.php" data-target="#exampleModalCenter" style="font-weight: bolder;">
                                    <i class="fas fa-lock"></i> Sign In</a>
                            </div>
                            <div class="col-md-3 sign-btn">
                                <a href="user/user-signup.php" data-target="#exampleModalCenter2" style="font-weight: bolder;">
                                    <i class="far fa-user"></i> Register</a>
                            </div>
                           <?php } else {?>

                            <div class="col-md-5 sign-btn">
                                <a href="user/user-signup.php" data-target="#exampleModalCenter2" style="font-weight: bolder;">
     <i class="far fa-user"></i> <?php echo $_SESSION['fname'];?></a> | <a href="user/logout.php">Logout </a>
                            </div>
                           <?php } ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo">
                            <h1>
                                <a class="navbar-brand" href="index.php">
                                    <i class="fab fa-codepen"></i>Online Campus Recruitement</a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars"></i>
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php" style="font-weight: bolder;">Home
                                       
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php" style="font-weight: bolder;">About Us</a>
                                </li>
<?php

 if($_SESSION['crmsuid']==0){?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-weight: bolder;">
                                        Candidates
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="user/login.php">Sign In</a>
                                        <a class="dropdown-item" href="user/user-signup.php" title="">Sign Up</a>
                                       
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin/login.php" style="font-weight: bolder;">Admin</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bolder;">
                                        Employers
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="company/login.php"> Sign In</a>
                                        <a class="dropdown-item" href="company/comp-signup.php">Sign Up</a>
                                       
                                    </div>
                                </li>

                            <?php } else {?>
  <li class="nav-item active">
                                    <a class="nav-link" href="user/dashboard.php">User Dashboard</a>
                                </li>
                            <?php } ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="jobs-listed.php" style="font-weight: bolder;"> Vacancy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php" style="font-weight: bolder;">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </header>