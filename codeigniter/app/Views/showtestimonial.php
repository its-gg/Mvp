<?= $this->extend('layouts/wrapper') ?>

<?= $this->section('content') ?>

<div class="Alltestimos">

  <h1 style="text-align:center;margin:20px;">Testimonials</h1>
  <div class="all-figs">
    <?php foreach ($reviews as $row) : ?>
      <?php $images = explode(",", $row['Images']); ?>
      <figure class="snip1274">
        <i class="ion-quote"></i>
        <blockquote><?= $row['Message'] ?></blockquote>
        <div class="carousel" data-carousel>
          <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
          <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
          <ul data-slides>
            <li class="slide" data-active>
              <img class="carousel-image" src="<?php echo base_url('/uploads/images/testimonial/' . $images[0]); ?>" alt="sample90" />
              <div class="author">
                <h5> Before</h5>
              </div>
            </li>
            <li class="slide">
              <img class="carousel-image" src="<?php echo base_url('/uploads/images/testimonial/' . $images[1]); ?>" alt="sample90" />
              <div class="author">
                <h5> After</h5>
              </div>
            </li>
          </ul>

        </div>

      </figure>
    <?php endforeach ?>
  </div>
</div>

<style>
  /* Icon set - http://ionicons.com/ */
  @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
  @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);

  i {
    color: #e19eb1;
  }

  figure.snip1274 {
    font-family: 'Raleway', Arial, sans-serif;
    position: relative;
    float: left;
    overflow: hidden;
    margin: 10px 1%;
    min-width: 220px;
    max-width: 310px;
    width: 100%;
    color: #333;
    text-align: left;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    border-bottom: 10px solid #ffffff;
    height: 100%;
  }

  figure.snip1274 * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
    transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  }

  figure.snip1274 img {
    /* max-width: 100%; */
    /* vertical-align: middle; */
  }

  figure.snip1274 blockquote {
    position: relative;
    background-color: #ffffff;
    padding: 40px 25px 25px 50px;
    font-size: 0.8em;
    font-weight: 500;
    text-align: right;
    margin: 0;
    line-height: 1.6em;
    font-style: italic;
  }

  figure.snip1274 blockquote:after {
    width: 90px;
    height: 90px;
    position: absolute;
    top: 0;
    left: 0;
    content: '';
    -webkit-transition: all 0.35s ease;
    transition: all 0.35s ease;
    z-index: 1;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.35) 100%);
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.35) 100%);
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
    background-color: #454e9d;
    -webkit-transform: skew(-45deg) translateX(-50%);
    transform: skew(-45deg) translateX(-50%);
    border-right: 1px solid #454e9d;
  }

  figure.snip1274:before {
    width: 40px;
    height: 40px;
    position: absolute;
    bottom: 0;
    right: 0;
    content: '';
    -webkit-transform: skew(-45deg);
    transform: skew(-45deg);
    -webkit-transition: all 0.35s ease;
    transition: all 0.35s ease;
    z-index: 1;
    background-color: #ffffff;
    -webkit-transform: skew(-45deg) translateX(50%);
    transform: skew(-45deg) translateX(50%);
    border-right: 1px solid #ffffff;
  }

  figure.snip1274 i {
    position: absolute;
    color: #c1e0f4;
    font-size: 32px;
    z-index: 2;
    padding: 8px 12px;
  }

  figure.snip1274 .author {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 10px 20px;
    color: #ffffff;
    margin: 0;
    text-transform: uppercase;
  }

  figure.snip1274 .author h5 {
    opacity: 0.8;
    margin: 0;
    font-weight: 800;
  }

  figure.snip1274 .author h5 span {
    font-weight: 400;
    text-transform: none;
    display: block;
  }

  .slide {
    position: absolute;
    bottom: 0;
    margin: 0;
    opacity: 0;
    transition: 200ms opacity ease-in-out;
    transition-delay: 200ms;
  }

  .carousel {
    position: relative;
    height: 200px;
  }

  .carousel-image {
    width: 100%;
  }

  .slide[data-active] {
    opacity: 1;
    width: 100%;
  }

  .carousel-button {
    position: absolute;
    z-index: 2;
    background: none;
    border: none;
    font-size: 2rem;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255, 255, 255, .5);
    cursor: pointer;
    border-radius: .25rem;
    padding: 0 .5rem;
    background-color: rgba(0, 0, 0, .1);
  }

  .carousel-button:focus {
    outline: 1px solid black;
  }

  .carousel-button.prev {
    left: 1rem;
  }

  .carousel-button.next {
    right: 1rem;
  }

  .Alltestimos {
    width: 80%;
  }


  @media screen and (max-width:800px) {
    .Alltestimos {
      min-height: auto;
    }
  }
</style>
<script defer>
  const buttons = document.querySelectorAll("[data-carousel-button]")

  buttons.forEach(button => {
    button.addEventListener("click", () => {
      const offset = button.dataset.carouselButton === "next" ? 1 : -1
      const slides = button
        .closest("[data-carousel]")
        .querySelector("[data-slides]")

      const activeSlide = slides.querySelector("[data-active]")
      let newIndex = [...slides.children].indexOf(activeSlide) + offset
      if (newIndex < 0) newIndex = slides.children.length - 1
      if (newIndex >= slides.children.length) newIndex = 0

      slides.children[newIndex].dataset.active = true
      delete activeSlide.dataset.active
    })
  })
</script>
<?= $this->endSection() ?>