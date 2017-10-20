<?php
require 'Includes/dbh-inc.php';

$pname = $_GET['pname'];
$sql = "SELECT * FROM package where name like '$pname%'";
$result = mysqli_query($conn, $sql);
$descriptions = array();
$index = 0;
if ($result) {

    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $descriptions[$index] = $row['des'];
            
            ?>
            <div class="pwraper">
                <div class="iwraper">
                    <img src="Images/3D-nature-landscape-photo-of-mountaint.jpg">
                    <p class="price" ><strong>Price : Rs.<?= $row['price'] ?>.00</strong></p>
                </div>
                <div class="cwraper">
                    <p class="description"><i><?= $row['name'] ?></i></p>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?= $index ?>">More Details</button>
                    <br>
					<?php $pack_id = $row['pack_id'] ?>
					<?php $price = $row['price'] ?>
					
					<?php //put header to action -> header(location: payment.php?pkid=$pack_id&price=$price);  GET ?>
					
					<form action="payment.php" method="post">
					<input type="number" name="pkid" value="<?=$pack_id?>" hidden="">
                    <button class="btn btn-success">Book</button>
					</form>
                </div>
            </div>
            <?php
            $index++;
        }
    } else {
        echo 'No packages in that name';
    }
} else {
    echo "error: " . $sql . "<br>" . mysqli_error($conn);
}

for ($i = 0; $i < $index; $i++) {
    ?>
    
    <div id="myModal<?=$i?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

            
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Description</h4>
                </div>
                <div class="modal-body">
                    <p><?=$descriptions[$i]?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <?php
}