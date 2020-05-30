<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Master Lawyer</title>

  
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    


      <style>
              td{

              color: black;
              font-weight: bold;

           }
		   .solid {border-style: solid;}

          h3{
		     padding:15px;
			 margin-left:300px;
		  
		  }
		   #just {
               text-align: justify;
               text-justify: inter-word;
			   padding-top:15px;
               }
			   
			   #Number{
			       margin-left:200px;
			   
			   }
			   
			   #pcontent,#pcontent2{
			      padding-left:15px;
				  padding-right:15px;
			   
			   }
			   
			    h4{
			      padding-left:40px;
				  
			   
			   }
			   hr{
			    border: 1px solid black;
			   
			   }
			   h5{
			      font-weight:bold;
				  padding-left:15px;
				  padding-right:15px;
			   }
			   
			<!--.print{
			     font-family: sans-serif;
				 margin-left:810px;
			 
			 }-->
      </style>
	  
	  
 
</head>

<body>
  <section id="container">
  <?=$this->include('layouts/sidebar')?>
   
   <!--main content start-->
   <section id="main-content">
      <section class="wrapper site-min-height">      
		  
        <div class="row mt">
          <div class="col-lg-12">
          
			<div class="col-lg-10 " id="just" >
      
      <div id="wrapper">       
      <form class="form-horizontal" method="post" action="/updateuser">
                        
         
						
              <div class="form-group">
							<label>First Name</label>
              <input type="text" class="form-input" name="first_name"/>
              </div>

						  <div class="form-group">
							<label>Last Name</label>
              <input type="text" class="form-input" name="last_name"/>
              </div>
              
              <div class="form-group">
							<label>Address line 1</label>
              <input type="text" class="form-input" name="no" placeholder="Home number"/>
              </div>
              
              <div class="form-group">
							<label>Address Line 2</label>
              <input type="text" class="form-input" name="street" placeholder="Street"/>
              </div>
                        
              <div class="form-group">
							<label>Address Line 3</label>
              <input type="text" class="form-input" name="city" placeholder="City"/>
              </div>
                        
              <div class="form-group">
							<label>NIC</label>
              <input type="text" class="form-input" name="nic"/>
              </div>
                        

						  <div class="form-group">
						  <label>E-mail</label>
              <input type="email" class="form-input" name="email" placeholder="example@gmail.com"/>
              </div>
                        
              <div class="form-group">
							<label>Contact Number</label>
              <input type="text" class="form-input" name="phone"/>
              </div>
        

						  <div class="form-group">
							<label>Description</label>
              <input type="textarea" class="form-input" name="details"/>
						  </div>

              <br/>
              <div class="form-group">
              <input type="submit" name="submit" class="form-submit" value="Update"/>
              </div>
                
      </form>
                  
                </div>
           
  
  </div>
     
          </div>
        </div>
      
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

    </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <script src="css/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="css/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="css/jquery.dcjqaccordion.2.7.js"></script>
  <script src="css/jquery.scrollTo.min.js"></script>
  <script src="css/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="css/common-scripts.js"></script>
  <!--script for this page-->

  </body>

</html>