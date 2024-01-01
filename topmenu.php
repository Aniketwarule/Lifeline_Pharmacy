  <!--header-->
  <section class="w3l-header">
    <header id="site-header" class="">
      <section class="w3l-top-header py-3">
        <div class="container">
          <div class="d-grid main-top">
            <div class="top-header-left">
              <ul class="info-top-gridshny">
                <li class="info-grid">
                  <div class="info-icon"><span class="fa fa-clock-o"></span></div>
                  <div class="info-text">
                    <p>Monday - Saturday 08:00 - 20:00</p>
                    <p>Sunday - CLOSED</p>
                  </div>

                </li>
                <li class="info-grid">
                  <div class="info-icon"><span class="fa fa-mobile"></span></div>
                  <div class="info-text">
                    <p>+911234567890 </p>
                    <p>+911234567890</p>
                  </div>

                </li>
                <li class="info-grid">
                  <div class="info-icon"><span class="fa fa-map-marker"></span></div>
                  <div class="info-text">
                    <p>Aurangabad, </p>
                    <p>Maharashtra, India.</p>

                  </div>

                </li>
              </ul>
            </div>
            <div class="top-header-right text-lg-right">
              <ul>
                <li>
                  <a href="#facebook"><span class="fa fa-facebook"></span></a>
                </li>
                <li>
                  <a href="#twitter"><span class="fa fa-twitter"></span></a>
                </li>
                <li><a href="#instagram" class="instagram mr-0"><span class="fa fa-instagram"></span></a></li>

              </ul>
            </div>
          </div>
        </div>
      </section>
      <div class="header-2hny py-3">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark stroke">
           
    <a class="navbar-brand" href="#index.php">
        <img src="assets/images/logo_lifeline.png" alt="logo" title="Lifeline" style="height:35px;" />
		Lifeline Pharmacy
    </a> 
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
            </button>

				

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              
			  <ul class="navbar-nav mx-lg-auto">
			  
				<?php
					$page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
					
					if($page=="index")
					{
						echo "<li class='nav-item active'><a class='nav-link' href='index.php'>Home <span class='sr-only'>(current)</span></a></li>";
					}
					else
					{
						echo "<li class='nav-item'><a class='nav-link' href='index.php'>Home <span class='sr-only'>(current)</span></a></li>";
					}
					
					if($page=="about")
					{
						echo "<li class='nav-item active'><a class='nav-link' href='about.php'>About</a></li>";
					}
					else
					{
						echo "<li class='nav-item'><a class='nav-link' href='about.php'>About</a></li>";
					}
					
					if($page=="track")
					{
						echo "<li class='nav-item active'><a class='nav-link' href='#'>Track Order</a></li>";
					}
					else
					{
						echo "<li class='nav-item'><a class='nav-link' href='#'>Track Order</a></li>";
					}
					
					if($page=="contact")
					{
						echo "<li class='nav-item active'><a class='nav-link' href='contact.php'>Contact Us</a></li>";
					}
					else
					{
						echo "<li class='nav-item'><a class='nav-link' href='contact.php'>Contact Us</a></li>";
					}
				?>

			  </ul>
			  
			  
			  
			  
              <ul class="navbar-nav search-right mt-lg-0 mt-2">
                <li class="nav-item"><a href="#" class="free-con btn btn-style btn-secondary d-block">
				Order Online</a>
                </li>
              </ul>              
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
              <nav class="navigation">
                <div class="theme-switch-wrapper">
                  <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox">
                    <div class="mode-container py-1">
                      <i class="gg-sun"></i>
                      <i class="gg-moon"></i>
                    </div>
                  </label>
                </div>
              </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
          </nav>
        </div>
      </div>
    </header>
    <!--/header-->
  </section>