<br><br><br>
<div class="container mt-5">
	<div class="row">
		<div class="col-sm-12">
			<?php
				Flasher::Message();

				// echo $_SESSION['usr']['user'];
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
			<h1><b>Search BookMark</b></h1>
			<hr>
			<form action="<?= BASEURL; ?>/home/results" method="POST">
				<input type="text" name="search" id="search" style="text-align:center;" class="form-control" required="true">
			<button type="submit" class="btn btn-primary mt-2" style="width: 300px;">Search  <i class="fa fa-search"></i></button>
			</form>			
		</div>
	</div>
</div>