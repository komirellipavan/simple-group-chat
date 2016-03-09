<html>

<head>

<title>Groupchat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>

$(document).ready(function () {
	
    setInterval(function() {
	
                      $.ajax({
                        type:"post",
                        url:"post.php",
                        data:"action=showcomment",
                        success:function(data){
                             $("#showmsg").html(data);
							 //console.log("hello");
							 
                        }
                      });
					  $.ajax({
                        type:"post",
                        url:"post.php",
                        data:"action=active",
                        success:function(data){
							 console.log("active");
                        }
                      });
					   $.ajax({
                        type:"post",
                        url:"post.php",
                        data:"action=showusers",
                        success:function(data){
                             $("#online").html(data);
							 //console.log("hello");
							 
                        }
                      });
    }, 1000);
	$("#button").click(function(){
						
 
                          var sessionName;
                          var message=$("#message").val();
						  //console.log(sessionName);
                          $.ajax({
							  
                              type:"post",
                              url:"post.php",
                              data:"name="+sessionName+"&message="+message+"&action=addcomment",
                              success:function(data){
                                console.log(data);
                       
                              }
 
                          });
						  $('#message').val("");
						  myFunction();
                    });
					
					setInterval(myFunction,5000);
					$('#message').keypress(function(	event) {
    if (event.keyCode == 13) {
        event.preventDefault();
    }
});
					

	
});

window.onbeforeunload = function(){
  return 'Are you sure you want to leave,you can not use this username for one minute?';
};

</script>


</head>
<body >
<nav class="w3-sidenav w3-white w3-card-2" id="online"style="width:20%">
  <br>
	
</nav>



<div class="w3-container">
<center>
Group chat
<form action="logout.php">
<input type = "submit" value ="Logout">
</form>



<div id="showmsg"  style="background:lightblue;overflow:auto;" >

</div>
<br/>Message:
</center>



<form  align="center" autocomplete="off">
<input type = "text"  name= "message"id="message" required><br/>
<input type="button"  value="Send" id="button" > 
</form>
</div>
<script>

function myFunction() {
    var elmnt = document.getElementById("showmsg");
    elmnt.scrollTop =elmnt.scrollHeight + 10 ;
}
</script>

</script>

</body>

</html>