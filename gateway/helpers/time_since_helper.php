<?php

function time_since($client_id, $time, $now = FALSE, $date_format = 'M d, Y @ h:ia') {
	if ($now == FALSE) {
		$now = time();
	}

	if (!is_numeric($time)) {
		$time = strtotime($time);
	}
	
	// calculate $since
	$since = $now - $time;
	
	// greater than a day?
	if ($since > (60*60*24)) {
		// it's more than a day ago, let's just return the data
		$return = 'on ' . local_time($client_id,$time);
	}
	else {
	    $chunks = array(
	        array(60 * 60 , 'hour'),
	        array(60 , 'minute'),
	        array(1 , 'second')
	    );
	
	    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
	        $seconds = $chunks[$i][0];
	        $name = $chunks[$i][1];
	        if (($count = floor($since / $seconds)) != 0) {
	            break;
	        }
	    }
	
	    $return = ($count == 1) ? '1 '.$name : "$count {$name}s";
	    $return .= ' ago';
    }
    
    return $return;
}

function get_timeago( $ptime )
{
    $estimate_time = time() - $ptime;

    if( $estimate_time < 1 )
    {
        return 'less than 1 second ago';
    }

    $condition = array( 
                12 * 30 * 24 * 60 * 60  =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $estimate_time / $secs;

        if( $d >= 1 )
        {
            $r = round( $d );
            return 'about ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
        }
    }
}
