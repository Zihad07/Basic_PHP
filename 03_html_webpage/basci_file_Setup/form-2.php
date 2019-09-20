
<?php
include_once "form-2_function.php";

$fruits = ['mango', 'pine-apple', 'plum',"banana","water-melon"];
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

    <style>
        .mt {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container mt">
        

        <div class="row">

            <div class="column colmun-60">

                <div>
                    <p>
                        <?php
                            // print_r($_REQUEST);
                            
                            // if(isset($_REQUEST['fruits']) && $_REQUEST['fruits']!=''){
                            //     printf("You Have selected : %s", filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING));
                            // }

                            // $sfruits = $_REQUEST['fruits']??array();
                            $sfruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY) ?? array();

                            if(count($sfruits) > 0){
                                echo "you have selected : ".join(", ",$sfruits);
                            }
                        ?>
                    </p>
                </div>
                <form action="" method="POST">

                <label for="">Some Fruits</label>
                    <select style="height:200px;" name="fruits[]" id="fruits" multiple>
                        <option value="" disabled selected>Some fruits</option>
                        <!-- <option value="mango">Mango</option>
                        <option value="pine-apple">Pine-appele</option>
                        <option value="plum">Plum</option> -->

                        <?php displayOption($fruits,$sfruits); ?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

