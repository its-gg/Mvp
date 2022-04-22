<?php 
    use App\Controllers\Admin;

?>
<?= $this->extend('layouts/AdminWrap') ?>

<?= $this->section('Admincontent') ?>
<?php 
    if(session()->getFlashdata('status')){
    echo "<h4>".session()->getFlashdata('status')."</h4>";
    }
    ?>

<div class="d-flex flex-wrap">
    <?php foreach($products as $row): ?>


    <?php $images = explode(",", $row['Images']);?>

    <div class="card m-3 p-3" style="width: 18rem;">
        <img src="<?php echo base_url('/uploads/images/testimonial/' . $row['Images']); ?>" class="card-img-top border"
            alt="<?= $row['Name'] ?> pic">
        <div class="card-body">
            <h5 class="card-title"><?= $row['Name'] ?></h5>
            <h5 class="card-title">Message: <?= $row['Email'] ?></h5>


            <p class="card-text"><?= $row['Message'] ?></p>
            <a href="<?= base_url('Admin/addtesti/'.$row['ID']) ?>" class="btn btn-success">Add</a>
            <!-- <a href="#" class="btn btn-danger">Delete</a> -->

        </div>
    </div>
    <?php endforeach ?>
</div>
<?= $this->endSection() ?>