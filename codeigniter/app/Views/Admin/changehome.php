<?= $this->extend('layouts/AdminWrap') ?>

<?= $this->section('Admincontent') ?>
<h3 class="text-center">Add Banner Image</h3>
<form action="<?= base_url('Admin/storebannerimgs/') ?>" method="post" enctype="multipart/form-data"
    class="mb-3 container ">
    <div class="row p-3">

Banner pic: <input type="file" name="theFile" id="" multiple class="form-control col-5">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>
<div class="acentered">


<?php foreach($banner as $row): ?>
        
            <img src="<?= base_url('/uploads/images/banner/'.$row['path']) ?>">
        <?php endforeach; ?>
        </div>
<style>
    .acentered{
        display:flex;
        justify-content:center;
        flex-wrap:wrap;
        margin:auto;
    }
    .acentered img{
        height: 20rem;
    }
input,
textarea {
    margin: 15px;
}
</style>
<?= $this->endSection() ?>