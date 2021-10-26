<!DOCTYPE html>
<html>
<head>
	<title>Membuat Pagination Pada CodeIgniter</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
 Pilih Bahasa :  <select onchange="javascript:window.location.href='<?php echo base_url(); ?>index.php/LanguageSwitcher/switchLang/'+this.value;">
   <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
   <option value="indo" <?php if($this->session->userdata('site_lang') == 'indo') echo 'selected="selected"'; ?>>Indonesia</option>
  </select>
<h1><?php echo $this->lang->line('menu_test'); ?></h1>


  <button onclick="javascript:window.location.href='<?php echo base_url(); ?>index.php/unsetz/un';">Unset</button>
<br><br>
	<table class="table table-striped">
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>alamat</th>
			<th>pekerjaan</th>		
		</tr>
		<?php 
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $u->id; ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
		</tr>
	<?php } ?>
	</table>
	<br/>
<!-- 	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> -->
	<nav aria-label="Page navigation">
		 
	<?php 
	echo $links;
	?>
	</nav>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>