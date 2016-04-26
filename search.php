<?php require_once 'partials/header.php' ?>

		<div class="row">

			<div class="col-lg-12">

				<h1 class="page-header">Search</h1>

				<form class="form-horizontal" method="GET">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit"><span class=" glyphicon glyphicon-search"></span></button>
						</span>
					</div>
				</form>

			</div>

			<div class="col-lg-12">

				<h1 class="page-header">Filters</h1>

				<form class="search form-inline" method="GET">
					<div class="form-group">
						<select id="category" name="category" class="form-control">
							<option value="">Category</option>
						</select>
					</div>

					<div class="form-group">
						<label for="price">Price</label>
						0 € <input id="price" name="price" type="text" value="" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[0,100]"/> 100 €
					</div>

					<div class="form-group">
						<label class="checkbox-inline">
							<input type="checkbox" id="picture" name="picture" value="1"> Picture
						</label>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-default">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
						</button>
					</div>
				</form>

			</div><!-- /.col-lg-12 -->

			<hr>

			<div class="col-lg-12">
				<h1 class="page-header">X search results</h1>
			</div>

			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<div class="thumbnail">
					<img src="http://placehold.it/320x150" alt="">
					<div class="caption">
						<h4 class="pull-right">64.99 €</h4>
						<h4><a href="#">Second Product</a>
						</h4>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="ratings">
						<p class="pull-right">12 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>
					<div class="btns clearfix">
						<a class="btn btn-info pull-left" href="product.php"><span class="glyphicon glyphicon-eye-open"></span> View</a>
						<a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<div class="thumbnail">
					<img src="http://placehold.it/320x150" alt="">
					<div class="caption">
						<h4 class="pull-right">64.99 €</h4>
						<h4><a href="#">Second Product</a>
						</h4>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="ratings">
						<p class="pull-right">12 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>
					<div class="btns clearfix">
						<a class="btn btn-info pull-left" href="product.php"><span class="glyphicon glyphicon-eye-open"></span> View</a>
						<a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<div class="thumbnail">
					<img src="http://placehold.it/320x150" alt="">
					<div class="caption">
						<h4 class="pull-right">64.99 €</h4>
						<h4><a href="#">Second Product</a>
						</h4>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="ratings">
						<p class="pull-right">12 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>
					<div class="btns clearfix">
						<a class="btn btn-info pull-left" href="product.php"><span class="glyphicon glyphicon-eye-open"></span> View</a>
						<a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<div class="thumbnail">
					<img src="http://placehold.it/320x150" alt="">
					<div class="caption">
						<h4 class="pull-right">64.99 €</h4>
						<h4><a href="#">Second Product</a>
						</h4>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="ratings">
						<p class="pull-right">12 reviews</p>
						<p>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</p>
					</div>
					<div class="btns clearfix">
						<a class="btn btn-info pull-left" href="product.php"><span class="glyphicon glyphicon-eye-open"></span> View</a>
						<a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
					</div>
				</div>
			</div>

		</div>

<?php require_once 'partials/footer.php' ?>