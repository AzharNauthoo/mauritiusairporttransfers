<?php

include("connection.php");

$phoneNum = $_GET['phoneNum'];
$name = $_GET['name'];
$vt = $_GET['vt'];
$tt = $_GET['tt'];
$fn = $_GET['fn'];
$adultno = $_GET['adultno'];
$childrenno = $_GET['childrenno'];



?>

<form  >
               <h6 style = "font-weight:bold;">Log In Your Details</h6>
               <hr/>

                    <table class="registration_table">
                        <tr>
                            <td><strong>Phone</strong></td>
                            <td><input type="text" name="newPhoneNum" value="<?php echo"$phoneNum"?>" /></td>
                        </tr>
                        <tr>
                            <td><strong>name</strong></td>
                            <td><input type="text" name="newName" value="<?php echo"$name"?>" /></td>
                        </tr>
                        <tr>
                            <td><strong>Vehicle type</strong></td>
                            <td><input type="text" name="newVehicleType" value="<?php echo"$vt"?>" /></td>
                        </tr>
                        <tr>
                            <td><strong>Transport Type</strong></td>
                            <td>  <select  class="form-select" name="newTransferType" >
        					      <option selected value="<?php echo"$tt"?>"></option>
        					      <option value="From Airport">From Airport</option>
        					      <option value="To Airport">To Airport</option>
        					      <option value="From and To Airport (2way)">From and To Airport (2way)</option>
        					    </select>
        					</td>
                        </tr>
                        <tr>
                            <td><strong>Flight Number</strong></td>
                            <td><input type="text" name="newFlightNumber" value="<?php echo"$fn"?>" /></td>
                        </tr>
                        <tr>
                            <td><strong>Adult No.</strong></td>
                            <td><input type="number" max="10" min="1" value="<?php echo"$adultno"?>" class="form-control" name="newAdultPassengerNum"></td>
                        </tr>
                        <tr>
                            <td><strong>Children No.</strong></td>
                            <td><input type="number" max="10" min="1" value="<?php echo"$childrenno"?>" class="form-control" name="newChildrenPassengerNum"></td>
                        </tr>
                       

                        </table>
 						<input type="submit" name="submit" value ="Update Details" />
                    </form>
<?php 
if ($_GET['submit'])
{
	$newPhoneNum = $_GET['newPhoneNum'];
	$newName = $_GET['newName'];
	$newVehicleType = $_GET['newVehicleType'];
	$newTransferType = $_GET['newTransferType'];
	$newFlightNumber = $_GET['newFlightNumber'];
	$newAdultPassengerNum = $_GET['newAdultPassengerNum'];
	$newChildrenPassengerNum = $_GET['newChildrenPassengerNum'];



	$query = "UPDATE customers SET phoneNum = '$newPhoneNum', name = '$newName', vehicleType ='$newVehicleType', transferType = '$newTransferType', flightNum = '$newFlightNumber' , adultPassengerNum = '$newAdultPassengerNum', childrenPassengerNum = '$newChildrenPassengerNum'  WHERE phoneNum = '$newPhoneNum'";

	$data = mysqli_query($con, $query);
	if($data){
		header("Location:adminpage.php");
	} else 
	{
		echo "error";
	}

}


?>