<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<div class="myslider">
</div>
<div class="slider_buttons">

<button onclick="next()">next</button>
<button onclick="prev()">

        prev 
    </button>
    </div>
<style>
    .slider_buttons{
        display: flex;
        justify-content: center;
        align-items: center;
    }
.myslider img {
    width: 100%;
    height: auto;
    aspect-ratio: attr(width) / attr(height);
  } 
</style>
<script>
    var i = 0;
    var images = [
"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPLSCXzw8_PBzbHOCi1du0Ez_WXM1e3Pk7Q&usqp=CAU",
"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFLjxTPIr3NvggwwKy1PoYOQ4U-7g5y8tCyQ&usqp=CAU",
"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj78FcZgFNEtAOCJdzb1_UgY6Q8RQyjw9aig&usqp=CAU",
"https://rukminim2.flixcart.com/flap/844/140/image/30fddcda8246c58d.jpg?q=50",
"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1olZZeMngE1pzdOzqwMXRCgemf64faK7-0w&usqp=CAU",

];

    function next() {
        i++;
        if (i >= images.length) {
            i = 0;
        }
        document.querySelector(".myslider").innerHTML = "<img src='" + images[i] + "'>";
    }
    function prev() {
        i--;
        if (i < 0) {
            i = images.length - 1;
        }
        document.querySelector(".myslider").innerHTML = "<img src='" + images[i] + "'>";

    }
    setInterval(() => {
        next();
        console.log("hi");
    }, 2500);


</script>

</body>
</html>