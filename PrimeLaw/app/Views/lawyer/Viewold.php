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


		<h2><li><a href='/deleteuser'><i class='fa fa-user'></i> delete</a></li></h2>	
<?php 
               foreach($lawyers as $record){
                echo "
                <div class='job-list-content'>
                    <h4>$record->first_name</h4>
                    <h4>$record->last_name</h4>
                    <h4>$record->no</h4>
                    <h4>$record->street</h4>
                    <h4>$record->city</h4>

                    <p>The SEO/SEM Specialist will work with industry leaders and top retailers to define and deliver best practices through innovative SEO methodologies.</p>
                </div>
               ";
               }        
            ?>

</div>

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