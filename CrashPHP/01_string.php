<?php 

    function p($print_vriable){
        echo $print_vriable.PHP_EOL;
    }

    #substr

    $output = substr("Hello",1,2);
    $output = substr("Hello",-2);
    // echo $output;

    #strlen()

    $output = strlen("Hello world");
    p($output);

    #strpos()
    $output = strpos('Hello world','o');
    p($output);
    $output = strrpos('Hello world','l');
    p($output);

    #trim()
    $text = "   hi how are you    ";
    p(trim($text));

    #str_replace

    $text = "Hello Wordl";
    $output = str_replace("Hello","Hi",$text);
    p($output);

    #is_string()

    $val = '22';
    $output = is_string($val);
    // $output = is_string(23);
    p($output);

    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4','',' ', 0, '0');

    foreach($values as $value){
        if(is_string($value)){
            p($value);
        }
    }


    #gzcompress()
    $string =
	"Lorem ipsum dolor sit amet, consectetur
	adipiscing elit. Nunc ut elit id mi ultricies
	adipiscing. Nulla facilisi. Praesent pulvinar,
	sapien vel feugiat vestibulum, nulla dui pretium orci,
	non ultricies elit lacus quis ante. Lorem ipsum dolor
	sit amet, consectetur adipiscing elit. Aliquam
	pretium ullamcorper urna quis iaculis. Etiam ac massa
	sed turpis tempor luctus. Curabitur sed nibh eu elit
	mollis congue. Praesent ipsum diam, consectetur vitae
	ornare a, aliquam a nunc. In id magna pellentesque
	tellus posuere adipiscing. Sed non mi metus, at lacinia
	augue. Sed magna nisi, ornare in mollis in, mollis
	sed nunc. Etiam at justo in leo congue mollis.
	Nullam in neque eget metus hendrerit scelerisque
	eu non enim. Ut malesuada lacus eu nulla bibendum
    id euismod urna sodales. ";
    
    $compressed = gzcompress($string);
    // p($compressed);

    $original = gzuncompress($compressed);
    p($original);

    // for each

    $people = array(
        'nahid'=>'nahid@gmail.com',
        'karim'=>'karim@gmail.com',
        'sara'=>'sara@gmail.com',
    );

    foreach($people as $person=>$email){
        echo "{$person} : {$email}\n";
    }


?>