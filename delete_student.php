<?php
include('header.php');
include('footer.php');
include('config.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php
if(isset($_GET['u_email']))
{
    $id = $_GET['u_email'];
    $sql="DELETE FROM user_data WHERE u_email='$id'";
    $result=$conn->query($sql);
    if($result)
    {
        echo "<div class='alert alert-danger success_alert' role='alert'>
        Data Deleted Successfully
          </div>";
    }
}
?>
        </div>
    </div>
</div>
