<?php

namespace Application;

class Form
{

}

namespace Components;

class Form
{
    
}

var_dump(new Form);
echo '<br>';
var_dump(new \Components\Form);
echo '<br>';
var_dump(new \Application\Form);
echo '<br>';
