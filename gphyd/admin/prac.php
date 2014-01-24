<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");

$sid = 21;

$kym =  mysql_query("SELECT * FROM know_your_managers WHERE prp_code = $prp_id ORDER BY sort_oreder DESC");

$previousRow = array();
$currentRow = mysql_fetch_row($kym);

while ($currentRow) {
    $nextRow = mysql_fetch_row($kym);

    echo "<br>currentRow:".$currentRow[0];
    echo "previousRow:".$previousRow[0];
    echo "nextRow:".$nextRow[0];

    $previousRow = $currentRow;
    $currentRow = $nextRow;
}
while($kymres = mysql_fetch_array($kym)){
	$kymidarr[] = $kymres["id"];
}
  //echo $kymidarr[1];

echo "<br>";

$res = array();
while ($result = mysql_fetch_row($kym)) {
    $res[] = $result;
 }
 echo "<pre>";
 foreach($res AS $index=>$res1){
     echo "Current".$res1[1]; 
     echo "  Next" . $res[$index+1][1];
     echo "  Prev" . $res[$index-1][1]; echo "<br>";
 }
echo "<br>";
// Connect database
$table="survey_polls_by_employee";


$result=mysql_query("select * from $table WHERE survey_id = '$sid'");

$res_arr = mysql_fetch_array($result);
printf($res_arr);




function test()
{
    $number_of_args = func_num_args();
    echo "Number of arguments: $number_of_args";
}


test ("a","b");
?>


<!DOCTYPE>

<html>
<head>
    <title>Test</title>

    <script type="text/javascript">
        function loadIt() {
            $.ajax({
                url: "about.html",
                cache: false,
                success: function (data) {
                    $("#content").empty();
                    $(data).hide().appendTo($("#content")).slideDown();
                },
                error: function () {
                    alert("something went wrong");
                }
            });
        }
    </script>
</head>
<body>
    <input type="button" id="button1" value="Load About" onClick="loadIt();" />

    <br />

    <div id="content" style="width: 400px; height: 400px; border: 1px solid #000;">

    </div>
</body>
</html>