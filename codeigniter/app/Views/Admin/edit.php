<?= $this->extend('layouts/AdminWrap') ?>

<?= $this->section('Admincontent') ?>
<h3 class="text-center">Edit Product</h3>
<form action="<?= base_url('Admin/update/'.$productInfo["PR_ID"]) ?>" method="post" enctype="multipart/form-data"
    class="mb-3 container ">
    <div class="row p-3">
        <input type="text" name="ID" id="" placeholder="ID" value="<?= $productInfo['ID'] ?>" class="form-control col-5"
            hidden class="form-control col-5">
        Product Name:
        <input type="text" name="Name" id="" placeholder="Name" class="form-control col-5"
            value="<?= $productInfo['Name'] ?>">
        Produt id: <input type="text" name="PR_ID" id="" value="<?= $productInfo["PR_ID"] ?>"
            class="form-control col-5">

        Price: <input type="number" name="Price" id="" placeholder="Original price" class="form-control col-5"
            value="<?= $productInfo['Price'] ?>"><br>
        Dicounted price: <input type="number" name="Discount_Price" id="" placeholder="Discount price"
            class="form-control col-5" value="<?= $productInfo['Discount_Price'] ?>">
        Description:
        <textarea name=" Description" id="" cols="30" rows="10" placeholder="Description"
            class="form-control col-5"><?= $productInfo['Description'] ?></textarea>
        <input type="submit" class="btn btn-primary" value="Update">
    </div>
</form>
<style>
input,
textarea {
    margin: 15px;
}
</style>
<?php
function PR_ID_Genarator()
{
    $alphabets = range("a", "z");
    shuffle($alphabets);
    $randomString = substr(implode("", $alphabets), 3, 5);
    return $randomString;
}
        ?>
<?= $this->endSection() ?>