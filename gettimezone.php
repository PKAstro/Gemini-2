<?php
/**    Returns the offset from the origin timezone to the remote timezone, in seconds.
*    @param $remote_tz;
*    @param $origin_tz; If null the servers current timezone is used as the origin.
*    @return int;
*/
function get_timezone_offset($remote_tz, $origin_tz = null) {
    if($origin_tz === null) {
        if(!is_string($origin_tz = date_default_timezone_get())) {
            return false; // A UTC timestamp was returned -- bail out!
        }
    }
    $origin_dtz = new DateTimeZone($origin_tz);
    $remote_dtz = new DateTimeZone($remote_tz);
    $origin_dt = new DateTime("now", $origin_dtz);
    $remote_dt = new DateTime("now", $remote_dtz);
    $offset = $origin_dtz->getOffset($origin_dt) - $remote_dtz->getOffset($remote_dt);
    return $offset;
}
?>
Examples:
<?php
// This will return 10800 (3 hours) ...
//$offset = get_timezone_offset('America/Los_Angeles','America/New_York');
// or, if your server time is already set to 'America/New_York'...
$offset = get_timezone_offset('America/Phoenix');
echo $offset/60;
echo "<br>";
$offset = get_timezone_offset('America/New_York');
echo $offset/60;
// You can then take $offset and adjust your timestamp.
//$offset_time = (time() + $offset)/(3600 *60);
//$offset_time =  $offset;
//echo $offset_time;
?>