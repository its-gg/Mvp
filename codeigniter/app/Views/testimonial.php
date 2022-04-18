<?= $this->extend('layouts/wrapper') ?>

<?= $this->section('content') ?>

<div class="flex welcome rev sign_log">
    <span class="flex welcomeinfo ">
        <form action="<?= base_url('Home/sendtestinomial/') ?>" method="post" class="flex contact_us"
            style="align-items:center;" enctype="multipart/form-data">
            <h1 style="text-align: center; width: 100%;">Write your Views</h1>
            <span class="flex">
                <label for="name">Name</label>
                <input type="text" id="" name="name">

            </span>
            <span class="flex">
                <label for="email">Email</label>
                <input type="email" id="" name="email">


            </span>
            <span class="flex message">
                <label for="text">Image</label>
                <input type="file" id="" name="files" style="border:solid 1px #e54466;">

            </span>
            <span class="flex message">
                <label for="text">Message</label>
                <textarea name="message" id="" cols="30" rows="10"></textarea>

            </span>
            <span>
                <button type="submit">Submit</button>
            </span>
        </form>
    </span>
    <div>
        <img src="<?php echo base_url('images/join.png');?>" alt="" class="contact_img online_pic">
        <small style="display: block;text-align: center;">Join Our community</small>
    </div>
</div>

<style>
input[type=file]::file-selector-button {
    border: none;
    transition: 1s;
    height: 100%;
    border-right: solid 1px #e54466;
    border-radius: 0px;
    background-color: blanchedalmond;
    background-color: #e54466;
    color: #fff;
}



.welcome img {
    height: 35rem;
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

}

.contact_us h1 {
    margin: 15px;

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

.sign_log {
    height: 80vh;
}

@media screen and (max-width:800px) {
    .sign_log {
        height: auto;
    }

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