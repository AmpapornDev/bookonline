<?php

include('../../lib/conect_database.php');
include('../../controller/home/c_detail.php');
include('../header.php');
include('../nav_menu.php');
?>

<main class='col-md-9 ms-sm-auto col-lg-10 px-md-4'>
    <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
        <h3> </h3>
        <div class='btn-toolbar mb-2 mb-md-0'>
            <a href='index.php' class='btn btn-dark'>กลับหน้าแรก</a>
        </div>
    </div>

    <div class='container'>
        <div class='row'>
            <div class='col-4'>
                <img src="../../assets/image/cover_book/<?php echo $data['image_book'] ?>" class='img-fluid' alt='...'>
            </div>
            <div class='col-8'>
                <p>
                <h5><strong>ชื่อหนังสือ : <?php echo $data['namebook_book'] ?></strong></h5>
                </p>
                <p>ผู้แต่ง : <?php echo $data['author_book'] ?></p>
                <p>ราคา : <?php echo $data['price_book'] ?> บาท</p>
                <p>รายละเอียด : <?php echo $data['detail_book'] ?></p>
            </div>

        </div>

    </div>

</main>

<?php
include('../footer.php');
?>