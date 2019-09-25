<!DOCTYPE html>
<html>
<head>
	<title></title>
<title>Eqs </title>

<?php include'header.php'; ?>
</head>
<body>
<div class="row   bg-light">
		
		<div class="img col-md-2 "><img src="pic/39.jpg" class="img-fluid " ></div>
        <div class="more col-md-7 text-center">
        <p class="h4 text-dark pt-3">MY KUDRATS FAVOURITES</p>
        <p class="small"><br>Chapters : # <br>Date : # # 2019</p> </div>
                
        	
        <div class="author col-md-3">
        	<h4 class="">Author</h4>
        	<div class="desc col-md-7 float-left small">
        		name:xon cypher <br>
        		stories:# <br>
        		last activity: # days ago <br>
                 <button class="btn btn-dark mt-2 btn-sm btn-block fa fa-thumbs-up"> follow</button>
        		
        	</div>

        	<div class="pic col-md-4 float-left"><img src="pic/person_1.jpg" class="rounded-circle img-fluid" height="100" >
        		&nbsp;<a href="" class="small text-info pl-3">more</a>
            
        	</div>
            </div>
			
		</div>





<div class="row mt-5 justify-content-center">
		 <div class="container col-md-12  ">
				<span class="h6 small text-center"><i>click the chapter number to read</i></span><br>
                   <?php 
                    $a=0;
                    while ( $a <= 100) {
                    	# code...
                    	 $a++;
                    	 echo "<a href='read.php'><p class='btn btn-dark btn-sm ml-3 mt-3 col-md-1'>chapter  ".$a."</p></a>";
                    }

                    ?>



				


			</div>
			
		</div>
	













			</body>
			</html>