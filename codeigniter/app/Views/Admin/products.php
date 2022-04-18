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


    <?php $images = explode(",", $row['Images']);
?>
    <div class="card m-3 p-3" style="width: 18rem;">
        <img src="<?php echo base_url('/uploads/images/' . $images[0]); ?>" class="card-img-top border"
            alt="<?= $row['Name'] ?> pic">
        <div class="card-body">
            <h5 class="card-title"><?= $row['Name'] ?></h5>
            <h5 class="card-title">Price: <?= $row['Price'] ?></h5>
            <h5 class="card-title">Discount Price: <?= $row['Discount_Price'] ?></h5>
            <h5 class="card-title">Discount:
                <?php echo intval(((json_decode($row['Price']) - json_decode($row['Discount_Price'])) / json_decode($row['Price'])) * 100)."%";?>
            </h5>
            <h5 class="card-title"><?= $row['Category'] ?></h5>

            <p class="card-text"><?= $row['Description'] ?></p>
            <a href="<?= base_url('Admin/edit/'.$row['PR_ID']) ?>" class="btn btn-primary">Edit</a>
            <a href="<?= base_url('Admin/delete/'.$row['PR_ID']) ?>" class="btn btn-primary">Delete</a>

        </div>
    </div>
    <?php endforeach ?>
</div>
<?= $this->endSection() ?>