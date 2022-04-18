<?php 
    use App\Controllers\Admin;

?>
<?= $this->extend('layouts/AdminWrap') ?>

<?= $this->section('Admincontent') ?>
<style>
.btn {
    width: 100%;
}

.card {
    width: 18rem;
    margin: 10px;

}
</style>

<!-- <h1 class="text-center">Admin panel</h1> -->

<div class="d-flex flex-wrap justify-content-center align-items-center">

    <div class="card  text-center border-dark">
        <div class="card-body">
            <h5 class="card-title">New Product</h5>
            <p class="card-text">We can add a product to the Vmake user portal</p>
            <a href="<?= base_url("Admin/new") ?>" class="btn btn-success">Add product</a>

        </div>
    </div>
    <div class="card text-center border-dark">
        <div class="card-body">
            <h5 class="card-title">View Products</h5>
            <p class="card-text">We can add a product to the Vmake user portal</p>
            <a href="<?= base_url("Admin/products") ?>" class="cbtn btn btn-success">View Products</a>

        </div>
    </div>
    <div class="card text-center border-dark">
        <div class="card-body">
            <h5 class="card-title">Write Testimonial</h5>
            <p class="card-text">We can a Write Testimonial to the Vmake user portal</p>
            <a href="<?= base_url("Admin/writeTestimonial") ?>" class="cbtn btn btn-success">Write Testimonial</a>

        </div>
    </div>
    <div class="card text-center border-dark">
        <div class="card-body">
            <h5 class="card-title">Testimonials</h5>
            <p class="card-text">We View all Testimonials saved in Database and Add to changes</p>
            <a href="<?= base_url("Admin/testi") ?>" class="cbtn btn btn-success">Testimonials</a>

        </div>
    </div>
    <div class="card text-center border-dark">
        <div class="card-body">
            <h5 class="card-title">Displayed Testimonial</h5>
            <p class="card-text">We can add a Testimonal to the Vmake user portal</p>
            <a href="<?= base_url("Admin/displayedTesti") ?>" class="cbtn btn btn-success">Displayed Testimonial</a>

        </div>
    </div>

</div>

<?= $this->endSection() ?>