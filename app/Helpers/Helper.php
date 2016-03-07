<?php

function set_active($uri, $output = 'active')
{
	if( is_array($uri) ) {
		foreach ($uri as $u) {
			if (Route::currentRouteNamed($u)) {
				return $output;
			}
		}
	} else {
    	if (Route::currentRouteNamed($uri)){
    		return $output;
    	}
    }
}

function romanic_number(int $integer) 
{
	$table = [
		'M'=>1000,
		'CM'=>900,
		'D'=>500,
		'CD'=>400,
		'C'=>100,
		'XC'=>90,
		'L'=>50,
		'XL'=>40,
		'X'=>10,
		'IX'=>9,
		'V'=>5,
		'IV'=>4,
		'I'=>1
	];

	$return = '';
	
	while($integer > 0) 
    {
    	foreach($table as $rom=>$arb) {
    		if($integer >= $arb) { 
    			$integer -= $arb;
    			$return .= $rom;
    			break;
    		}
    	}
    }

    return $return; 
} 