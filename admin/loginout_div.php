<div class="logo_bar" style="float:right; z-index:9999999;"> 
   <style>

.slidingDiv {
	
	height:auto;
	background-color: #FFFFFF;
	padding:20px;
	margin-top:10px;
	border-bottom:5px solid #CCCCCC;
	z-index:9999999; 
	font-size:16px;font-family: 'Open Sans', sans-serif;
	
	/*border-bottom:5px solid #3399FF;*/
}

.show_hide {
	display:none;
	padding-top:10px;
	background-color:#005900;
	font-size:16px;font-family: 'Open Sans', sans-serif; color:#FFFFFF; cursor:pointer/*width:100%; height:40px; border:1px solid #CCC; padding:0px; margin:0px; float:right; text-align:center;
	text-decoration:none;
	font-family:Verdana, Geneva, sans-serif;
	*/
}

.show_hide:hover {
	display:none;
	padding-top:10px;
	background-color:#216121;font-size:16px;font-family: 'Open Sans', sans-serif;
	/*width:100%; height:40px; border:1px solid #CCC; padding:0px; margin:0px; float:right; text-align:center;
	text-decoration:none;
	font-family:Verdana, Geneva, sans-serif;
	font-size:13px;*/
}


</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
        
        $(document).ready(function(){
        
        
            $(".slidingDiv").hide();
            $(".show_hide").show();
            
            $('.show_hide').click(function(){
            $(".slidingDiv").slideToggle();
            });
        
        });
        
        </script>
        <div style="width:200px; float:right; padding-right:35px;">
         <div style="height:35px;  text-align:center;" class="show_hide">
         <?php echo $select_user_res[first_name]." ".$select_user_res[last_name]; ?> </div>         
            <div class="slidingDiv">       
                <a href="#">Profile</a> <br />   
                <a href="logout.php">Log Out</a>
            </div>
         </div>
    </div>