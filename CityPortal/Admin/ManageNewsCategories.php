<?php


include_once $_SERVER["DOCUMENT_ROOT"] . "/CityPortal1/Admin/Partial/Shared/AllIncludes.php";
$operation = "";

if(isset($_GET["op"]))
{
    $operation = $_GET["op"];
}

if($operation == "Add")
{
    $obj = new NewsCategory();
    $obj->set_Name($_GET["Name"]);
    
    NewsCategoryBL::Add($obj);
}

if($operation == "Update")
{
    $obj = new NewsCategory();
    $obj->set_Name($_GET["Name"]);
    $obj->set_Id($_GET["Id"]);
    
    NewsCategoryBL::Update($obj);
    
}


if(isset($_GET["delete_yes"]))
{
    $obj = new NewsCategory();
    $obj->set_Id($_GET["Id"]);
    
    NewsCategoryBL::Delete($obj);


}
$show="";
if(isset($_GET["show"]))
{
    $show = $_GET["show"];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard - Admin Template</title>
<link rel="stylesheet" type="text/css" href="<?php echo "$siteAdminBasePath/Theme/css/theme.css" ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo "$siteAdminBasePath/Theme/css/style.css" ?>" />
<script>
   var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
   document.writeln('<link rel="stylesheet" type="text/css" href="css/' + StyleFile + '">');
</script>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie-sucks.css" />
<![endif]-->
</head>

<body>
	<div id="container">
    	
            <?php 
            
            include_once "$siteAdminBaseFullPath/Partial/Shared/Header.php";
            
            ?>
        
        <div id="wrapper">
            <div id="content">
                 <h1>Manage News Categories</h1>
                <br>
               <?php include "$siteAdminBaseFullPath/Partial/NewsCategories/GetAll.php"; ?>
                     <br></br>
                    <a href="?show=Add">Add new category</a>
                    <br></br>
                    
                    <?php if($show=="Add")
                    {
                        include "$siteAdminBaseFullPath/Partial/NewsCategories/Add.php" ;
                   }
                   
                   if($show=="update")
                    {
                        include "$siteAdminBaseFullPath/Partial/NewsCategories/Update.php" ;
                   }
                   
                   if($show=="delete")
                    {
                        include "$siteAdminBaseFullPath/Partial/NewsCategories/Delete.php" ;
                   }
                   if($show=="view")
                    {
                        include "$siteAdminBaseFullPath/Partial/NewsCategories/GetSingle.php" ;
                   }

                  
                 ?>
    
               
       			
            </div>
           <?php
           
            include_once "$siteAdminBaseFullPath/Partial/Shared/RightMenu.php";
           
           ?>
      </div>
        
</div>
</body>
</html>
