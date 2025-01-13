<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-bar"><span
                    class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                    class="icon-bar"></span><span class="icon-bar"></span></button>
            <a href="../index.php">
                <div class="logo-container">
                    <div class="logo"><img src="../assets/admin/assets/img/logo.png" alt="eduflow"></div>
                </div><!--./logo-container--></a></div><!--./navbar-header-->
        <div class="collapse navbar-collapse" id="navigation-bar">
            <ul class="social-network header-banner">
                <li><a href="https://www.facebook.com/Smart-School-1471650676181486/" target="_blank"><i
                            class="fa fa-facebook-square"></i></a></li>
                <li><a href="https://twitter.com/SmartSchoolLive" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/@QDOCS/videos" target="_blank"><i class="fa fa-youtube"></i></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'active';} ?>"><a href="../index.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'feature.php'){echo 'active';} ?>"><a href="../feature.php"><i class="fa fa-server fasize2"></i> Features</a></li>
                <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'demo.php'){echo 'active';} ?>"><a href="https://demo.eduflow.com.ng" target="_blank"><i class="material-icons">computer</i> Demo</a></li>
                <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'how-it-work.php'){echo 'active';} ?>"><a href="../how-it-work.php"><i class="fa fa-lightbulb-o"></i> How it Works</a></li>
                <li class="dropdown <?php if(basename($_SERVER['PHP_SELF']) == 'articles.php' || basename($_SERVER['PHP_SELF']) == 'faq.php'){echo 'active';} ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="material-icons">description</i> Help & Documentation</a>
                    <ul class="dropdown-menu dropdown-with-icons">
                        <li class=""><a href="../articles.php"><i class="fa fa-book fasize2"></i> Articles</a></li>

                        <li class=""><a href="../faq.php"><i class="fa fa-question-circle fasize2"></i> FAQ</a></li>
                        <!--                        <li><a href="docs/index.html" target="_blank"><i-->
                        <!--                                        class="material-icons fasize2">assignment</i>User Documentation</a></li>-->
                        <li><a href="https://www.youtube.com/@QDOCS/videos" target="_blank"><i
                                    class="fa fa-play-circle fasize2"></i> Video Tutorial</a></li>

                        <li><a href="category/known-issues.html"><i class="material-icons fasize2">bug_report</i> Known Issues</a></li>
                    </ul>
                </li>
                <li><a href="https://support.qdocs.net/" target="_blank"><i class="fa fa-life-ring fasize2"></i> Support</a>
                </li>
                <li class="buylr">
                    <a href="tel:+2348135705245" class="btn btn-success btn-sm btn-round">
                        <i class="material-icons">call</i> Contact Us
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav><!--End Navbar-->
