
<script src="jq.js"></script>
<script>
$(document).ready(function(){
$("#addGuest").click(function(){
var user = $("#user").val();
var subject = $("#subject").val();
var message = $("#message").val();
var guest = 'user='+ user + '&subject='+ subject + '&message='+ message;
if(user ==''|| subject ==''|| message =='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "guestbook1.php",
data: guest,
cache: false,
success: function(result){
$('#user').removeAttr('value');
$('#subject').removeAttr('value');
$('#message').removeAttr('value');
}
});
}
return false;
});
});
</script>



<input type="text" id="user" autocomplete="off" placeholder="Name">
<br>
<input type="text" id="subject" autocomplete="off" placeholder="Subject">
<br>
Message<Br><textarea id="message" placeholder="Message"></textarea>
<Br><br>
<input type="submit" id="addGuest" value="add guest">
<Br><br>
<iframe width="50%" height="70%" src="guestBookList1.php"></iframe>


