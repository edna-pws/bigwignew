<?php include_once 'header.php'; ?>

<div class="container review-container">
  <section class="section-review">
      <div class="row">
        <div class="col-md-4">
          <div class="list-group">
            <h4 class="list-group-item-heading">SECURE</h4>
            <a href="#" class="list-group-item">
                <p class="list-group-item-text">
                  Our Online Shopping cart uses 
                  encrypted coding to ensure your
                  private informationand credit
                  detailsare safe.
                </p>
            </a>
           </div>
           <div class="list-group">
            <h4 class="list-group-item-heading">PRIVACY</h4>
            <a href="#" class="list-group-item">
                <p class="list-group-item-text">
                  Your privacy is important to us and 
                  our policy is both transparent and plain English. 
                  Your information is NOT given or made available to any other party withou your consent
                </p>
            </a>
           </div>
           <div class="list-group">
            <h4 class="list-group-item-heading">QUALITY</h4>
            <a href="#" class="list-group-item">
                <p class="list-group-item-text">
                  When you purchase products from the Big Wig you can rest assured in the 
                  knowledge that you are dealing with a ‘real’ company, with retail outlets not 
                  just online ressller.
                </p>
            </a>
           </div>
        </div>
        <div class="col-md-8">
          <h1>Your Shopping Cart</h1>
           <div class="gallery-line"></div>
           <div class="table-responsive">
            <table class="table">
              <tr class="thead">
                  <th>Product</th>
                  <th>Description</th>
                  <th>Unit Price  </th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Remove</th>
                </tr>
                  <tr>
                    <td>Chanel HH MT</td>
                    <td>Lorem ipsum dolor</td>
                    <td>$1,150.00</td>
                    <td>
                      <form class="form-inline">
                        <div class="form-group">
                          <input class="qty-input" id="qty-number" type="text" value="6" name="qty-number">
                        </div>
                      </form>
                    <td>$6,900.00</td>
                    <td><i class="fa fa-trash-o"></i>Remove</td>
                  </tr>
                  <tr>
                    <td>Amber (8)</td>
                    <td>Lorem ipsum dolor</td>
                    <td>$295.00</td>
                    <td>
                      <form class="form-inline">
                        <div class="form-group">
                          <input class="qty-input" id="qty-number" type="text" value="6" name="qty-number">
                        </div>
                      </form>
                    </td>
                    <td>$6,900.00</td>
                    <td><i class="fa fa-trash-o"></i>Remove</td>
                  </tr>
                  <tr>
                    <td>Felicity MT</td>
                    <td>Lorem ipsum dolor</td>
                    <td>$390.00</td>
                    <td>
                      <form class="form-inline">
                        <div class="form-group">
                          <input class="qty-input" id="qty-number" type="text" value="1" name="qty-number">
                        </div>
                      </form>
                    </td>
                    <td>$6,900.00</td>
                    <td><i class="fa fa-trash-o"></i>Remove</td>
                  </tr>
                  <tr>
                    <td><span class="t-total">Sub Total</span></td>
                    <td></td>
                    <td></td>
                    <td>13 units</td>
                    <td>$8,765.00</td>
                    <td></td>
                  </tr>
            </table>
          </div>
           <div class="review-form">
             <form class="form-inline">
              <div class="form-group form-description">
                  <p class="form-control-static">Enter Discount Code</p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="discount_code" placeholder="">
              </div>
              <button type="button" class="btn btn-default list-view">View</button>
              <div class="input-group-addon">($0.00)</div>
            </form>
            <form class="form-inline">
              <div class="form-group form-description">
                  <p class="form-control-static">Enter Discount Code</p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="discount_code" placeholder="">
              </div>
              <button type="submit" class="btn btn-default">Update</button>
              <div class="input-group-addon">($0.00)</div>
            </form>
            <div class="form-shipping">
              <p class="shipping-copy">Choose Shipping Options</p>
              <select class="form-control" id="shipping_address" required="required">
                <option>Choose Shipping Options</option>
                <option>Aust</option>
                <option>China</option>
                <option>USA</option>
                <option>UAE</option>
              </select>
            </div>
            <form class="form-inline form-total">
              <div class="form-group form-description">
                  <p class="form-control-static">Total</p>
              </div>
              <div class="input-group-addon addon-total">$ 8,765.00</div>
            </form>
           </div>

           <div class="review-checkout">
            <ul class="checkout-bank">
              <span class="checkout-copy">SECURE PAYMENT ACCEPTEP</span>
               <li><img src="images/card_logos.png"</li>
              <p class="checkout-copylight">OR CHOOSE DIRECT DEBIT USING ONLINE BANKING</p>
            </ul>
            <ul class="checkout-approval list-inline">
              <li><button type="submit" class="btn btn-default" id="clear_cart">Clear Cart</button></li>
              <li class="active"><button type="submit" class="btn btn-default" id="approve_checkout"><a href="checkout-page2.php">Check Out</a></button></li>
              <p class="shipping-policy">View our <a href="">Shipping &amp; Return Policy</a></p>
            </ul> 
          </div>
        </div>
      </div>
  </section>
</div>
<?php include_once 'footer.php'; ?>
