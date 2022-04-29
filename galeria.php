<div class="container">
  <div class="row">
<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3>Galéria és képfeltöltés</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<?php if (isset($_SESSION['username'])) : ?>
		<form method="POST" action="upload.php" enctype="multipart/form-data">
        <div class="form-inline">
				<label>Képfeltöltés</label>
				<input type="file" name="image" class="form-control" required="required"/>
				<button class="btn btn-primary" name="upload"><span class="glyphicon glyphicon-upload"></span> Feltöltés</button>
			</div>
		</form>
		<?php else : ?>
                <h4>Képet csak regisztrált felhasználó tud feltölteni!</h4>
            <?php endif; ?>
		</div>
		
		<br />
		<div class="alert alert-info">Feltöltött képek</div>
		<?php
			require 'server.php';
 
			$query = mysqli_query($db, "SELECT * FROM `image`") or die(mysqli_error());
			while($fetch = mysqli_fetch_array($query)){
		?>
			<div style="border:1px solid #000; padding:4px; margin:10px; max-width: 310px;">
				<a href="<?php echo $fetch['location']?>"><img src="<?php echo $fetch['location']?>" style="max-width: 300px"/></a>
			</div>
		<?php
			}
		?>
	</div>
	</div>
   