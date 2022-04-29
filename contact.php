<div class="container mt-5">
<?php
include('server.php');
if(!empty($_POST["send"])) {
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$sql = "INSERT INTO contacts_list (name, email, phone, subject, message, sent_date)
VALUES ('{$name}', '{$email}', '{$phone}', '{$subject}', '{$message}', now())";
mysqli_query($db, $sql);
if(!$sql) {
die("MySQL query failed.");
} else {
header('location: index.php?page=contactshow');  
}
}  
?>
<!-- Messge -->
<?php if(!empty($response)) {?>
<div class="alert text-center <?php echo $response['status']; ?>" role="alert">
<?php echo $response['message']; ?>
</div>
<?php }?>
<!-- Contact form -->
<div class="row">
<h3>Kapcsolat</h3>
<form action="" name="contactForm" method="post" enctype="multipart/form-data">
<div class="form-group">
<label>Név</label>
<input type="text" class="form-control" name="name" id="name">
</div>
<div class="form-group">
<label>Email</label>
<input type="email" class="form-control" name="email" id="email">
</div>
<div class="form-group">
<label>Telefon (06 formátumban)</label>
<input type="text" class="form-control" name="phone" id="phone">
</div>
<div class="form-group">
<label>Tárgy</label>
<input type="text" class="form-control" name="subject" id="subject">
</div>
<div class="form-group">
<label>Üzenet</label>
<textarea class="form-control" name="message" id="message" rows="4"></textarea>
</div>
<input type="submit" name="send" value="Elküld" class="btn btn-dark btn-block">
</form>
</div>
</div>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script>
$(function() {
$("form[name='contactForm']").validate({
// Define validation rules
rules: {
name: "required",
email: "required",
phone: "required",
subject: "required",
message: "required",
name: {
required: true
},
email: {
required: true,
email: true
},          
phone: {
required: true,
minlength: 10,
maxlength: 11,
number: true
},          
subject: {
required: true
},          
message: {
required: true
}
},
// Specify validation error messages
messages: {
name: "Kérlek valós nevet adj meg.",
email: {
required: "Kérlek írd be az email címed.",
minlength: "Kérlek valódi email címet adj meg."
},
phone: {
required: "Kérlek add meg a telefonszámodat.",
minlength: "A telefonszám minimum 10 karakter lehet.",
maxlength: "A telefonszám nem haladhatja meg a 11 karaktert."
},
subject: "Kérlek add meg a levél tárgyát!",
message: "Kérlek írd be az üzenetet!"
},
submitHandler: function(form) {
form.submit();
}
});
});    
</script>