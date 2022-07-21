    <?php
    session_start();
		include("connection.php");

		if(!(isset($_SESSION['username']))) {
			header("Location:login.html");
		} ?>
    <head>
        <title>Mauritius Airport Transfers</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

              <!--Google Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
<table border="1" cellspacing="10" cellpadding="5" width="100%">
	<thead>
		<tr>
			<th>Name</th>
			<th>Phone No.</th>
			<th>Vehicle Type</th>
			<th>Transfer Type</th>
			<th>Flight No.</th>
			<th>Drop off location</th>
			<th>Pick up date</th>
			<th>Pick up time</th>
			<th>No. of adult passengers</th>
			<th>No. of children passengers</th>
			<th>email</th>
			<th>No. of babyseats</th>
			<th>Contact via Whatsapp</th>
			<th>Special Requests</th>
			<th colspan="2">Operation</th>
		</tr>
	</thead>
	<tbody>

	
<?php
		$sql = "SELECT * FROM customers ORDER BY name";
		$result = mysqli_query($con, $sql);
		while($row = mysqli_fetch_assoc($result)){
		
		echo "
		<tr>
			<td><label>".$row['name']."</label></td>
			<td><label>".$row['phoneNum']."</label></td>
			<td><label>".$row['vehicleType']."</label></td>
			<td><label>".$row['transferType']."</label></td>
			<td><label>".$row['flightNum']."</label></td>
			<td><label>".$row['dropOff']."</label></td>
			<td><label>".$row['pickUpDate']."</label></td>
			<td><label>".$row['pickUpTime']."</label></td>
			<td><label>".$row['adultPassengerNum']."</label></td>
			<td><label>".$row['childrenPassengerNum']."</label>
			<td><label>".$row['email']."</label></td>
			<td><label>".$row['babyseatNumber']."</label></td>
			<td><label>".$row['whatsapp']."</label></td>
			<td><label>".$row['specialRequest']."</label></td>
			<td><label><a href = 'delete.php?phoneNum=".$row['phoneNum']."' class='btn btn-danger'>Delete</a></label></td>
			<td><label><a href = 'update.php?phoneNum=".$row['phoneNum']."&name=".$row['name']."&vt=".$row['vehicleType']."&tt=".$row['transferType']."&fn=".$row['flightNum']."&adultno=".$row['adultPassengerNum']."&childrenno=".$row['childrenPassengerNum']."' class='btn btn-success'>Update</a></label></td>



		</tr>
		"; 
	}
	?>

	<a href = "logout.php"><button type="button" class="btn btn-dark">Logout</button></a>
	


	</tbody>
</table>