<!DOCTYPE html>
<html>
<head>
<link href="css/forms.css" rel="stylesheet">
<script src="js/popup.js"></script>
</head>
<body>
<!-- Body Starts Here -->
<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="#" id="form" method="post" name="form">
<img id="close" src="img/images/button_cancel.png" onclick ="div_hide()">
<h2>Contact Us</h2>
<hr>
<input id="name" name="name" placeholder="Name" type="text">
<input id="email" name="email" placeholder="Email" type="text">
<textarea id="msg" name="message" placeholder="Message"></textarea>
<a href="javascript:%20check_empty()" id="submit">Send</a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
<button id="popup" onclick="div_show()">client use</button>
<!--<a  id="popup" onclick="forms/customerenquiry.php_show()" class="btn btn-primary btn-xl page-form">customer enquiry more from us</a> -->
</body>
<!-- Body Ends Here -->
</html>