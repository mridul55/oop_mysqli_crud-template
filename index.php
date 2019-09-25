<?php 
 include 'inc/header.php'; 
 include "config.php";
 include "Database.php";

?>

<?php 
  $db=new Database();
  $query="Select * from tbl_user";
  $read= $db->select($query);
?>

<?php
 if(isset($_GET['msg'])){
 	echo "<span style='color:green'>".$_GET['msg']."</span>";
 }
?>

<table class="tblone">
	<tr>
		<th width="25%">Name</th>
		<th width="25%">Email</th>
		<th width="25%">Skill</th>
		<th width="25%">Action</th>
	</tr>
<?php if($read){
 while($row = $read->fetch_assoc()){?>
	<tr>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['email'];?>Email</td>
		<td><?php echo $row['skill'];?></td>
		<td><a href="update.php?id=<?php echo urldecode($row['id']);?>">Edit</a></td>
	</tr>
<?php } } else {?>

<p>Data is not available!!</p>
<?php }?>

</table>

<a href="create.php">Create</a>











		

<?php include 'inc/footer.php'; ?>