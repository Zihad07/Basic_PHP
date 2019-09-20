
<?php

function displayOption($options,$sfruits){
    foreach ($options as $option) {
        $option = strtolower($option);
        $slected = '';
        if(in_array($option,$sfruits)){
            $slected = "selected";
        }
        printf("<option value = '%s' %s> %s </option>\n",$option,$slected,ucwords($option));
    }
}