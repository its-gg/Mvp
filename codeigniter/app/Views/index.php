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
<div class="slider_wrap">

<div class="slider_buttons" >
    <div class="slider_button" id="slider_button_left">
        <i class="fas fa-chevron-left" class="operation_button" onclick="next()"></i>
    </div>
    <div class="slider_button" id="slider_button_right">
        <i class="fas fa-chevron-right" class="operation_button" onclick="prev()"></i>
    </div>    
</div>
<!-- <button onclick="next()" class="operation_button">next</button>
<button onclick="prev()" class="operation_button">

        prev 
    </button> -->

  <div class="myslider">
</div>
</div>  


<style>
    .slider_wrap{
        margin:5px;
    position: relative;
    }
    .slider_buttons{
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: absolute;
margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
top:50%;
    
        
        width:70vw;
    }

    .operation_button{
position: absolute;
top:50%;
        cursor: pointer;
        font-size:2.5rem;
    }
    .slider_button i{
       background: #e54466;
        color: #fff;
        padding:8px 10px;
        border-radius: 50%;
    }
.myslider img {
    width: 100vw;
    height: auto;

    aspect-ratio: attr(width) / attr(height);
  } 
</style>
<script>
    var i = 0;
    var temp =String.raw`<?= $pathforjs ?>`;
    var images =temp.split(",");
    console.log(images);
//     var images = [
// "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPLSCXzw8_PBzbHOCi1du0Ez_WXM1e3Pk7Q&usqp=CAU",
// "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFLjxTPIr3NvggwwKy1PoYOQ4U-7g5y8tCyQ&usqp=CAU",
// "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj78FcZgFNEtAOCJdzb1_UgY6Q8RQyjw9aig&usqp=CAU",
// "https://rukminim2.flixcart.com/flap/844/140/image/30fddcda8246c58d.jpg?q=50",
// "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1olZZeMngE1pzdOzqwMXRCgemf64faK7-0w&usqp=CAU",

// ];

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
<div class="flex welcome">
    <span class="flex welcomeinfo">
        <h1 id="welcomehead">Welcome to Vmake</h1>
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
<style>
     * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    /* color pallete */
    /* 
    White : #f4f3f3
Yellow: #f4a830
Blue: #3267ac
pink : #aa3788
Brick red : #e54466
    */


--root{

    /* CSS HEX */
--black: #000000ff;
--mystic: #DF437Eff;
--rufous: #AA0000ff;
--red: #FF0000ff;
--silver-pink: #CCAB9Fff;

}
.flex {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    button {
        background: #fec260;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
    }

    .buttons_group button {
        margin: 8px;
        padding: 8px 10px;
        cursor: pointer;
    }

    .buttons_group button:hover {
        background-color: #32ac73;
        color: #e6e6e6;
    }

    body {
        overflow-x: hidden;
        scroll-behavior: smooth;
        font-family: 'Josefin Sans', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    a {
        text-decoration: none;
    }

    /* Navbar */
    nav {
        height: 5rem;
        width: 100vw;
        background: rgba(235, 108, 57, 0.9);
        display: flex;
        justify-content: space-between;
    }

    nav ul li a {
        color: #2a2a2a;
    }

    .com-name {
        color: #f2f5f7;
    }

    /*Styling logo*/
    .logo {
        margin: 0.3rem 1.5rem;
        text-align: center;
        display: inherit;
        justify-content: center;
        align-items: center;
    }

    .logo img {
        height: 2rem;
    }

    /*Styling Links*/
    .nav-links {
        display: flex;
        list-style: none;
        margin: 0 10rem 0rem 0;
        text-align: center;
        padding: 0 0.7vw;
        justify-content: space-evenly;
        align-items: center;
        text-transform: uppercase;
    }

    .nav-links li a {
        text-decoration: none;
        margin: 0 0.7vw;
        font-size: 1rem;
    }

    .nav-links li:hover {
        transform: scale3d(1, 1, 1);
    }

    .nav-links li a:hover {
        color: #0c0c0c;
    }

    .nav-links li {
        position: relative;
    }

    .nav-links li a:hover::before {
        width: 80%;
    }

    /*Styling Buttons*/
    .login-button {
        background-color: transparent;
        border: 1.5px solid #f2f5f7;
        border-radius: 2em;
        padding: 0.6rem 0.8rem;
        margin-left: 2vw;
        font-size: 1rem;
        cursor: pointer;
    }

    .login-button:hover {
        color: #131418;
        background-color: #f2f5f7;
        border: 1.5px solid #f2f5f7;
        transition: all ease-in-out 350ms;
    }

    .join-button {
        color: #131418;
        background-color: #61dafb;
        border: 1.5px solid #61dafb;
        border-radius: 2em;
        padding: 0.6rem 0.8rem;
        font-size: 1rem;
        cursor: pointer;
    }

    .join-button:hover {
        color: #f2f5f7;
        background-color: transparent;
        border: 1.5px solid #f2f5f7;
        transition: all ease-in-out 350ms;
    }

    /*Styling Hamburger Icon*/
    .hamburger div {
        width: 30px;
        height: 3px;
        background: #f2f5f7;
        margin: 5px;
        transition: all 0.3s ease;
    }

    .hamburger {
        display: none;
    }

    .contact {
        margin: 1rem;
    }

    .contact h1,
    h2 {
        margin: 10px;
    }

    .sub_head {
        text-align: center;
        margin:1rem 2rem;
        font-size: 1.5rem;
    }

    .welcome {
        margin: 10px;
        align-items: center;
    }

    .welcomeinfo {
        flex-direction: column;
        flex-basis: 30%;
        margin: 15px;
        padding: 5px;
    }
    #welcomehead{
        font-size: 1.3rem;
        font-weight: bold;
        margin: 0.5rem;
    }

    .welcomeinfo p {
        font-size: 0.9rem;
        text-align: justify;
    }

    

    .welcome {
        justify-content: center;
        align-items: center;
        min-width: 90vw;
        max-width: 100%;
    }

    .welcomeimg {
        height: 10rem !important;
        max-width: 100%;
    }

    .new {
        overflow-x: scroll;
        scroll-behavior: smooth;
        scrollbar-width: thin;
        position: relative;
        flex-wrap: nowrap;
    }

    .arrivals {
        margin: 2rem;
        flex-wrap: nowrap;
        border: solid 1px rgb(44, 44, 44);
        border-radius: 10px;
        width: 80vw;
    }

    .featured_products .card {
        flex-direction: column;
        border: thin 1px;
        margin: 5px;
        padding: 10px;
        box-shadow: 0px 0px 5px 1px #e2e2e2;
        border-radius: 10px;
    }

    .featured_products .card_info {
        padding: 10px 0 0 0;
    }

    .featured_products .card_info h3 {
        text-align: center;
        margin: 5px;
    }

    .featured_products.card_info button {
        width: 100%;

    }


    .card {
        flex-direction: column;
        border: thin 1px;
        margin: 5px;
        padding: 10px;
        box-shadow: 0px 0px 5px 1px #e2e2e2;
        border-radius: 10px;
    }

    .card_info {
        padding: 10px 0 0 0;
    }

    .card_info h3 {
        text-align: center;
        margin: 5px;
    }

    .card_info button {
        width: 100%;

    }

    .new_img {
        position: absolute;
        height: 500px;
    }

    .side_img {
        height: 10rem;
    }

    .imgs_new {
        height: 15rem;
        /* border-radius: 10px; */
    }

    .category {
        justify-content: center;
        padding: 1rem;
        width: 100%;
        /* border: solid rgba(32, 32, 32, 0.5) 1px; */

        /* background-color: #ee67ee; */
    }

    .category_img {
        max-height: 18rem;
        height: auto;
        max-width: 100%;
        margin: 15px;
    }

    .category_content {
        display: grid;
        grid-template-columns: repeat(3, 0.5fr);
        grid-template-rows: repeat(2, 0.5fr);
        gap: 15px;
        padding: 2rem;
        background: rgba(106, 121, 255, 0.5);
        border-radius: 5px;
    }

    .category_content div {
        height: 5rem;
        width: 5rem ;
    }

    .category_content div a {
        font-size: 1rem;
        text-align: center;
        color: white;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        line-height: 16px; /* fallback */
        max-height: 32px; /* fallback */
        -webkit-line-clamp: 2; /* number of lines to show */
        -webkit-box-orient: vertical;
    }

 

    .category div:nth-child(1) {
        background-color: #aa3788;
    }

    .category div:nth-child(2) {
        background-color: #f4a830;
    }

    .category div:nth-child(3) {
        background-color: #3267ac;
    }

    .category div:nth-child(4) {
        background-color: #e54466;
    }

    .category div:nth-child(5) {
        background-color: #3267ac;
    }

    .category div:nth-child(6) {
        background-color: #aa3788;
    }

    .category div:nth-child(7) {
        background-color: #f4a830;
    }

    .category div:nth-child(8) {
        background-color: #e54466;
    }

    .category div:nth-child(9) {
        background-color: #3267ac;
    }

    .category_grid_card {
        background-color: #6e24f7;
        height: 8rem;
        width: 8rem;
        justify-content: center;
        align-items: center;

    }

    .featured_products {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: repeat(auto, 1fr);
        gap: 2rem;
        padding: 2rem;
        background: rgb(250, 250, 250, 0.4);
        border-radius: 5px;

    }

    footer {
        background: #131418;
        width: 100%;
        padding: 15px;
        justify-content: center;
        display:flex;
        flex-direction: row;
        

    }

    .location_info {
        flex-direction: column;
        margin: 15px;
    }

    .location_info {
        justify-content: flex-start;
        align-items: flex-start;
        color: #e2e2e2;
    }

    .location {
        display:flex;
        flex-direction: row;
        flex-wrap:nowrap;
        justify-content: center;
        padding: 15px;
        align-items: flex-start;
        background: rgba(70, 70, 70, 0.4);
        filter: opacity(8px);
        border-radius: 15px;
    }

    .maps {
        margin: 10px;
        height:50vh !important;
    }

    .footer_info {
        justify-content: space-around;
        flex-basis: 50%;
        align-items: flex-start;
    }


    .footer_info ul li {
        list-style: none;
        line-height: 2;
    }

    .footer_info ul li a {
        color: rgb(228, 228, 228);
    }

    .footer_head {
        color: rgb(228, 228, 228);
    }

    .footer_info div ul {
        margin: 5px;
    }
    

    /*Stying for small screens*/
    @media screen and (max-width: 800px) {
        .footer_info {
            flex-basis: 100%;
            margin: 15px 5px;
            justify-content: flex-start;
        }
        .location{
            flex-direction: column;
        }
        .footer{
            flex-direction: column;
            flex-wrap:wrap !important;
        }


        .side_img {
            height: 8rem;
            display: none;
        }

        .category_content {
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
        }

        .featured_products {
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
        }

        .welcome {
            flex-direction: column-reverse;
        }

        .welcomeinfo {
            flex-basis: auto;
        }

        .arrivals {
            padding: 0;
            /* margin: 5px; */
            width: 90%;
        }

        .custom-shape-divider-top-1639472401 svg {
            width: 200%;
        }

        .specf {
            margin-left: -2.5rem;
        }

        nav {
            position: relative;
            z-index: 3;
        }

        .hamburger {
            display: block;
            position: absolute;
            cursor: pointer;
            right: 5%;
            top: 50%;
            transform: translate(-5%, -50%);
            z-index: 2;
            transition: all 0.7s ease;
        }

        .nav-links {
            position: fixed;
            background: rgba(170, 55, 136);

            height: 100vh;
            width: 100%;
            flex-direction: column;
            clip-path: circle(50px at 90% -20%);
            -webkit-clip-path: circle(50px at 90% -10%);
            transition: all 1s ease-out;
            pointer-events: none;
        }

        .nav-links.open {
            clip-path: circle(1000px at 90% -10%);
            -webkit-clip-path: circle(1000px at 90% -10%);
            pointer-events: all;
        }

        .nav-links li {
            opacity: 0;
        }

        .nav-links li:nth-child(1) {
            transition: all 0.5s ease 0.2s;
        }

        .nav-links li:nth-child(2) {
            transition: all 0.5s ease 0.4s;
        }

        .nav-links li:nth-child(3) {
            transition: all 0.5s ease 0.6s;
        }

        .nav-links li:nth-child(4) {
            transition: all 0.5s ease 0.7s;
        }

        .nav-links li:nth-child(5) {
            transition: all 0.5s ease 0.8s;
        }

        .nav-links li:nth-child(6) {
            transition: all 0.5s ease 0.9s;
            margin: 0;
        }

        .nav-links li:nth-child(7) {
            transition: all 0.5s ease 1s;
            margin: 0;
        }

        li.fade {
            opacity: 1;
        }
    }

    /*Animating Hamburger Icon on Click*/
    .toggle .line1 {
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    .toggle .line2 {
        transition: all 0.7s ease;
        width: 0;
    }

    .toggle .line3 {
        transform: rotate(45deg) translate(-5px, -6px);
    }

    /* Navbar */
    #Title-small {
        font-size: 4vw;
        margin: 1rem;
        font-weight: 100;
        color: #3b185f;
        text-shadow: 0.5vw 0.1vw 0vw #fec260;
    }

    .but-reg {
        background: linear-gradient(45deg, #6e24f7, rgb(247, 57, 161));
        color: #ffff;
    }
</style>
<?= $this->endSection() ?>