
<?php

$obj = EntertainmentCategoryBL::GetSingle($_GET["Id"]);

?>
<h2>Delete</h2>
<form action="">
    
    <input type="hidden" name="Id" value="<?php echo $obj->get_Id() ?>" />
    
    <b>Are you sure  want to delete:-<?php echo $obj->get_Name() ?>
        </b>
        
<input type="submit" value="yes" name="delete_yes" />  
<input type="submit" value="no" name="delete_no" />
</form>
