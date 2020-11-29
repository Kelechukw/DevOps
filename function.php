<?php

function inputElement($placeholder, $name, $value){
    $ele = "
        
        <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                        </div>
                        <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
                    </div>
    
    ";
    echo $ele;
}

function buttonElement($btnid,$styleclass,$text,$name){
    $btn="
    <button name='$name'class ='$styleclass' id='$btnid'>$text</button>
    ";
   echo $btn;
}