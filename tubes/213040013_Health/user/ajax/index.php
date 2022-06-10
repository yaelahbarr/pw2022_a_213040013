<?php 
    require '../functions.php';

    $keyword = $_GET["keyword"];

    $query = "SELECT * FROM tenaga_medis WHERE nama_tenmed LIKE '%$keyword%'";
    $tenmed = query($query);
?>
<div class="row mt-5">
    <?php
    foreach ($tenmed as $row){
    ?>
    <div class="col-sm-3">
    <div class="card" style="width: 18rem">
        <img
        src="../img/doctor.jpg"
        class="card-img-top"
        />
        <div class="card-body">
        <p class="card-text"><?php echo $row['nama_tenmed'] ?></p>
        </div>
    </div>
    </div>
    <?php
    }
    ?>
</div>