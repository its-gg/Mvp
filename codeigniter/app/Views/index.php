<?= $this->extend('layouts/wrapper') ?>

<?= $this->section('content') ?>

<?php    
     

    $Actual_path = [];
    $temp ="";
    foreach($banner as $row){
        $url = "/uploads/images/banner/";
        $base = base_url($url);
        // echo $base;
$temp = base_url("/uploads/images/banner/")."/".$row['path'];
array_push($Actual_path,$temp);
$temp ="";
    }
    $pathforjs = implode(",",$Actual_path);
?>

<div class="flex welcome">
    <span class="flex welcomeinfo">
        <h1 id="welcomehead">Welcome to Vmake [Deployed]</h1>
        <p>We provide Custom sticthed and Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, laudantium
            ratione! Ipsa earum pariatur sapiente labore laborum, aliquid beatae quasi illo velit eius. Nihil sunt
            quasi, omnis</p>
    </span>
    <img src="<?php echo base_url('images/welcome.png'); ?>" alt="" class="welcomeimg" >
</div>
<style>
.chatbot {
    height: 5rem;
    width: 5rem;
    position: fixed;
    bottom: 10px;
    right: 10px;
    z-index: 9999;

    border-radius: 50%;
}
</style>
<div class="chatbot">
    <img src="https://cdn.technologyadvice.com/wp-content/uploads/2018/02/friendly-chatbot.jpg" alt=""
        style="height:5rem;border-radius:50%;border: solid 1px; ">
</div>

<h1 class="sub_head">Our Product Category</h1>

<div class="flex category">
    <img src="<?php echo base_url('images/our.png');?>" alt="" class="category_img">
    <span class="flex category_content">
    <?php foreach($category as $row):  ?>
        <div class="category_grid_card flex">
        
        <a href="<?= base_url('/Home/products/'."//"."#".$row['Name']) ?>"><?= $row['Name']; ?></a>
                      
        
        </div>
        <?php endforeach; ?>
    </span>
</div>

<?= $this->endSection() ?>