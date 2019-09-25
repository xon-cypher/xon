<title>Eqs </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<?php //// add connection link here  ?>

<style type="text/css">
body{ 
/*background-image:url('../pic/34.jpg');*/
background-size:cover;
}
.modal-content{border:0; border-radius:0; margin-top:12.5%;}
</style>



<!-- header-->
<div class="row head" style="position:static;top:0;">
        <div class="container col-md-12 pt-2 bg-light">
        <span class="pl-2 h3"><img src="eqs.png" height="40" width="100"></span>
        <span class="text-right pr-3 col-md-" style="float:right">
        <span><a href="stories.php"><i class="fa fa-home text-info"></i></a></span>
        <button type="button" id="click" class="btn btn-small" data-toggle="modal" data-target="#myModal"><i class="fa fa-bars text-info"></i></button>
        <a href="login.php" ><i class="fa fa-sign-out text-danger"></i></a>
       </span>

         <!-- search here-->

            <div class="input-group mb-3 pt-2 col-md-3  " style="float: right;">
           <div class="input-group-prepend">
           <button class="input-group-text btn bg-light text-info fa fa-search" placeholder="story name..."></button></div>
           <input type="text" class="form-control " placeholder="Story Name ..." maxlength="15" required >
           </div>

        </div>





    </div>
       
        <!-- The option model code here  -->
        <div class="modal" id="myModal" >
        <div class="modal-dialog bg-light modal-lg mr-5 ">
          <div class="modal-content bg-light ">

              <!-- Modal Header -->
          <div class="modal-header">
          <span class="modal-title h6">Welcome to EQuator story </span>
          <span class="text-right pl-4" style="float: right;">    dickson@gmail.com</span>
          <button type="button" class="close" data-dismiss="modal" id="close">&times;</button>
          </div>

              <!-- Modal body -->
           <div class="modal-body">
                <div class="container col-md-4 " style="float: left;">
                <ul class="list-inline">
                <li><a href="" class="btn btn-sm"><i class="fa fa-edit text-info"></i> Add a story</li></a> 
                <li><a href="" class="btn btn-sm"><i class="fa fa-list-ul text-info"></i> Favourites</li></a>
                <li><a href="" class="btn btn-sm"><i class="fa fa-cog text-info"></i>  settings</li></a> 

                </ul>
                </div>
                <div class="container col-md-4 " style="float: left;">
                     <h4>BIO</h4>
                     my storyWhen working on an image in Photoshop you must first properly size the image, depending on the
                     media discipline you are using. This is specifically important due to images varying for Web and
   
                </div>
                <div class="container col-md-4 " style="float: left;">
                    
                    <p>
                        <img src="pic/person_3.jpg" class="rounded-circle img-fluid" height="">
                    </p>

                </div>



           </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <span class="small"> equator story &copy;  2019</span>
              </div>

            </div>
            </div>
            </div>





<!--modal coded here-->
    <script type="text/javascript">
        $(document).ready(function(){
        $("#click").click(function(){
            $('#myModal').show();
            $('#close').click(function(){
            $('#myModal').hide();
            $("#click").click(function(){
            $('#myModal').close();
             });
            });//close btn
        });//open btn




        });

    </script>
