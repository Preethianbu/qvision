<?php
require '../../connect.php';
 $id=$_REQUEST['id'];
$stmt = $con->prepare("SELECT user_role_mapping.id as user_role_id,user_role_mapping.*,z_role_master.*,z_user_master.* FROM `user_role_mapping`
	  INNER JOIN z_role_master ON user_role_mapping.rolemaster_id=z_role_master.id 
INNER join z_user_master ON user_role_mapping.employee_id=z_user_master.candidate_id
	  where user_role_mapping.id='$id'");
$stmt->execute(); 
$row = $stmt->fetch();
$sta=$row['status'];
?>
<head>
    <link rel="stylesheet" href="Qvision\commonstyle.css">
    </head>
	<style>
	.card-primary:not(.card-outline)>.card-header{
		background-color: #f1cc61 !important;
	}
	.card-primary:not(.card-outline)>.card-header a {
		color: #3c0808 !important;
    background-color: #ed5d00 !important;
	}
	</style>
<div  class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><font size="5">EDIT ROLE DETAILS</font></h3>
		<a onclick="return back()" style="float: right;" data-toggle="modal" class="btn btn-danger">BACK</a>
				
              </div>
<form role="form" name="" action="" method="post" enctype="multipart/type">

<table class="table table-bordered">
 

<tr>
<td>Role Name</td>
<td colspan="5">
<input type="hidden" class="form-control" id="get_id" name="get_id" value="<?php echo  $id;?>">
<input type="hidden" class="form-control" id="emp_id" name="emp_id" value="<?php echo  $row['employee_id'];?>">
<input type="text" class="form-control" id="employee" name="employee" value="<?php echo  $row['full_name'];?>" readonly>
</td>
</tr>

<tr>
<td>Role Code</td>
<td colspan="5">

<select class="form-control" name="code" id="code" required>
					  
					  <?php
					  $role=$row['user_role_id'];
$sql=$con->query("SELECT * FROM z_role_master where id='$role'");
$stmt->execute(); 
$row1 = $stmt->fetch();
?>

<option value="<?php echo $row1['id'];?>"><?php echo $row1['code']; ?>--<?php echo $row1['role_name'];?></option>
<?php

$sql1=$con->query("SELECT * FROM z_role_master");
      $i=1;
      while($cmp = $sql1->fetch(PDO::FETCH_ASSOC))
      {
		  ?>
		  <option value="<?php echo $cmp['id'];?>"><?php echo $cmp['code']; ?>--<?php echo $cmp['role_name'];?></option>
		  <?php
	  }
		  ?>
					  </select>
</td>
</tr>
<input type="hidden" class="form-control" id="role_code" name="role_code" readonly>
<tr>
<td>User Name</td>
<td colspan="5">

<input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo  $row['user_name'];?>">
</td>
</tr>

<tr>
<td>Password</td>
<td colspan="5">

<input type="text" class="form-control" id="password" name="password" value="<?php echo  $row['password'];?>">
</td>
</tr>
<tr>
<td>Mail Id</td>
<td colspan="5">

<input type="text" class="form-control" id="mail_id" name="mail_id" value="<?php echo  $row['email_id'];?>" >
</td>
</tr>
<tr>
<td>Mail Password</td>
<td colspan="5">

<input type="text" class="form-control" id="mail_password" name="mail_password" >
</td>
</tr>



</table>
<input type="button" class="btn btn-primary btn-md"  style="float:right;position:relative;left:-5px;" name="Update" onclick="role_update()" value="Update"> 
<br>
<br>
</form>
</div>

<script>
		function back()
    {
  user_role()
  }
     function role_update()
    {
    var id=$('#get_id').val();
	//alert(id);
    var data = $('form').serialize();
    $.ajax({
    type:'GET',
    data:"id="+id, data,
    url:'Qvision/user_role/update_role.php',
    success:function(data)
    {
      if(data==1)
      { 
        alert('Not updated');
      
      }
      else
      {
        alert("Update Successfully");
		user_role()
      }
      
    }       
    });
    }
	  $(document).ready(function() {
$('#code').on('change', function() {
var code = this.value;
//alert(code);
$.ajax({
url: "Qvision/user_role/find_role.php",
type: "get",
data: {
code: code
},
cache: false,
success: function(data){
	//alert(data);
var split=data.split("=");
//alert(split[0]);

$('#role_code').val(split[0]);

//alert(split[1]);
}
});

});

});
  </script>