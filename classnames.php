<?php
require_once 'PhpHtmlClassnames.php';

function classnames($arConditions){
    return PhpHtmlClassnames::get($arConditions);
}

function cn($arConditions){
    return PhpHtmlClassnames::get($arConditions);
}
