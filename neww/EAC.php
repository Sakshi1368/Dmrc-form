<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="eac";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
    
 
        $Nature=$_POST['Nature'];
	   $check= implode(',',$Nature);


	 $Financial_Year_start= $_POST['Financial_Year_start'];

     $Financial_Year_end= $_POST['Financial_Year_end'];

	 $plant = $_POST['plant'];

	 $storage_location= $_POST['storage_location'];
     
     $department= $_POST['department'];

	 $Budget_Head = $_POST['Budget_Head'];

     $Tracking_Number = $_POST['Tracking_Number'];

     $HSN_Code = $_POST['HSN_Code'];

     $ext_mob = $_POST['ext_mob'];

     $Material_type = $_POST['Material_type'];

     $MM_Group = $_POST['MM_Group'];

     $MM_Number= $_POST['MM_Number'];

     $MM_Description = $_POST['MM_Description'];

     $portno= $_POST['portno'];

     $shelf_life = $_POST['shelf_life'];

     $pac = $_POST['pac'];

     $pac_attachment = $_POST['pac_attachment'];

     $leadtime_delivery_period= $_POST['leadtime_delivery_period'];

     $proposed_EAC_qty = $_POST['proposed_EAC_qty'];

     $unit_of_measure = $_POST['unit_of_measure'];

     $special_EAC = $_POST['special_EAC'];

     $reason_for_special = $_POST['reason_for_special'];

     $regular_EAC = $_POST['regular_EAC'];

     $reason_for_regular = $_POST['reason_for_regular'];

     $emergency_EAC=$_POST['emergency_EAC'];

     $Maximum_level=$_POST['Maximum_level'];

     $Minimum_level=$_POST['Minimum_level'];
     


	 $sql_query = "INSERT INTO details ( Nature,Financial_Year_start,Financial_Year_end,plant,storage_location,department,Budget_Head,Tracking_Number,HSN_Code,ext_mob,Material_type,MM_Group,MM_Number,MM_Description,portno,shelf_life,pac,pac_attachment,leadtime_delivery_period,proposed_EAC_qty,unit_of_measure,special_EAC,reason_for_special,regular_EAC,reason_for_regular,emergency_EAC,Maximum_level,Minimum_level )
	 VALUES ('$check','$Financial_Year_start','$Financial_Year_end','$plant','$storage_location','$department','$Budget_Head','$Tracking_Number','$HSN_Code','$ext_mob','$Material_type','$MM_Group','$MM_Number','$MM_Description','$portno','$shelf_life','$pac','$pac_attachment','$leadtime_delivery_period','$proposed_EAC_qty','$unit_of_measure','$special_EAC','$reason_for_special','$regular_EAC','$reason_for_regular','$emergency_EAC','$Maximum_level','$Minimum_level')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>