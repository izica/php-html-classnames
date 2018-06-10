<?php
function classnames($arConditions){
    $arClassnames = [];
    foreach ($arConditions as $sClassname => $bCondition) {
        if(is_int($sClassname)){
            $arClassnames[] = $bCondition;
        }else{
            if($bCondition){
                $arClassnames[] = $sClassname;
            }
        }
    }
    return implode(' ', $arClassnames);
}

function cn($arConditions){
    $arClassnames = [];
    foreach ($arConditions as $sClassname => $bCondition) {
        if(is_int($sClassname)){
            $arClassnames[] = $bCondition;
        }else{
            if($bCondition){
                $arClassnames[] = $sClassname;
            }
        }
    }
    return implode(' ', $arClassnames);
}
