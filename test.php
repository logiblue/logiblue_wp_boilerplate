<?php 
/**
* Template Name: Test Page
*/

?>


<?php get_header(); ?>

<div class="homeserv">

    <div class="homeserv-left">
    <ul class="homeserv-list">
    <li><a href="#" onmouseover="serviceText('Apples are delicious')"  data-img="http://localhost/artware/wp-content/uploads/2019/11/invictus-tailoring-sneaker-socks-yFU-bfUTEtU-unsplash.jpg">Branding</a></li>
    <li><a href="#" onmouseover="serviceText('Oranges are delicious')" data-img="http://localhost/artware/wp-content/uploads/2019/11/markus-spiske-eo3Xr2yhYVw-unsplash.jpg">Packaging</a></li>
    <li><a href="#" onmouseover="serviceText('Bananas are delicious')" data-img="http://localhost/artware/wp-content/uploads/2019/11/alexander-dummer-aS4Duj2j7r4-unsplash.jpg">Web Design</a></li>
    <li><a href="#" onmouseover="serviceText('Grapefruits are delicious')" data-img="http://localhost/artware/wp-content/uploads/2019/11/hubble-FNfgJvcMfHQ-unsplash.jpg">Photography</a></li>
    <li><a href="#" onmouseover="serviceText('Watermelons are delicious')" data-img="http://localhost/artware/wp-content/uploads/2019/11/henry-co-It1LgT8CM4w-unsplash.jpg">Websites</a></li>
    </ul>
    </div>

    <div class="homeserv-right">
        <div class="homeserv-thumb">
            <img src="http://localhost/artware/wp-content/uploads/2019/11/davisco-5E5N49RWtbA-unsplash.jpg" alt="ARTWARE" style="width:750px">
        </div>
        <div class="homeserv-serviceText" id="serviceText">Hover @ list </div>
    </div>
</div>



<?php get_footer(); ?>