Ro<?= $this->extend('layouts/wrapper') ?>

<?= $this->section('content') ?>


<div class="product_grid">
    <div class="product_img">
        <?php $images = explode(",", $productInfo['Images']); ?>
        <img src="<?php echo base_url('/uploads/images/' . $images[0]); ?>" alt="">
        <div class="flex buttons_group">
            <button><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</button>

            <button onclick="window.location.href='<?= base_url('Home/cart/'.$productInfo['PR_ID'])?>'"> <i
                    class="fa fa-money" aria-hidden="true"></i> Buy
                now</button>

        </div>
    </div>
    <div class="product_desc">
        <h1><?= $productInfo["Name"]  ?> </h1>
        <h3 class="price">
            Offer Price: <?= $productInfo['Price'] ?><span class="cross"><?= $productInfo['Discount_Price'] ?></span>
            <span
                class="discount"><?= intval(((json_decode($productInfo['Price'])-json_decode($productInfo['Discount_Price']))/json_decode($productInfo['Price']))*100)."%";  ?></span>
        </h3>
        <p></p>
        <span class="colors">


            <div>Colors:</div>
            <div class="flex ">
                <div style="height: 3rem;width: 3rem; background-color: #47e08c; border-radius: 50%; margin: 5px; ">
                </div>
                <div style="height: 3rem;width: 3rem; background-color: #333333; border-radius: 50%;margin: 5px;">
                </div>
            </div>
        </span>
        <h1>About <?= $productInfo["Name"]  ?>!</h1>
        <p><?= $productInfo["Description"]  ?></p>
        <div>
            <div class="ratings">
            <h1>Ratings</h1>
            <p>Still working on Reviews and Ratings</p>
            <div class="rate_stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>

            </div>
            <h1>Reviews</h1>
            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias totam, tenetur ea voluptatum libero consequuntur iusto accusantium fuga minima quam sapiente. Ratione molestiae quasi aliquam perferendis, magnam quis omnis corporis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt officiis minus, ipsam eius doloremque beatae quasi quas quae omnis libero! Accusamus praesentium, dolorum dolores adipisci laudantium enim deleniti aliquam est?</p>
            <!-- <div class="flex arrivals"> -->


            <!-- <div class="user_rate flex">
                    <div class="user_prof flex">
                        <img src="../images/profile.jpg" alt="">
                        <span class="name_rating">
                            <h2>Abhiram</h2>
                        </span>
                    </div>
                    <div class="user_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>

                    </div>
                    <h5 style="margin:10px">Wonderful Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Placeat optio voluptas
                        facere aliquid, dolores quibusdam dolor natus adipisci ab provident.
                    </h5>
                </div>
                <div class="user_rate flex">
                    <div class="user_prof flex">
                        <img src="../images/profile.jpg" alt="">
                        <span class="name_rating">
                            <h2>Abhiram</h2>
                        </span>
                    </div>
                    <div class="user_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>

                    </div>
                    <h5 style="margin:10px">Wonderful Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Placeat optio voluptas
                        facere aliquid, dolores quibusdam dolor natus adipisci ab provident.
                    </h5>
                </div>
                <div class="user_rate flex">
                    <div class="user_prof flex">
                        <img src="../images/profile.jpg" alt="">
                        <span class="name_rating">
                            <h2>Abhiram</h2>
                        </span>
                    </div>
                    <div class="user_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>

                    </div>
                    <h5 style="margin:10px">Wonderful Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Placeat optio voluptas
                        facere aliquid, dolores quibusdam dolor natus adipisci ab provident.
                    </h5>
                </div>
                <div class="user_rate flex">
                    <div class="user_prof flex">
                        <img src="../images/profile.jpg" alt="">
                        <span class="name_rating">
                            <h2>Abhiram</h2>
                        </span>
                    </div>
                    <div class="user_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>

                    </div>
                    <h5 style="margin:10px">Wonderful Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Placeat optio voluptas
                        facere aliquid, dolores quibusdam dolor natus adipisci ab provident.
                    </h5>
                </div>
                <div class="user_rate flex">
                    <div class="user_prof flex">
                        <img src="../images/profile.jpg" alt="">
                        <span class="name_rating">
                            <h2>Abhiram</h2>
                        </span>
                    </div>
                    <div class="user_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>

                    </div>
                    <h5 style="margin:10px">Wonderful Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Placeat optio voluptas
                        facere aliquid, dolores quibusdam dolor natus adipisci ab provident.
                    </h5>
                </div>
                <div class="user_rate flex">
                    <div class="user_prof flex">
                        <img src="../images/profile.jpg" alt="">
                        <span class="name_rating">
                            <h2>Abhiram</h2>
                        </span>
                    </div>
                    <div class="user_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>

                    </div>
                    <h5 style="margin:10px">Wonderful Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Placeat optio voluptas
                        facere aliquid, dolores quibusdam dolor natus adipisci ab provident.
                    </h5>
                </div>
                <div class="user_rate flex">
                    <div class="user_prof flex">
                        <img src="../images/profile.jpg" alt="">
                        <span class="name_rating">
                            <h2>Abhiram</h2>
                        </span>
                    </div>
                    <div class="user_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>

                    </div>
                    <h5 style="margin:10px">Wonderful Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Placeat optio voluptas
                        facere aliquid, dolores quibusdam dolor natus adipisci ab provident.
                    </h5>
                </div>
                <div class="user_rate flex">
                    <div class="user_prof flex">
                        <img src="../images/profile.jpg" alt="">
                        <span class="name_rating">
                            <h2>Abhiram</h2>
                        </span>
                    </div>
                    <div class="user_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>

                    </div>
                    <h5 style="margin:10px">Wonderful Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Placeat optio voluptas
                        facere aliquid, dolores quibusdam dolor natus adipisci ab provident.
                    </h5>
                </div>
            </div> -->
            <!-- </div> -->










            <style>
 body {
            overflow: hidden;
        }

        h1 {
            margin: 15px 0;
        }

        .product_grid {
            display: flex;
            justify-content: space-between;
            height: 100vh;
            width: 100%;
        }

        .product_img {
            flex-basis: 20%;
            margin: 15px;
        }

        .product_desc {
            flex-basis: 80%;
            overflow-y: scroll;
            margin: 0 5rem;
            scroll-behavior: smooth;
            scrollbar-width: thin;
            padding: 15px;
            overflow-x: hidden;

        }

        .buttons_group {
            padding: 10px;
        }

        .buttons_group button {
            width: 100%;
            padding: 15px;
            font-size: larger;
            margin: 5px 0 5px 0;
        }

        .prod_buts button {
            margin: 8px;
            padding: 8px 10px;
            cursor: pointer;
        }


        .prod_page_img {
            height: 25rem;
        }

        .featured_products {
            gap: 0;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(auto, 1fr);
        }

        .cross {
            text-decoration: line-through;
            color: #e54466;
        }

        .discount {
            color: #32ac73;
        }

        .card_info {
            justify-content: center;
            flex-direction: column;
        }

        .colors {
            margin: 15px;
        }

        .rate_stars {
            color: gold;
            font-size: 2.5rem;
        }

        .user_stars {
            color: gold;
            font-size: 1rem;
            margin: 10px;
        }

        @media screen and (max-width: 800px) {
            .featured_products {
                justify-content: center;
                display: flex;
                flex-wrap: wrap;
            }



            .card_info p {
                width: 25rem;

                text-align: center;
            }

            .card {
                width: 100%;
                justify-content: center;
                align-items: center;
                flex-basis: 100%;
            }

            .product_desc {
                flex-basis: 100%;
            }

            body {
                overflow: auto;
                overflow-x: hidden;
            }

            .product_grid {
                height: auto;
                width: auto;
                flex-direction: column;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }

            .product_img {
                flex-basis: 100%;
                margin: 15px;
            }

            .product_desc {
                flex-basis: 100%;
                width: 98vw;
                overflow-x: hidden;
            }

            p {
                width: 98vw;
            }

            .arrivals {
                width: 98vw;
            }

        }

        .arrivals {
            border: none;
        }

        .user_prof img {
            height: 4rem;
            border-radius: 50%;
        }

        .user_prof {
            flex-wrap: nowrap;
        }

        .user_rate {
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            max-width: 25rem;
            border: solid 1px rgb(59, 59, 59);
            padding: 25px;
            margin: 25px 10px;
            flex-wrap: nowrap;
            width: 80rem;

        }

        .name_rating {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 25px;
        }

        .arrivals {
            overflow-x: scroll;
            scrollbar-width: thin;
        }
            </style>


        </div>
    </div>
</div>
<?= $this->endSection() ?>