
    
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="" class="logo"><b>prime<span>Law</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
        <?php
					$session = session()->start();
					if(isset($_SESSION['id'])){
						echo "<li><a class='logout' href='/logout'><i class='fa fa-user'></i> Log Out</a></li>";
					}
                    else{
						echo "<li><a href='/register'><i class='fa fa-user'></i> Sign Up</a></li>
							  <li><a href='/login'><i class='fa fa-lock'></i> Log In</a></li>";	
					}
				
				?>
         
        </ul>
      </div>
    </header>
    <!--header end-->
    
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">S.P.L.Herasinghe</h5>
          <li class="mt">
          <a href="#">
              <i class="fa fa-home"></i>
              <span>Home</span>
              </a>
          </li>
         
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Lawyer</span>
              </a>
            <ul class="sub">
              <li class="active"><a href="/viewuser">Account View/Delete</a></li>
              <li><a href="/update">Account Update</a></li>  
            </ul>
          </li>

         
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->