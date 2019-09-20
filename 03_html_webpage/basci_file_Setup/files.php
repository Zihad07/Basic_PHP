
<?php
include_once "function.php";

// ----------------------------------------
// For file upload code
$allowedTypes = array(
    "image/jpg",
    "image/jpeg",
    "image/png"
);

if($_FILES['photo']){
    if(in_array($_FILES['photo']['type'], $allowedTypes) && $_FILES['photo']['size'] < 5*1024*1024){
        move_uploaded_file($_FILES['photo']['tmp_name'], 'myfiles/'.$_FILES['photo']['name']);
    }
}

// ----------------------------------------------

?>
<!doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <title>Basic-Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column colmun-60 column-offset-20">
                <h2>Our First Form</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid culpa eveniet modi nam numquam
                    quae repellat soluta tempora voluptas.</p>

                <P>

                    <?php
                        $fname = "";
                        $lname = "";
                      
                    ?>
                    <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                     $fname = htmlspecialchars($_REQUEST['fname']);
                    //  $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
                     } ?>

                    <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                        $lname = htmlspecialchars($_REQUEST['lname']);
                     } ?>

                    <p>
                     First Name : <?php echo $fname ?> <br>
                     Last Name : <?php echo $lname ?> <br>

                    </p>

                   
                </P>

                <div>
                    <pre>
                        <p>
                            <?php
                             print_r($_REQUEST);
                             print_r($_FILES);
                             ?>
                        </p>
                    </pre>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="column colmun-60">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname ?>"">

                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo">
                    

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

