<?= $this->extend('layouts/AdminWrap') ?>

<?= $this->section('Admincontent') ?>
<h3 class="text-center">New Category</h3>
<form action="<?= base_url('Admin/createcategory/') ?>" method="post" enctype="multipart/form-data"
    class="mb-3 container ">
    <div class="row p-3">

        Name:
        <input type="text" name="Name" id="" placeholder="Name" class="form-control col-5">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</form>
<div class="container">
    <h3 class="text-center">Categories Listed</h3>

    <ul class="list-group">
        <?php foreach($category as $row): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <?= $row['Name'] ?>

        </li>
        <?php endforeach; ?>
    </ul>
</div>

<style>
input,
textarea {
    margin: 15px;
}
</style>
<?= $this->endSection() ?>