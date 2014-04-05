<html>
<body>
<form action="http://localhost/CodeIgniter/index.php/poorav_exa/inserItem" method="post">
Contact Form
<table>
<tr><td>Name</td><td><input type="text" name="name" id="Name"></td></tr>
<tr><td>Title</td><td><input type="text" name="title" id="Title"></td></tr>
<tr><td>Content</td><td><textarea name="content" id="Content"/></textarea></td></tr>
<tr><td></td><td><input type="submit" value="Insert" name="submit"></td></tr>
</table>
</form>
<table border='1'>
<th>Id</th><th>Name</th><th>Title</th><th>Content</th>
<?php
foreach($allitem as $getAllitem){ ?>
<tr>
	<td><?php echo $getAllitem->id; ?></td>
	<td><?php echo $getAllitem->Name; ?></td>
	<td><?php echo $getAllitem->title; ?></td>
	<td><?php echo $getAllitem->content; ?></td>
</tr>
<?php
}
?>
</body>
</html>