<?= $this->extend('layouts/wrapper') ?>

<?= $this->section('content') ?>

<style>
.payment_content {
    min-height: 80vh;
}

.payment_item {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-items: flex-start;
    border: solid 1px;
    min-width: 80vw;
    margin: 15px;
    padding: 15px;
    border-radius: 5px;
}

.product_img {
    height: 15rem;
}
.product_info_show{
    padding:15px; 
}
.product_info_show h1,h3,p,button{
    margin:15px;
}
</style>
<div class="payment_content">
    <div class="payment_item">
        <?php $images = explode(",", $productInfo['Images']);
    ?>
        <img src="<?php echo base_url('/uploads/images/' . $images[0]); ?>" alt="" class="product_img">
        <div class="product_info_show">
            <h1><?= $productInfo["Name"]  ?> </h1>
            <h3 class="price">
                <span class="cross">Cost: <?= $productInfo['Discount_Price'] ?></span>
            </h3>
            <p><?= $productInfo["Description"]  ?></p>
            <button onclick="window.location.href='<?= base_url('Home/order/'.$productInfo['PR_ID'])?>'"> <i
                    class="fa fa-money" aria-hidden="true"></i> Buy now</button>

        </div>
    </div>
</div>
<?= $this->endSection() ?>