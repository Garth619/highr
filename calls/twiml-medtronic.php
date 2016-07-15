<?php
   
	$num = 0;
	
	if (isset($_GET['number']) && $_GET['number'] != "") {

		$num = $_GET['number'];
	
	}
	
	
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	

	
	
?>


<Response>
 <Say voice="woman" language="en-gb">
This call may be recorded for quality assurance.
</Say>
	<Dial record="true" action="http://www.ilawyermarketing.com/calls/handler-medtronic.php?callsource=<?php echo $_GET['callsource']; ?>">6192950035</Dial>
</Response>

