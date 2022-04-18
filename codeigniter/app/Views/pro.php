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
    <img src="<?php echo base_url('images/welcome.png'); ?>" alt="">
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

<div>
    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/K4TOrB7at0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<!-- <h1 class="sub_head">Our Innovative Designs</h1>
<div class="flex arrivals">
    <img src="images/innovations.png" alt="" class="side_img">
    <span class="flex new ">

        <div class="card flex">
            <img src="images/blue.webp" alt="" class="imgs_new prod_page_img"
                onclick="window.location.href='products/blue.html'">
            <span class="card_info flex">
                <h3 onclick="window.location.href='products/blue.html'">Jacket</h3>
                <p>Nice looking Product</p>
                <h3 class="price">
                    Offer Price: 325 <span class="cross">858</span> <span class="discount">33%</span>
                </h3>
                <div class="flex buttons_group">
                    <button onclick="window.location.href='products/blue.html'"><i class="fa fa-shopping-cart"
                            aria-hidden="true"></i> Add to cart</button>
                    <button onclick="window.location.href='products/blue.html'"> <i class="fa fa-money"
                            aria-hidden="true"></i>
                        Buy now</button>

                </div>

            </span>
        </div>
        <div class="card flex">
            <img src=" images/cement.webp" alt="" class="imgs_new prod_page_img"
                onclick="window.location.href='products/cement.html'">
            <span class=" card_info">
                <h3 onclick="window.location.href='products/cement.html'">Cement Jacket</h3>
                <span class="card_info flex">
                    <p>Nice looking Product</p>
                    <h3 class="price">
                        Offer Price: 325 <span class="cross">858</span> <span class="discount">33%</span>
                    </h3>
                    <div class="flex buttons_group">
                        <button onclick="window.location.href='products/cement.html'"><i class="fa fa-shopping-cart"
                                aria-hidden="true"></i> Add to cart</button>
                        <button onclick="window.location.href='products/cement.html'"> <i class=" fa fa-money"
                                aria-hidden="true"></i> Buy now</button>

                    </div>

                </span>
            </span>
        </div>
        <div class="card flex">
            <img src="images/fila.jpg" alt="" class="imgs_new prod_page_img"
                onclick="window.location.href='products/cement.html'"">
                        <span class=" card_info">
            <h3 onclick="window.location.href='products/cement.html'">Fila Jacket</h3>
            <span class="card_info flex">
                <p>Nice looking Product</p>
                <h3 class="price">
                    Offer Price: 325 <span class="cross">858</span> <span class="discount">33%</span>
                </h3>
                <div class="flex buttons_group">
                    <button onclick="window.location.href='products/cement.html'""><i class=" fa fa-shopping-cart"
                        aria-hidden="true"></i> Add to cart</button>
                    <button> <i class="fa fa-money" aria-hidden="true"
                            onclick="window.location.href='products/cement.html'""></i> Buy now</button>
            
                                </div>
            
                            </span>
                        </span>
                    </div>
                    <div class=" card flex">
                            <img src="images/green.webp" alt="" class="imgs_new prod_page_img"
                                onclick="window.location.href='products/green.html'"">
                                        <span class=" card_info">
                            <h3>Green Jacket</h3>
                            <span class="card_info flex">
                                <p>Nice looking Product</p>
                                <h3 class="price">
                                    Offer Price: 325 <span class="cross">858</span> <span class="discount">33%</span>
                                </h3>
                                <div class="flex buttons_group">
                                    <button><i class="fa fa-shopping-cart" aria-hidden="true"
                                            onclick="window.location.href='products/cement.html'""></i> Add to
                                                    cart</button>
                                                <button> <i class=" fa fa-money" aria-hidden="true"
                                            onclick="window.location.href='products/cement.html'""></i> Buy now</button>
            
                                            </div>
            
                                        </span>
                        </span>
                    </div>
                    <div class=" card flex">
                                            <img src="images/red_tshrit.jpg" alt="" class="imgs_new prod_page_img"
                                                onclick="window.location.href='products/red.html'">
                                            <span class="card_info">
                                                <h3 onclick="window.location.href='products/red.html'">Jacket</h3>
                                                <span class="card_info flex">
                                                    <p>Nice looking Product</p>
                                                    <h3 class="price">
                                                        Offer Price: 325 <span class="cross">858</span> <span
                                                            class="discount">33%</span>
                                                    </h3>
                                                    <div class="flex buttons_group">
                                                        <button onclick="window.location.href='products/red.html'"><i
                                                                class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                            Add to cart</button>
                                                        <button onclick="window.location.href='products/red.html'">
                                                            <i class="fa fa-money" aria-hidden="true"></i> Buy
                                                            now</button>

                                                    </div>

                                                </span>
                                            </span>
                                </div>
                                <div class="card flex">
                                    <img src="images/some_tshirt.webp" alt="" class="imgs_new prod_page_img"
                                        onclick="window.location.href='products/some.html'">
                                    <span class=" card_info">
                                        <h3>Jacket</h3>
                                        <span class="card_info flex">
                                            <p>Nice looking Product</p>
                                            <h3 class="price">
                                                Offer Price: 325 <span class="cross">858</span> <span
                                                    class="discount">33%</span>
                                            </h3>
                                            <div class="flex buttons_group">
                                                <button onclick="window.location.href='products/some.html'"><i
                                                        class="fa fa-shopping-cart" aria-hidden="true"></i> Add to
                                                    cart</button>
                                                <button onclick="window.location.href='products/some.html'"> <i
                                                        class="fa fa-money" aria-hidden="true"></i> Buy now</button>

                                            </div>

                                        </span>
                                    </span>
                                </div>
                                <div class="card flex">
                                    <img src="images/blue.webp" alt="" class="imgs_new prod_page_img"
                                        onclick="window.location.href='products/blue.html'">
                                    <span class="card_info flex">
                                        <h3 onclick="window.location.href='products/blue.html'">Jacket</h3>
                                        <p>Nice looking Product</p>
                                        <h3 class="price">
                                            Offer Price: 325 <span class="cross">858</span> <span
                                                class="discount">33%</span>
                                        </h3>
                                        <div class="flex buttons_group">
                                            <button onclick="window.location.href='products/blue.html'"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i> Add to
                                                cart</button>
                                            <button onclick="window.location.href='products/blue.html'"> <i
                                                    class="fa fa-money" aria-hidden="true"></i>
                                                Buy now</button>

                                        </div>

                                    </span>
                                </div>
                                <div class="card flex">
                                    <img src=" images/cement.webp" alt="" class="imgs_new prod_page_img"
                                        onclick="window.location.href='products/cement.html'">
                                    <span class=" card_info">
                                        <h3 onclick="window.location.href='products/cement.html'">Cement Jacket</h3>
                                        <span class="card_info flex">
                                            <p>Nice looking Product</p>
                                            <h3 class="price">
                                                Offer Price: 325 <span class="cross">858</span> <span
                                                    class="discount">33%</span>
                                            </h3>
                                            <div class="flex buttons_group">
                                                <button onclick="window.location.href='products/cement.html'"><i
                                                        class="fa fa-shopping-cart" aria-hidden="true"></i> Add to
                                                    cart</button>
                                                <button onclick="window.location.href='products/cement.html'"> <i
                                                        class=" fa fa-money" aria-hidden="true"></i> Buy
                                                    now</button>

                                            </div>

                                        </span>
                                    </span>
                                </div>
                                <div class="card flex">
                                    <img src="images/fila.jpg" alt="" class="imgs_new prod_page_img"
                                        onclick="window.location.href='products/cement.html'"">
                                                <span class=" card_info">
                                    <h3 onclick="window.location.href='products/cement.html'">Fila Jacket</h3>
                                    <span class="card_info flex">
                                        <p>Nice looking Product</p>
                                        <h3 class="price">
                                            Offer Price: 325 <span class="cross">858</span> <span
                                                class="discount">33%</span>
                                        </h3>
                                        <div class="flex buttons_group">
                                            <button onclick="window.location.href='products/cement.html'""><i class=" fa
                                                fa-shopping-cart" aria-hidden="true">
                        </i> Add to cart</button>
                    <button> <i class="fa fa-money" aria-hidden="true"
                            onclick="window.location.href='products/cement.html'""></i> Buy now</button>
                                    
                                                        </div>
                                    
                                                    </span>
                                                </span>
                                            </div>
                                            <div class=" card flex">
                            <img src="images/green.webp" alt="" class="imgs_new prod_page_img"
                                onclick="window.location.href='products/green.html'"">
                                                                <span class=" card_info">
                            <h3>Green Jacket</h3>
                            <span class="card_info flex">
                                <p>Nice looking Product</p>
                                <h3 class="price">
                                    Offer Price: 325 <span class="cross">858</span> <span class="discount">33%</span>
                                </h3>
                                <div class="flex buttons_group">
                                    <button><i class="fa fa-shopping-cart" aria-hidden="true"
                                            onclick="window.location.href='products/cement.html'""></i> Add to
                                                                            cart</button>
                                                                        <button> <i class=" fa fa-money"
                                            aria-hidden="true" onclick="window.location.href='products/cement.html'""></i> Buy now</button>
                                    
                                                                    </div>
                                    
                                                                </span>
                                                </span>
                                            </div>
                                            <div class=" card flex">
                                            <img src="images/red_tshrit.jpg" alt="" class="imgs_new prod_page_img"
                                                onclick="window.location.href='products/red.html'">
                                            <span class="card_info">
                                                <h3 onclick="window.location.href='products/red.html'">Jacket</h3>
                                                <span class="card_info flex">
                                                    <p>Nice looking Product</p>
                                                    <h3 class="price">
                                                        Offer Price: 325 <span class="cross">858</span> <span
                                                            class="discount">33%</span>
                                                    </h3>
                                                    <div class="flex buttons_group">
                                                        <button onclick="window.location.href='products/red.html'"><i
                                                                class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                            Add to cart</button>
                                                        <button onclick="window.location.href='products/red.html'">
                                                            <i class="fa fa-money" aria-hidden="true"></i> Buy
                                                            now</button>

                                                    </div>

                                                </span>
                                            </span>
                                </div>
                                <div class="card flex">
                                    <img src="images/some_tshirt.webp" alt="" class="imgs_new prod_page_img"
                                        onclick="window.location.href='products/some.html'">
                                    <span class=" card_info">
                                        <h3>Jacket</h3>
                                        <span class="card_info flex">
                                            <p>Nice looking Product</p>
                                            <h3 class="price">
                                                Offer Price: 325 <span class="cross">858</span> <span
                                                    class="discount">33%</span>
                                            </h3>
                                            <div class="flex buttons_group">
                                                <button onclick="window.location.href='products/some.html'"><i
                                                        class="fa fa-shopping-cart" aria-hidden="true"></i> Add to
                                                    cart</button>
                                                <button onclick="window.location.href='products/some.html'"> <i
                                                        class="fa fa-money" aria-hidden="true"></i> Buy now</button>

                                            </div>

                                        </span>
                                    </span>
                                </div>
                            </span>
                </div> -->
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
<!-- 
<h1 class="sub_head">Most Loved Products</h1>


<div class="flex arrivals">
    <img src="images/loved.png" alt="" class="side_img">
    <span class="flex new ">
        <div class="card flex">
            <img src="images/blue.webp" alt="" class="imgs_new prod_page_img"
                onclick="window.location.href='products/blue.html'">
            <span class="card_info flex">
                <h3 onclick="window.location.href='products/blue.html'">Jacket</h3>
                <p>Nice looking Product</p>
                <h3 class="price">
                    Offer Price: 325 <span class="cross">858</span> <span class="discount">33%</span>
                </h3>
                <div class="flex buttons_group">
                    <button onclick="window.location.href='products/blue.html'"><i class="fa fa-shopping-cart"
                            aria-hidden="true"></i> Add to cart</button>
                    <button onclick="window.location.href='products/blue.html'"> <i class="fa fa-money"
                            aria-hidden="true"></i>
                        Buy now</button>

                </div>

            </span>
        </div>
        <div class="card flex">
            <img src=" images/cement.webp" alt="" class="imgs_new prod_page_img"
                onclick="window.location.href='products/cement.html'">
            <span class=" card_info">
                <h3 onclick="window.location.href='products/cement.html'">Cement Jacket</h3>
                <span class="card_info flex">
                    <p>Nice looking Product</p>
                    <h3 class="price">
                        Offer Price: 325 <span class="cross">858</span> <span class="discount">33%</span>
                    </h3>
                    <div class="flex buttons_group">
                        <button onclick="window.location.href='products/cement.html'"><i class="fa fa-shopping-cart"
                                aria-hidden="true"></i> Add to
                            cart</button>
                        <button onclick="window.location.href='products/cement.html'"> <i class=" fa fa-money"
                                aria-hidden="true"></i> Buy now</button>

                    </div>

                </span>
            </span>
        </div>
        <div class="card flex">
            <img src="images/fila.jpg" alt="" class="imgs_new prod_page_img"
                onclick="window.location.href='products/cement.html'"">
                                        <span class=" card_info">
            <h3 onclick="window.location.href='products/cement.html'">Fila Jacket</h3>
            <span class="card_info flex">
                <p>Nice looking Product</p>
                <h3 class="price">
                    Offer Price: 325 <span class="cross">858</span> <span class="discount">33%</span>
                </h3>
                <div class="flex buttons_group">
                    <button onclick="window.location.href='products/cement.html'""><i class=" fa fa-shopping-cart"
                        aria-hidden="true"></i> Add to cart</button>
                    <button> <i class="fa fa-money" aria-hidden="true"
                            onclick="window.location.href='products/cement.html'""></i> Buy now</button>
                            
                                                </div>
                            
                                            </span>
                                        </span>
                                    </div>
                                    <div class=" card flex">
                            <img src="images/green.webp" alt="" class="imgs_new prod_page_img"
                                onclick="window.location.href='products/green.html'"">
                                                        <span class=" card_info">
                            <h3>Green Jacket</h3>
                            <span class="card_info flex">
                                <p>Nice looking Product</p>
                                <h3 class="price">
                                    Offer Price: 325 <span class="cross">858</span> <span class="discount">33%</span>
                                </h3>
                                <div class="flex buttons_group">
                                    <button><i class="fa fa-shopping-cart" aria-hidden="true"
                                            onclick="window.location.href='products/cement.html'""></i> Add to
                                                                    cart</button>
                                                                <button> <i class=" fa fa-money" aria-hidden="true"
                                            onclick="window.location.href='products/cement.html'""></i> Buy now</button>
                            
                                                            </div>
                            
                                                        </span>
                                        </span>
                                    </div>
                                    <div class=" card flex">
                                            <img src="images/red_tshrit.jpg" alt="" class="imgs_new prod_page_img"
                                                onclick="window.location.href='products/red.html'">
                                            <span class="card_info">
                                                <h3 onclick="window.location.href='products/red.html'">
                                                    Jacket</h3>
                                                <span class="card_info flex">
                                                    <p>Nice looking Product</p>
                                                    <h3 class="price">
                                                        Offer Price: 325 <span class="cross">858</span>
                                                        <span class="discount">33%</span>
                                                    </h3>
                                                    <div class="flex buttons_group">
                                                        <button onclick="window.location.href='products/red.html'"><i
                                                                class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                            Add to cart</button>
                                                        <button onclick="window.location.href='products/red.html'">
                                                            <i class="fa fa-money" aria-hidden="true"></i> Buy
                                                            now</button>

                                                    </div>

                                                </span>
                                            </span>
                                </div>
                                <div class="card flex">
                                    <img src="images/some_tshirt.webp" alt="" class="imgs_new prod_page_img"
                                        onclick="window.location.href='products/some.html'">
                                    <span class=" card_info">
                                        <h3>Jacket</h3>
                                        <span class="card_info flex">
                                            <p>Nice looking Product</p>
                                            <h3 class="price">
                                                Offer Price: 325 <span class="cross">858</span>
                                                <span class="discount">33%</span>
                                            </h3>
                                            <div class="flex buttons_group">
                                                <button onclick="window.location.href='products/some.html'"><i
                                                        class="fa fa-shopping-cart" aria-hidden="true"></i> Add to
                                                    cart</button>
                                                <button onclick="window.location.href='products/some.html'">
                                                    <i class="fa fa-money" aria-hidden="true"></i>
                                                    Buy now</button>

                                            </div>

                                        </span>
                                    </span>
                                </div>

                            </span>
                </div>
                <h1 class="sub_head">Featured products</h1>

                <div class="featured_products">
                    <div class="card flex">
                        <img src="images/blue.webp" alt="" class="imgs_new">
                        <span class="card_info">
                            <h3>Jacket</h3>
                            <button onclick="window.location.href='Products.html'">View
                                Item</button>
                        </span>
                    </div>
                    <div class="card flex">
                        <img src="images/cement.webp" alt="" class="imgs_new">
                        <span class="card_info">
                            <h3>Jacket</h3>
                            <button onclick="window.location.href='Products.html'">View
                                Item</button>
                        </span>
                    </div>
                    <div class="card flex">
                        <img src="images/fila.jpg" alt="" class="imgs_new">
                        <span class="card_info">
                            <h3>Jacket</h3>
                            <button onclick="window.location.href='Products.html'">View
                                Item</button>
                        </span>
                    </div>
                    <div class="card flex">
                        <img src="images/green.webp" alt="" class="imgs_new">
                        <span class="card_info">
                            <h3>Jacket</h3>
                            <button onclick="window.location.href='Products.html'">View
                                Item</button>
                        </span>
                    </div>
                    <div class="card flex">
                        <img src="images/red_tshrit.jpg" alt="" class="imgs_new">
                        <span class="card_info">
                            <h3>Jacket</h3>
                            <button onclick="window.location.href='Products.html'">View
                                Item</button>
                        </span>
                    </div>
                    <div class="card flex">
                        <img src="images/some_tshirt.webp" alt="" class="imgs_new">
                        <span class="card_info">
                            <h3>Jacket</h3>
                            <button onclick="window.location.href='Products.html'">View
                                Item</button>
                        </span>
                    </div>
                    <div class="card flex">
                        <img src="images/blue.webp" alt="" class="imgs_new">
                        <span class="card_info">
                            <h3>Jacket</h3>
                            <button onclick="window.location.href='Products.html'">View
                                Item</button>
                        </span>
                    </div>
                    <div class="card flex">
                        <img src="images/cement.webp" alt="" class="imgs_new">
                        <span class="card_info">
                            <h3>Jacket</h3>
                            <button onclick="window.location.href='Products.html'">View
                                Item</button>
                        </span>
                    </div>
                    <div class="card flex">
                        <img src="images/fila.jpg" alt="" class="imgs_new">
                        <span class="card_info">
                            <h3>Jacket</h3>
                            <button onclick="window.location.href='Products.html'">View
                                Item</button>
                        </span>
                    </div>
                    <div class="card flex">
                        <img src="images/red_tshrit.jpg" alt="" class="imgs_new">
                        <span class="card_info">
                            <h3>Jacket</h3>
                            <button onclick="window.location.href='Products.html'">View
                                Item</button>
                        </span>
                    </div>

                </div>
                <a href="#" style="margin:15px;color:#2a2a2a">View More <i class="fa fa-arrow-down"
                        aria-hidden="true"></i></a> -->

<?= $this->endSection() ?>