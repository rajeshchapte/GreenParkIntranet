<script type="text/javascript">
/* USER AJAX FUNCTIONS */


/* AJAX function for InActive USER  */
function inActiveUser(str)
{
	var answer = confirm("Are you sure you want to Inactive this user?")
	if (answer)
	{
		if (str=="")
		  {
		  document.getElementById("useractiveinfo"+str).innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("useractiveinfo"+str).innerHTML=xmlhttp.responseText;
			Ajax();
			/*window.location = "mycards.php";*/
			}
		  }
		xmlhttp.open("GET","admin_inactiveuser.php?userid="+str,true);
		xmlhttp.send();
	}
}



/* AJAX function for Active USER  */
function ActiveUser(str)
{
	var answer = confirm("Are you sure you want to active this user?")
	if (answer)
	{
		if (str=="")
		  {
		  document.getElementById("useractiveinfo"+str).innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("useractiveinfo"+str).innerHTML=xmlhttp.responseText;
			Ajax();
			/*window.location = "mycards.php";*/
			}
		  }
		xmlhttp.open("GET","admin_activeuser.php?userid="+str,true);
		xmlhttp.send();
	}
}

/* USER AJAX FUNCTIONS */

</script>