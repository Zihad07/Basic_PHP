
<?php
include_once "function.php";
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
                        $checked = "";

                        if(isset($_REQUEST['ch1']) && $_REQUEST['ch1']==1){
                            $checked = " checked";
                        }

                        print_r($_REQUEST);
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
            </div>
        </div>

        <div class="row">
            <div class="column colmun-60">
                <form action="" method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname ?>"">

                    <div>
                        <input type="checkbox" name="ch1" id="ch1" value="1"  <?php echo $checked ?> >
                        <label for="ch1" class="label-inline">Some Check-box</label>
                    </div>

                    <div>
                        <label for="">Some Laptop</label>

                        <input type="checkbox" name="laptop[]" id="laptop-1" value="mac" <?php isChecked("laptop","mac"); ?>>
                        <label for="laptop-1" class="label-inline">MAC</label>
                        <br>
                        <input type="checkbox" name="laptop[]" id="laptop-2" value="windows" <?php  isChecked("laptop","windows"); ?>>
                        <label for="laptop-2" class="label-inline">WINDOWS</label>
                        <br>
                        <input type="checkbox" name="laptop[]" id="laptop-3" value="ubunto" <?php isChecked("laptop","ubunto"); ?>>
                        <label for="laptop-3" class="label-inline">UBUNTO</label>
                        <br>
                        
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

