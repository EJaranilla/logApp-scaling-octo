<?php
        require('config/config.php');
        require('config/db.php');

            $sql = "SELECT id,lastname, firstname,address,logDate from person";
            $result = mysqli_query($conn,$sql);
?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID No.</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($result as $person) : ?>
                    <tr>
                    <th scope="row"><?php echo $person['id'];?></th>
                    <td><?php echo $person['lastname'];?></td>
                    <td><?php echo $person['firstname'];?></td>
                    <td><?php echo $person['address'];?></td>
                    <td><?php echo $person['logDate'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>