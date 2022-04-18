<?= $this->extend('layouts/wrapper') ?>

<?= $this->section('content') ?>

<h1 class="sub_head">Contact Us</h1>


<div class="flex welcome">
    <span class="flex welcomeinfo">
        <h1 id="welcomehead">We are always ready to Help!</h1>
        <p>We provide 24/7 support, sit amet consectetur adipisicing elit. Quos, laudantium
            ratione! Ipsa earum pariatur sapiente labore laborum, aliquid beatae quasi illo velit eius. Nihil sunt
            quasi, omnis</p>
    </span>
    <img src="<?php echo base_url('images/Contact.png');?>
" alt="" class="contact_img">
</div>
<div class="flex welcome rev">
    <span class="flex welcomeinfo">
        <h1 id="welcomehead">Visit our store!</h1>
        <p>We provide 24/7 support, sit amet consectetur adipisicing elit. Quos, laudantium
            ratione! Ipsa earum pariatur sapiente labore laborum, aliquid beatae quasi illo velit eius. Nihil sunt
            quasi, omnis</p>
    </span>
    <img src="<?php echo base_url('images/store.png');?>" alt="" class="contact_img">
</div>
<div class="flex welcome">
    <span class="flex welcomeinfo">
        <h1 id="welcomehead">Meet out Customer team!</h1>
        <p>We provide 24/7 support, sit amet consectetur adipisicing elit. Quos, laudantium
            ratione! Ipsa earum pariatur sapiente labore laborum, aliquid beatae quasi illo velit eius. Nihil sunt
            quasi, omnis</p>
    </span>
    <img src="<?php echo base_url('images/office.png');?>" alt="" class="contact_img">
</div>
<div class="flex welcome rev">
    <span class="flex welcomeinfo">
        <h1 id="welcomehead">We have dedicated online Support!</h1>
        <p>We provide 24/7 support, sit amet consectetur adipisicing elit. Quos, laudantium
            ratione! Ipsa earum pariatur sapiente labore laborum, aliquid beatae quasi illo velit eius. Nihil sunt
            quasi, omnis</p>
    </span>
    <img src="<?php echo base_url('images/online.png');?>" alt="" class="contact_img online_pic">
</div>
<div class="flex welcome rev ">
    <span class="flex welcomeinfo ">
        <form action="<?= base_url('Home/sendcontact/') ?>" method="post" class="flex contact_us">
            <h1>We will solve your Problem!</h1>
            <span class="flex">
                <label for="name">Name</label>
                <input type="text" id="" name="name">

            </span>
            <span class="flex">
                <label for="email">Email</label>
                <input type="email" id="" name="email">


            </span>
            <span class="flex message">
                <label for="text">Message</label>
                <textarea name="" id="" cols="80" rows="80"></textarea>

            </span>
            <span>
                <button type="submit">Submit</button>
            </span>
        </form>
    </span>
    <div>
        <img src="<?php echo base_url('images/form.png');?>" alt="" class="contact_img online_pic">
        <small style="display: block;text-align: center;">Stay Calm..</small>
    </div>
</div>


    <style>
    body {
        overflow-x: hidden;
    }

    .welcome img {
        height: 30rem;
    }

    .contact_img {
        height: 30rem;
    }

    .online_pic {
        height: 25rem;
    }

    .rev {
        flex-direction: row-reverse;
        align-items: center;
    }

    .contact_us {
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        border-radius: 15px;
        background: rgba(244, 168, 48, 0.3);
        filter: opacity(5px);
        padding: 30px 25px;
        height: 35rem;
        max-width: 100%;

    }

    .contact_us h1 {
        margin: 25px;

    }


    .contact_us input,
    textarea {
        margin: 8px;
        width: 25rem;
        background: none;
        border: none;
        outline: none;
        cursor: pointer;
        height: 1.5rem;
        border-bottom: solid 1px #e54466;
    }

    .contact_us textarea {
        height: 3rem;
    }

    .contact_us span {
        margin: 10px;
    }

    .contact_us button {
        margin: 10px;
        width: 25rem;
        padding: 10px 20px;
        font-size: large;

    }

    .contact_us span {
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
    }

    @media screen and (max-width:800px) {
        .contact_img {
            height: 25rem;
        }

        .contact_us {
            width: 98vw;
        }

        .contact_us input,
        textarea {
            margin: 8px;
            width: 80vw;
            background: none;
            border: none;
            outline: none;
            cursor: pointer;
            height: 1.5rem;
            border-bottom: solid 1px #e54466;
        }

        .contact_us button {
            margin: 10px;
            width: 80vw;
            padding: 10px 20px;
            font-size: large;

        }

        .welcome img {
            height: auto;
        }
    }
    </style>


    <?= $this->endSection() ?>