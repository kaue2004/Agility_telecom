<?php 

	session_start(); 
	
	if(isset($_SESSION['username']) == true){

		header("Location: home.html");

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/animate.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="./js/jquery-1.8.3.min.js"></script>
<script src="./js/jquery.elevatezoom.js"></script>
 <script src="js/lightbox-plus-jquery.min.js"></script> 
<script src="js/lightbox.min.js"></script> 
<script src="./js/swiper.min.js"></script>  
  <title>Agility Telecom</title>
</head>
<style>
  .bg{
    background-color:#32CD99;
    width:100%;
    height:100vh;
    background-size: 100%;  }
  .form-container{
    position: absolute;
    top:25vh;
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px #000;
  }
  @media only screen and (max-width: 678px){
    .bg{
      background-color:#32CD99;
    width:100%;
    height:200vh;
    background-size: 100%;  

    }
    .btn-block{
      width:230px;
    }
    .form-container{
      width:280px;
      position: relative;
      right:-42px;
    }
  }
</style>
<body>
  <section class="container-fluid bg">
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container">
          <div class="form-row align-items-center">
            <div class="col-auto">
              <label class="sr-only" for="inlineFormInput">Name</label>
              <input name="user" type="text" class="form-control mb-2" placeholder="Digite seu nome">
            </div>
            <div class="col-auto">
              <label class="sr-only" for="inlineFormInputGroup">Username</label>
              <div class="input-group mb-2">
                <input name="password" type="text" class="form-control"placeholder="Digite seu CPF">
              </div>
            </div>
            <div class="col-auto">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                <label class="form-check-label" for="exampleCheck1">
                  Remember me
                </label>
              </div>
            </div>
              <button name="env" type="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
        </form>
        </section>
    </section>
  </section>
</body>
<?php
    session_start();

		if(isset($_POST['env'])){
			
            $password = $_POST['password'];
            $user=$_POST['user'];
            $_SESSION['username']=$user;

			if( $password == $_POST['password'] ){

				$_SESSION['password'] = $password;

				header("Location: home.html");

			}else{

				echo "Não está logado";

			}



		}

	?>
</html>
