
		<div class="subheader">
			<div class="left">
				<span class="page-title">Noticias</span>
				<span class="page-desc">Lorem ipsum dolor sit amet consectuer adisplicing</span>
			</div>
		</div>
		<!--subheader -->
		
		
		<div id="content">
			<div class="two-third">
				

			<?php 
			    foreach($res_feed as $item):
			    //cho $item->get_link();
			    if ($enclosure = $item->get_enclosure())
					{
						echo "<a href='' alt='" . $item->get_title(). "'>" . $item->get_title(). "</a>";
					}
				endforeach; 
			?>

				<div class="post-item post-blog">
					<div class="image-place">
						<img src="<?php echo base_url(); ?>public/images/uploads/620x220/temple-kyoto.jpg" alt="image" />
					</div>
					<div class="post-date">
						<span class="post-date-day">24</span>
						<span class="post-date-month">Sep</span>
					</div>
					<div class="post-content">
						<h2 class="post-title"><a href="blog-single.html">Japan Religious Travel Destination</a></h2>
						<p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla mi et eros ornare quis molestie magna adipiscing. Sed a urna nulla, non bibendum nulla. Praesent vitae vehicula eros. Aliquam erat volutpat. Vivamus vitae sem et mauris fermentum feugiat eget quis diam.</p>
					</div>
					<div class="post-meta">
						<span class="comment-count">22 Comments</span>
						<a class="read-more" href="blog-single.html">Read More</a>
					</div>
				</div>
				<!--post-item post-blog -->
				
				<div class="post-item post-blog">
					<div class="image-place">
						<img src="<?php echo base_url(); ?>public/images/uploads/620x220/egypt.jpg" alt="image" />
					</div>
					<div class="post-date">
						<span class="post-date-day">24</span>
						<span class="post-date-month">Sep</span>
					</div>
					<div class="post-content">
						<h2 class="post-title"><a href="blog-single.html">Pyramid of Egypt Adventure</a></h2>
						<p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla mi et eros ornare quis molestie magna adipiscing. Sed a urna nulla, non bibendum nulla. Praesent vitae vehicula eros. Aliquam erat volutpat. Vivamus vitae sem et mauris fermentum feugiat eget quis diam.</p>
					</div>
					<div class="post-meta">
						<span class="comment-count">12 Comments</span>
						<a class="read-more" href="blog-single.html">Read More</a>
					</div>
				</div>
				<!--post-item post-blog -->
				
				<div class="post-item post-blog">
					<div class="image-place">
						<img src="<?php echo base_url(); ?>public/images/uploads/620x220/mount-rushmore.jpg" alt="image" />	
					</div>
					<div class="post-date">
						<span class="post-date-day">24</span>
						<span class="post-date-month">Sep</span>
					</div>
					<div class="post-content">
						<h2 class="post-title"><a href="blog-single.html">Patriotic Holiday on Mount Rushmore</a></h2>
						<p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla mi et eros ornare quis molestie magna adipiscing. Sed a urna nulla, non bibendum nulla. Praesent vitae vehicula eros. Aliquam erat volutpat. Vivamus vitae sem et mauris fermentum feugiat eget quis diam.</p>
					</div>
					<div class="post-meta">
						<span class="comment-count">72 Comments</span>
						<a class="read-more" href="blog-single.html">Read More</a>
					</div>
				</div>
				<!--post-item post-blog -->
				
				<div class="post-item post-blog">
					<div class="image-place">
						<img src="<?php echo base_url(); ?>public/images/uploads/620x220/st-basil.jpg" alt="image" />
					</div>
					<div class="post-date">
						<span class="post-date-day">24</span>
						<span class="post-date-month">Sep</span>
					</div>
					<div class="post-content">
						<h2 class="post-title"><a href="blog-single.html">Landmarks in Moscow</a></h2>
						<p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla mi et eros ornare quis molestie magna adipiscing. Sed a urna nulla, non bibendum nulla. Praesent vitae vehicula eros. Aliquam erat volutpat. Vivamus vitae sem et mauris fermentum feugiat eget quis diam.</p>
					</div>
					<div class="post-meta">
						<span class="comment-count">32 Comments</span>
						<a class="read-more" href="blog-single.html">Read More</a>
					</div>
				</div>
				<!--post-item post-blog -->
			</div>
			<!--two-third -->
			<?php include('sidebar-right.php'); ?>
			<!--one-third -->
			
			<div class="hr"><hr /></div>
						
			<div class="action-box">
				<div class="left">
					<div class="action-title">Consultenos por su necesidad especifica:	</div>
					<div class="action-desc">Mavi tours posee los servicios deacuerdo a las necesidades de transporte de nuestros clientes </div>
				</div>
				<div class="right">
					<a class="button">
						Consultar
					</a>
				</div>
			</div>
			<!--action-box -->		
						
			<br class="clear" />	
		</div>
		<!--content -->
	
	</div>
	<!--container -->
