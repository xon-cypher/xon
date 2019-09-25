<!-- 
project:Eqs(equator story)
date:2092019
owner:chriss ngure
id:dickson john
signature:xon
copyright 2019

-->


<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<style type="text/css">
body{ 
background-image:url('pic/37.jpg');
background-size:cover;
}
input[type="text"],input[type="password"],input[type='email']{

background: none;


}
</style>
<body>

<div class="row bg-light head">
<span class="pl-2 h3 ml-2"><img src="eqs.png" class="" height="50" width=""><br>
<span class="small" style="font-size:11px; padding-left:34px;">equator story</span>
</span>
<span class="text-right  container mr-4 small" ><button id="reg" class="btn btn-sm  text-dark" >
<i class="fa fa-edit"></i>Create Account</button>
<button id="log" class="btn text-success btn-sm">
<i class="fa fa-sign-in"></i>  Login</button>

</span>

</div>





<didv class="row justify-content-center">



    <div class="container login col-md-5 mt-5">

      <div class="header h1 bg-none text-center mt-5">
        Login
      </div>

      <form method="POST" class="col-md-11 text-info ">
        <label>username</label>
        <input type="text" name="usern" placeholder="enter username" class="form-control" required>
        <label class="mt-4">Password</label>
        <input type="password" name="nywila" placeholder="Enter Password" class="form-control" minlength="8" required>
        <input type="submit" name="go" value="login" class="btn btn-dark btn-sm mt-3 btn-block"><br>
        <!--<span class="small text-right mt-3">Forgot Your password !! <a href="">Recover</a></span>-->
        </form>
         <?php 
         if (isset($_POST['go'])) {
           # code...
          $id="kudrat";
          $pass="kudrat12345";

          $username=$_POST['usern'];
          $nywila=$_POST['nywila'];

          if ($username==$id) {
          if ($nywila==$pass) {
            # code...
             header('location:stories.php');
          }else{echo "<p class='alert alert-danger col-md-11 small '><i class='fa fa-frown-o'></i> incorrect Username or password</p>";}
           

          }else{
            echo "<p class='alert btn btn-sm alert-danger col-md-11 small'id='create'>You dont have account click me to create</p>";
          }
         }
          




          ?>






        </div>


    <div class="container register col-md-5 " style="display:none;">
      <div class="header h1 bg-none text-center ">
        Create Account
      </div>
     <form method="POST" class="col-md-11 text-info">
        <label class="label mt-2">Full Name</label>
        <input type="text" name="" placeholder="Enter Full Name" class="form-control" required>

         <label class="label mt-2">Email</label>
        <input type="email" name="" placeholder="Example@gmail.com" class="form-control" required>

        <label class="mt-2">Gender</label>
        <select name="gender" class="form-control">
          <option value=" " class="form-control disabled">---select gender---</option>
          <option value="1">Male</option>
          <option value="o">Female</option>
        </select> <br>

        <label class="mt-2 label">Create Password</label>
        <input type="password" name="" placeholder="create a password" class="form-control " required minlength="8">
      

        <label class="mt-2">Confirm Password</label>
        <input type="password" name="" placeholder="Retype password" class="form-control " required minlength="8">



        <input type="submit" name="" value="create" class="btn btn-info btn-sm mt-3 btn-block"><br>
        <span class="small text-right mt-3">i have account !! <a href="">Login</a></span>
        </form>

    </div>


    </div>




     </div>

  
  
          
          <script type="text/javascript">
          $(document).ready(function(){
          // document.write('god please give me job');
          
          $("#reg").click(function(){
      
          $(".login").hide();
          $(".register").show(900);
         
          
          });

           $("#create").click(function(){
      
          $(".login").hide();
          $(".register").show(900);
         
          
          });
          
          $('#log').click(function(){
          $(".register").hide();
          $(".login").show(900);
          
          });
          
         
          
          
          });
          </script>
          
          </body>
          </html>
        