<?= $this->extend('layouts/AdminWrap') ?>

<?= $this->section('Admincontent') ?>
<h3 class="text-center">New Product</h3>
<form action="<?= base_url('Admin/sendTestimonial/') ?>" method="post" enctype="multipart/form-data" class="mb-3 container ">
    <div class="row p-3">

    Name:
        <input type="text" name="Name" id="" placeholder="Name" class="form-control col-5">
        Pictures: <input type="file" name="files[]" id="" multiple class="form-control col-5">
        Email: <input type="email" name="Email" id="" class="form-control col-5">
    PR_ID:
    <input type="text" name="PR_ID" id="" class="form-control col-5">
            
    Message:
        <textarea name="Message" id="" cols="30" rows="10" placeholder="Description"
            class="form-control col-5"></textarea>
           

        </div>


        <input type="submit" class="btn btn-primary" value="Submit">

    </div>
</form>
<style>
input,
textarea {
    margin: 15px;
}
</style>


<?= $this->endSection() ?>