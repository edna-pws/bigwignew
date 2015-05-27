<?php include_once 'header.php'; ?>

<div class="container">
	<div class="col-md-5 p-0">
		<div class="prod-content">
			<h1 class="prod-title">10 Piece Compact</h1>
			<div class="price">Price: <span>$22</span></div>
			<div class="prod-desc">
				<p class="review">Quick Review</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dolorum et sint! Saepe eligendi corporis adipisci unde voluptate enim asperiores totam ab explicabo amet, consequuntur aspernatur, ex at labore suscipit.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam illo provident cumque possimus quaerat ad inventore iusto dicta pariatur iste id itaque, labore vitae nulla, enim perferendis! Recusandae, nostrum, vitae!</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="img-prod">
			<img src="images/blush.jpg" alt="">
		</div>
		<div class="clear">
			<a href="#">CLEAR MY SELECTION</a>
		</div>
	</div>
	<div class="col-md-3 p-0">
		<h3 class="pans-title">FILL SMALL PANS (SELECT 2 SMALL PANS FROM THIS SECTION)</h3>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default">
		    <div class="panel-heading custom-panel-heading" role="tab" id="headingOne">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          PANS ONLY
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">
		        <ul class="pans">
		        	<li><img src="images/pans-1.jpg" alt=""></li>
		        	<li><img src="images/pans-1.jpg" alt=""></li>
		        	<li><img src="images/pans-1.jpg" alt=""></li>
		        	<li><img src="images/pans-1.jpg" alt=""></li>
		        </ul>
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading custom-panel-heading" role="tab" id="headingTwo">
		      <h4 class="panel-title">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          PALETTES ONLY
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		      <div class="panel-body">

		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading custom-panel-heading" role="tab" id="headingThree">
		      <h4 class="panel-title">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          BRONZER PANS
		        </a>
		      </h4>
		    </div>
		    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="panel-body">
		        
		      </div>
		    </div>
		  </div>
		</div>
		<div class="bottom-content">
			<h3>Please made your Selection before adding to cart</h3>
		</div>
		<div class="qty">
			<form class="form-inline">
			  <div class="form-group">
			    <label class="qty-label" for="qty">Qty</label>
			    <div class="input-group">
			      <input type="number" class="form-control qty-form" id="amount" value="1">
			    </div>
			  </div>
			  <button type="submit" class="btn btn-default add-cart"><i class="fa fa-cart-plus"></i>Add to Cart</button>
			</form>
			<a class="single-wishlist wishlist-color" href="#"><i class="fa fa-heart-o"></i>Add to Wishlist</a>
		</div>
	</div>
</div>

<?php include_once 'footer.php'; ?>