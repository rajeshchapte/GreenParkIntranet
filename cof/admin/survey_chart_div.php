<?php
$var1 = '';
$sel_survey_scale = mysql_query("SELECT * FROM survey_answers WHERE survey_id = '$sid'");
while($get_survey_scale = mysql_fetch_array($sel_survey_scale))
{
  
	$select_survey_poll = mysql_query("SELECT COUNT(survey_answer_id) FROM survey_polls_by_employee WHERE survey_answer_id = $get_survey_scale[id] AND survey_id = '$sid'");
	$get_survey_poll = mysql_fetch_array($select_survey_poll);

	$var1 .= "[".'"'.trim($get_survey_scale[answer_text]).'"'.", ".$get_survey_poll['COUNT(survey_answer_id)']."], ";
	
	
	//foreach($get_survey_scale[answer_text] as $key){
	//	echo $key;
	//}
}
?>

	<link href="survey_chart/examples.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../../excanvas.min.js"></script><![endif]-->
	<script language="javascript" type="text/javascript" src="survey_chart/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="survey_chart/jquery.flot.js"></script>
	<script language="javascript" type="text/javascript" src="survey_chart/jquery.flot.categories.js"></script>

	<script type="text/javascript">

	$(function() {

		var data = [ <?php echo $var1;?> ];

		$.plot("#placeholder", [ data ], {
			series: {
				bars: {
					show: true,
					barWidth: 0.6,
					align: "center"
				}
			},
			xaxis: {
				mode: "categories",
				tickLength: 0
			}
		});

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>
    <div class="demo-container">
        <div id="placeholder" class="demo-placeholder"></div>
    </div>

            
