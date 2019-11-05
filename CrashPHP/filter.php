
<?php 
    
    //check for posted data

    // if(filter_has_var(INPUT_POST,'data')){
    //     echo "Data found";
    // }else{
    //     echo "No Data";
    // }


    if(filter_input(INPUT_POST,'data')){
        $email = $_POST['data'];

        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Email is valid";
        }else{
            echo "Email is not valid";
        }
    }

        #FILTER_VALIDATE_BOOLEAN
		#FILTER_VALIDATE_EMAIL		
		#FILTER_VALIDATE_FLOAT		
		#FILTER_VALIDATE_INT			
		#FILTER_VALIDATE_IP			
		#FILTER_VALIDATE_REGEXP		
        #FILTER_VALIDATE_URL
        
        #FILTER_SANITIZE_EMAIL	
		#FILTER_SANITIZE_ENCODED	
		#FILTER_SANITIZE_NUMBER_FLOAT	
		#FILTER_SANITIZE_NUMBER_INT	
		#FILTER_SANITIZE_SPECIAL_CHARS	 
		#FILTER_SANITIZE_STRING		
        #FILTER_SANITIZE_URL
        
        $var ='<script>alert(1)</script>';

        // echo $var;
        echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);

        

?>

























<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


    <div class="container">
        <div class="row">
            <div class="col-md-6 m-4">
            <div class="card">
        <div class="card-body">
            <form action="filter.php" method="post">
            <input class="form-control" type="text" name="data" id="">
            <input class="btn btn-primary mt-4" type="submit" value="Submit">
            </form>
        </div>
    </div>
            </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>