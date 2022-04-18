<?php
   use App\Controllers\Admin;
   ?>
<?=$this->extend('layouts/wrapper') ?>
<?=$this->section('content') ?>
<?php
   foreach ($category as $row) {
   ?>
<h1 style="text-align:center;margin:15px;"><?=$row['Name'] ?></h1>
<?php
?>
<span class="aproducts">
  <?php
   foreach ($products as $pro) {
       $temp = "";
       $temparray = [];
       $done = array();
       $images = explode(",", $pro['Images']);
       if ($row['Name'] == $pro['Category']) {
   ?>
<!--<div class="featured_products">-->
   <div class="card flex" onclick="window.location.href='<?=base_url('Home/product/' . $pro['PR_ID']) ?>'">
      <img src='<?=base_url('/uploads/images/' . $images[0]); ?>' alt="" class="imgs" style=" height: 15rem;"
         onclick="window.location.href='<?=base_url('Home/product/' . $pro['PR_ID']) ?>'">
      <span class="card_info flex">
          
         <h3 onclick="window.location.href='<?=base_url('Home/product/' . $pro['PR_ID']) ?>'"><?=$pro['Name'] ?> </h3>
         <h3 class="price">
            <B>Price:</B> <?=$pro['Price'] ?> 
         </h3>
         <h5 class="offer" > <span class="cross"><?=$pro['Discount_Price'] ?></span> <span
               class="discount" ><?=intval(((json_decode($pro['Price']) - json_decode($pro['Discount_Price'])) / json_decode($pro['Price'])) * 100) . "%"; ?> off</span></h5>
         <p class="product_desc"><?=$pro['Description'] ?></p>
         <p><B>Category:</B>  <?=$pro['Category'] ?></p>
         
      </span>
   </div>
<!--</div>-->

<?php
   }
  
   }
   ?>
  </span> 
   <?php
   }
   ?>
<style>
.offer{
    transform:scale(0.95);
}
.card_info p,h3{
    margin:8px;
    text-align:center;
}
.imgs{
    height:auto;
    max-width:100%;
}
   .aproducts .card {
   flex-direction: column;
   border: thin 1px;
   margin: 5px;
   padding: 10px;
   box-shadow: 0px 0px 5px 1px #a6a6a6 !important;
   border-radius: 10px; 
   width:15rem;
 
   }
   .aproducts {

display:flex !important;
flex-wrap:wrap !important;
justify-content:center;
align-items:center;

  
   }
   .cross {
   text-decoration: line-through;
   color: #e54466;
   margin:8px;
   }
   .discount {
   color: #32ac73;
  transform:scale(0.4);
   }
   .card_info {
   justify-content: center;
   flex-direction: column;
   }
   image:hover {
   cursor: pointer;
   }
   .imgs_new{
   max-width: 100% !important;
   height: auto !important;
   }
   .product_desc{
         word-break: break-word;
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   line-height: 16px; /* fallback */
   max-height: 32px; /* fallback */
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;
   }
</style>
<?=$this->endSection() ?>