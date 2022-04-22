<?= $this->extend('layouts/wrapper') ?>

<?= $this->section('content') ?>

<div class="Alltestimos">
        
    <h1 style="text-align:center;margin:20px;">Testimonials</h1>
    <?php foreach($reviews as $row): ?>
<?php $images = explode(",", $row['Images']); ?>
        <figure class="snip1274">
  <i class="ion-quote"></i>
  <blockquote><?= $row['Message']?></blockquote>
  <div style="display:flex;">

    <img src="<?php echo base_url('/uploads/images/testimonial/' . $images[0]); ?>" alt="sample90"/>
    <img src="<?php echo base_url('/uploads/images/testimonial/' . $images[1]); ?>" alt="sample90"/>
    <div class="author">
  </div>
    <h5> <?= $row['Name'] ?></h5>
  </div>
</figure>
    <?php endforeach ?>
</div>

<style>



/* Icon set - http://ionicons.com/ */
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);
i{
    color:#e19eb1;
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
}
figure.snip1274 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
figure.snip1274 img {
  max-width: 100%;
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




@media screen and (max-width:800px) {
    .Alltestimos {
        min-height: auto;
    }
}
</style>
<script>
    /* Demo purposes only */
    $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );

</script>
<?= $this->endSection() ?>