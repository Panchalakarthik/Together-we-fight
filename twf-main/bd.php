
        <?php include 'ser_h1.php'; ?>

<div class="row">
    <div class="col-sm-12">
    <div class="row">

    <?php 
    require('db.php');
    $q="select * from volunteer,services,donor,address where volunteer.address_id=address.address_id and volunteer.service_id=services.service_id and services.donor_id=donor.donor_id and  donor.blood=1";
    if(isset($_GET['city']))
    {
        $q=$q." and city='".$_GET['city']."'";
    }
    $res=mysqli_query($con,$q);
    while($row=mysqli_fetch_assoc($res))
    {
        ?>
    
    <?php include 'ser_card.php';?>
            
            <?php } ?>

    
            
    </div>			
</div>

</div>			
<?php include 'ser_h2.php'; ?>