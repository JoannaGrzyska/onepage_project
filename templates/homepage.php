<?php 
/*Template Name:One page szablon*/
?>
<?php get_header(); ?>

<div class="carousel ">
				<img class="carousel-slide zoom"   src="<?php echo get_template_directory_uri(); ?>/assets/src/img/Heroc.webp" 
				alt="">
				<div class="carousel-description" 
			
				>
					<h2 class="justify carousel-title"><?php the_title();?></h2>
                    <p><?php the_content();?></p>
					<button class="cta" onclick="mojaFunkcja();">Shop now</button>	
                    <div id="mojeid"></div>
                    <!-- <button onclick="obiekty()">samochody</button>
                <div id="info"></div>
                    <div>
                    
                <label for="">Wpisz liczbe pomiedzy 100 a 500</label>
                <input type="number" id="pole1" min="100" max="500" required>
                <button onclick="walidacja();">sprawdz wartość w polu</button>
                <div id="info"></div>
                <button onclick="alamakota()">Wypisz koty</button>
                <div id="kot"></div>
                    <div id="mojeid1">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius accusamus non quibusdam modi tempora consequatur eos commodi ex quia fuga iure vitae rem, ullam quae quidem velit voluptas ipsum. Minus!
                    Libero eligendi repudiandae velit? Beatae voluptates ratione cum nisi debitis omnis, sapiente placeat, temporibus quia inventore magnam, soluta laudantium aliquam saepe culpa illo ipsum accusantium ut enim veritatis tempore labore?
                    Perferendis maiores molestiae, illum animi ipsam consequatur rem. Tempora voluptatum, voluptatibus, sint nemo eaque non voluptate sunt reiciendis aut dolores delectus itaque vitae beatae deserunt nam, totam qui reprehenderit labore!
                    Culpa, animi non at accusamus doloremque ipsa fuga reiciendis illum, et beatae sed facere voluptas quasi quia dolorem sapiente aliquam nam. Alias odit illo quod enim, nam ipsam ipsum sit!
                </div>
                <div id="mojeid2"></div> -->
                
            </div>
                    
				</div>
		</div>
		<div id="content" class="site-content">

		<h2 class="justify">Featured Collection</h2>
		<p class=" justify">A powerful headline about your product’s features to give focus to your chosen product collection</p>

		<ul class="block-grid">
			<li class="block-grid_product-item">
				<a href="">
					<div class="justify">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/img1.webp" class="  block_grid_product-item img" alt="">
						<p>Eternal Sunset Collection Lip and Cheek</p>
						<span class="price">$14.00</span><button class="add-to-cart cta2 btn-black">Shop now</button></div>
				</a>
			</li>
			<li class="block-grid_product-item">
				<a href="">
					<div class="justify">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/img2.webp"class=" block_grid_product-item img" alt="">
						<p>Vinopure Pore Purifying Gel Cleanser</p>
						<span class="price">$16.00 $12.00</span>
						<button class="add-to-cart cta2 btn-black">Shop now</button></div>
				</a>
			</li>
			<li class="block-grid_product-item">
				<a href="">
					<div class="justify">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/img3.webp" class=" block_grid_product-item img" alt="">
						<p>Deep Sweep 2% BHA Pore Cleaning Toner</p>
						<span class="price">$21.00</span><button class="add-to-cart cta2 btn-black">Shop now</button></div>
				</a>
			</li>
		</ul>

		<div class="carousel">
				<img class="carousel-slide" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/img4.webp" 
				alt="">
				<div class="carousel-description2"
				>
					<h2 class="justify">Highlighted Section</h2>
					<p class="justify">What differentiates you from the competition? Use this section to talk about it. Don’t forget to talk about the benefits.</p>
					<button class="cta2 btn-black">Shop now</button>	
				</div>
		</div>

		<h2 class="justify">Featured Collection</h2>
		<p class="justify">A powerful headline about your product’s features to give focus to your chosen product collection</p>
		
		<ul class="featured-categories">
		
			<li class="category-item">
				<a href="">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/img5.webp" alt="" class="category-img">
						<p class="justify category-title">Makeup</p>
					</div>
				</a>
			</li>
			<li class="category-item">
				<a href="">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/img6.webp" alt="" class="category-img">
						<p class=" justify category-title">Lipstick</p>
					</div>
				</a>
			</li>
			<li class="category-item">
				<a href="">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/img7.webp" alt="" class="category-img">
						<p class="justify category-title">Bath products</p>
					</div>
				</a>
			</li>
			<li class="category-item">
				<a href="">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/img8.webp" alt="" class="category-img">
						<p class="justify category-title">Treatments</p>
					</div>
				</a>
			</li>
		</ul>
<div class="carousel ">
	<div class="footer">
		<div class="container">
			<h2>BOTIGA</h2>
			<p>Give your customers insight into your product collection.</p>
		</div >
			 <div class="lista container"><h2>Quick links</h2>
			 <li >Home</li>
				<li>Blog</li>
				<li>Shop</li>
			</div>
			<div class="lista container"><h2>About</h2>
			 	<li>Shipping</li>
				<li>Terms</li>
				<li>Policy</li>
	</div>	</div>
	</div>
    <?php get_footer(); ?>
