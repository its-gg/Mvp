<?php
    
    echo var_dump($productInfo["Questions"]);
    $questions = explode("//",$productInfo["Questions"]);
    ?>
<?= $this->extend('layouts/wrapper') ?>

<?= $this->section('content') ?>
<style>
    #answers{
        display: none;
    }
    .main{
        height: 100vh;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
    #sendform{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;

    }
    #sendform input{
        margin:10px;
        height:30px;
    }
    small{
        margin:15px;
    }
</style>
<script>
    let questions  = <?php echo json_encode($questions); ?>;
    questions.pop();
    let questions_len = questions.length;

    console.log(questions);
    console.log(questions_len);

    var userinput = [];
    var i =-1;
    function nextquestion(){
        if(i<questions_len){
            i++; 
                     
            let answers = document.getElementById("answers");
            answers.style.display = "block";
            document.getElementById("question").innerHTML = i+ "."+questions[i];
            // userinput.push(qinput);
            console.log(userinput.push(answers.value));
            answers.value = "";   

console.log(userinput);
console.log("i value "+ i);
       
}
        if(i>=questions_len){
            document.getElementById("question").innerHTML = "PLEASE PROCEED TO PAYMENT";
            let answers = document.getElementById("answers");
answers.style.display = "none";
            document.getElementById("next").style.display = "none";
            userinput.shift();
            console.log(userinput);
            submitnow();
        }
    }
    function submitnow(){
        let sendform = document.getElementById("sendform");
        let text = document.createElement('input');
        let butt = document.createElement('button');
        let small = document.createElement('small');
        small.innerHTML = "This input is for your reference only, It is hidden and sent to the Database once payment done successfully";
        butt.innerHTML = "Submit";
        butt.type = "submit";
    text.type = "text";
    text.value = userinput;
    sendform.appendChild(text);
    sendform.appendChild(butt);
    sendform.appendChild(small);
    
    console.log("hey i am submit now");

    }
</script>
<div class="main">


<label id= "question">Please take short Survey for design</label>
<textarea name="" id="answers" cols="30" rows="10"></textarea>
<button onclick = "nextquestion()" id="next">Next</button>
<form action="" method="post" id="sendform">
</form>
</div>
<?= $this->endSection() ?>