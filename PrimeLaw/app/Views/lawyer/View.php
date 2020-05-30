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
    


<div class="col-sm-12">
          <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
           View/Delete Your Account
            </h3>
            <nav aria-label="breadcrumb">
                
            </nav>
          </div>
                  <div class="table-responsive">
                  <table>
                  <tbody>

                  <?php
                foreach($lawyers as $record){?>
               
                <tr>
                <td class="py-1">Full Name</td>
                <td><?php echo $record->first_name; ?>&nbsp<?php echo $record->last_name; ?></td>    
              </tr>

              <tr>
                <td class="py-1">Address </td>
                <td><?php echo $record->no; ?>,<?php echo $record->street; ?>,<?php echo $record->city; ?></td>  
              </tr>

              <tr>
                <td class="py-1">Date Of Birth</td>
                <td><?php echo $record->dob; ?></td>
              </tr>

              <tr>
                <td class="py-1">NIC</td>
                <td><?php echo $record->nic; ?></td>
              </tr>

              <tr>
                <td class="py-1">Gender</td>
                <td><?php echo $record->gender; ?></td>
              </tr>

              
              <tr>
                <td class="py-1">Email</td>
                <td><?php echo $record->email; ?></td>
              </tr>

              <tr>
                <td class="py-1">Contact Number</td>
                <td><?php echo $record->phone; ?></td>
              </tr>

              <tr>
                <td class="py-1">Registration Number</td>
                <td><?php echo $record->regno; ?></td>
              </tr>

              <tr>
                <td class="py-1">User Name</td>
                <td><?php echo $record->user_name; ?></td>
              </tr>

              <tr>
                <td class="py-1">Details</td>
                <td><?php echo $record->details; ?></td>
              </tr>
              <tr>
              <td><button type="submit" class="btn btn-success" ><a href="/update">Update</a></button></td>
         <td> <button type="submit" class="btn btn-success" ><a href="/deleteuser">Delete</button></td></tr>
           <?php
          }?>
         
              </tbody>
          </table>
        </div>
            <br> <br> 


  
     <div>
          
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