<?php
class PhpHtmlClassnames
{
    public static function get($arConditions){
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
}
