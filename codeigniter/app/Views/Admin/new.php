<?= $this->extend('layouts/AdminWrap') ?>

<?= $this->section('Admincontent') ?>
<h3 class="text-center">New Product</h3>
<form action="<?= base_url('Admin/store/') ?>" method="post" enctype="multipart/form-data" class="mb-3 container ">
    <div class="row p-3">

        Product Name:
        <input type="text" name="Name" id="" placeholder="Name" class="form-control col-5">
        Files: <input type="file" name="files[]" id="" multiple class="form-control col-5">
        Product id: <input type="text" name="PR_ID" id="" value="<?= PR_ID_Genarator() ?>" class="form-control col-5"
            readonly>
        Price: <input type="number" name="Price" id="" placeholder="Original price" class="form-control col-5"><br>
        Dicounted price: <input type="number" name="Discount_Price" id="" placeholder="Discount price"
            class="form-control col-5">
        Category Name:
        <!-- <input type="text" name="Category" id="" placeholder="Name" class="form-control col-5"> -->

        <select class="form-select form-control col-5" aria-label=" Default select example" name="Category">
            <?php foreach($category as $row): ?>
            <option value="<?= $row['Name'] ?>" class="form-select form-control col-5">
                <?= $row['Name'] ?>
            </option>
            <?php endforeach; ?>
        </select>
        Add Question: <br>
        <small>Once Done clicked can't edit the
            questions
            data and Questions are shown by separating with <B>//</B></small>

        <div class="row d-flex" id="questionoutput">
            <div class="form-group col-5" id="new">
            </div>

        </div>
        <input type="text" name="Questions" id="questions" value="">
        <div>
            <input type="button" class="btn btn-primary" value="Add question" style="width: min-content;"
                onclick="addnew()" id="addbutton">
            <input type="button" class="btn btn-success" value="Done" style="width: min-content;" onclick="doneall()"
                id="donebutton">

        </div>


        Description:
        <textarea name=" Description" id="" cols="30" rows="10" placeholder="Description"
            class="form-control col-5"></textarea>

        <input type="submit" class="btn btn-primary" value="Submit">

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


<script>
var temp = 0;

function addnew() {
    let z = document.getElementById("new");
    let text = document.createElement('input');
    text.type = "text";
    text.placeholder = "Question number " + temp;
    text.classList.add('form-control');
    text.classList.add('text-id');
    temp = temp + 1;
    z.appendChild(text);
}

function doneall() {
    var str = "";
    for (i = 0; i < temp; i++) {
        strings = document.querySelectorAll('.text-id')[i].value;
        str = str + strings + '//';
    }
    let text = document.getElementById("questions");
    text.value = str;
    let donebutton = document.getElementById("donebutton");
    let addbutton = document.getElementById("addbutton");

    donebutton.disabled = true;
    addbutton.disabled = true;
}
</script>


<?= $this->endSection() ?>