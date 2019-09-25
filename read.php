<!DOCTYPE html>
<html>
<head>
	<title></title>
<title>Eqs </title>
<script type="text/javascript" src="jquery.js"></script>

<?php include'header.php'; ?>
</head>
<body class="body">
<p class="row bg-light ">
<span class="btn-group">
  <button id="det" class="btn btn-sm pl-5 "><i class="fa fa-eye"></i>Details</button>
  <button type="button" class="btn btn-sm" id="on" ><i class="fa fa-moon-o"></i>light OFF</button>
  <button type="button" class="btn btn-sm" id="off"><i class="fa fa-adjust-o"></i> ON</button>
  <button type="button" class="btn btn-sm" id="read"><i class="fa fa-columns"></i>Read mode</button>
<button type="button" class="btn btn-sm" id="read"><i class="fa fa-thumbs-o-up"></i>Like</button>



</span></p>



<div class="row details bg-light" id="datails" style="display:none;">
		
		<div class="img col-md-2 "><img src="pic/39.jpg" class="img-fluid " ></div>
        <div class="more col-md-7 text-center">
        <p class="h4 text-dark pt-3">MY KUDRATS FAVOURITES</p>
        <p class="small"><br>Chapters : # <br>Date : # # 2019</p>
        <p><a href=""class="bg-dark" data-toggle="tooltip" data-placement="top" id="follows"  title="
            BY folllowing the story you will be notify when new update(chapter) are available for this story
        Dont forget to follow the author for more story from him/her"><button class="btn btn-sm btn-dark" >Follow This Story</button></a>
        
        </p>

         </div>
                
        	
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



<div class="row mt-2">
    <div class="container card story small">
        <div class="card-header h6 uppercase">my kudrats favourites
         &nbsp; &nbsp;  &nbsp; chapter 10 /100
        </div>

        <div class="card-body ">
            <span class="uppercase h1">K</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.




        </div>
       <div class="card-footer">
           chapter 1 /100 
           <span class="small" style="float: right; "><a href="" class="btn text-info">Next Chapter..</a></span>
       </div>     


     </div></div>
    



    





        <script type="text/javascript">
            $(document).ready(function(){
            $('#follows').hover(function(){
           $('#follows').tooltip();

            });
              
            $('#det').click(function(){
               $('.details').toggle(100);
 
            });

            $('#follows').hover(function(){
              $('#followstory').toggle();
            });

            $('#on').click(function(){
                $('.body').css("background","black");
                $('.body').css("color","white");
                $('.card').css("background","black");
                $('.card').css("color","white");
                $('.head').css("background","black");
                $('.head').css("color","white");
               

            });
            $('#off').click(function(){
                $('.body').css("background","white");
                $('.body').css("color","black");
                $('.card').css("background","white");
                $('.card').css("color","black");
                
                $('.head').show();
               

            });
             $('#read').click(function(){
                $('.head').toggle();
               

            });
           


            });


        </script>