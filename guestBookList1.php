<html>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<head>
<script src="jq.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
guest();
});
function guest(){
$('#book').load('guestBookList.php', function(){
setTimeout(guest, 2000);
});
}
</script>
</head>
<body>
<div id='book'></div>
</body>
</html>
