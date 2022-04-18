<?= $this->extend('layouts/wrapper') ?>

<?= $this->section('content') ?>

<div class="flex welcome rev">
    <span class="flex welcomeinfo">
        <h1 id="welcomehead">We are Team!</h1>
        <p>We passionated to create innovative clothings to you, sit amet consectetur adipisicing elit. Quos,
            laudantium
            ratione! Ipsa earum pariatur sapiente labore laborum, aliquid beatae quasi illo velit eius. Nihil sunt
            quasi, omnis</p>
    </span>
    <img src="<?php echo base_url('images/our.png'); ?>
" alt="" class="contact_img">
</div>
<div class="flex welcome about_column" style="justify-content: center;align-items:center;">
    <span class="flex welcomeinfo">
        <h1 id="welcomehead" style="text-align: center;">We Create and Revolutionize</h1>
    </span>
    <span class="flex" style="justify-content:center;align-items: center;">
        <img src="<?php echo base_url('images/work1.png');?>
" alt="">
        <img src="<?php echo base_url('images/work2.png');?>
" alt="" class="contact_img">
    </span>

</div>
<div class="flex welcome rev end_rev">
    <span class="flex welcomeinfo">
        <h1 id="welcomehead">We Innovate</h1>
        <p>We create innovative clothings to you, sit amet consectetur adipisicing elit. Quos,
            laudantium
            ratione! Ipsa earum pariatur sapiente labore laborum, aliquid beatae quasi illo velit eius. Nihil sunt
            quasi, omnis</p>
    </span>
    <img src="<?php echo base_url('images/innovations.png');?>
" alt="" class="contact_img">
</div>
<div class="flex welcome ">
    <span class="flex welcomeinfo">
        <h1 id="welcomehead">World's fastest growing company</h1>
        <p>We create innovative clothings to you, sit amet consectetur adipisicing elit. Quos,
            laudantium
            ratione! Ipsa earum pariatur sapiente labore laborum, aliquid beatae quasi illo velit eius. Nihil sunt
            quasi, omnis</p>
    </span>
    <img src="<?php echo base_url('images/growth.png');?>
" alt="" class="contact_img">
</div>
<div class="flex welcome rev end_rev">
    <span class="flex welcomeinfo">
        <h1 id="welcomehead">1m+ loyal fans</h1>
        <p>We create innovative clothings to you, sit amet consectetur adipisicing elit. Quos,
            laudantium
            ratione! Ipsa earum pariatur sapiente labore laborum, aliquid beatae quasi illo velit eius. Nihil sunt
            quasi, omnis</p>
    </span>
    <img src="<?php echo base_url('images/follows us.png');?>
" alt="" class="contact_img">
</div>
<style>
.rev {
    flex-direction: row-reverse;
    align-items: center;
}

.about_column {
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.end_rev {
    align-items: flex-end;
}

.welcome {
    margin: 1rem 0;
    justify-content: center;
    align-items: center;
    min-width: 90vw;
    max-width: 100%;
}

@media screen and (max-width:800px) {
    .welcome {
        justify-content: center !important;
        align-items: center !important;
    }

    .rev {
        justify-content: center !important;
        align-items: center !important;
    }

    .welcome img {
        height: auto;
    }

    .rev {
        flex-direction: row-reverse;
        align-items: center;
    }

    .about_column {
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .end_rev {
        align-items: center;
    }

}
</style>
<?= $this->endSection() ?>