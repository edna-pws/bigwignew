<?php include_once 'header.php'; ?>
  <div class="container checkout-container">
  <section class="section-checkout">
    <div class="row">
      <div class="col-md-6 form-billing">
        <h1>Billing details</h1>
         <form>
            <div class="form-group billing-firstname">
              <label for="billing_fname">First Name*</label>
              <input type="text" class="form-control" id="billing_fname" placeholder="First Name">
            </div>
            <div class="form-group billing-lastname">
              <label for="billing_lname">Last Name*</label>
              <input type="text" class="form-control" id="billing_lname" placeholder="Last name">
            </div>
            <div class="form-group">
              <label for="billing_cname">Company Name</label>
              <input type="text" class="form-control" id="billing_cname" placeholder="Company name">
            </div>
            <div class="form-group">
              <label for="billing_address">Address*</label>
              <input type="text" class="form-control" id="billing_address" placeholder="Street address">
              <input type="text" class="form-control" id="billing_address2" placeholder="Apartment, suite, unit etc. (optional)">
            </div>
            <div class="form-group">
              <label for="billing_suburb">Suburb / City*</label>
              <input type="text" class="form-control" id="billing_suburb" placeholder="Suburb / City">
            </div>
            <div class="form-group billing-country">
              <label for="billing_country">Country*</label>
              <input type="text" class="form-control" id="billing_country" placeholder="Country">
            </div>
            <div class="form-group billing-state">
              <label for="billing_state">State*</label>
              <input type="text" class="form-control" id="billing_state" placeholder="State">
            </div>
            <div class="form-group">
              <label for="billing_zip">Postcode / Zip*</label>
              <input type="text" class="form-control" id="billing_zip" placeholder="Postcode / Zip">
            </div>
            <div class="form-group billing-email">
              <label for="billing_email">Email Address*</label>
              <input type="email" class="form-control" id="billing_email" placeholder="Email address">
            </div>
            <div class="form-group billing-phone">
              <label for="billing_email">Phone*</label>
              <input type="text" class="form-control" id="billing_phone" placeholder="Phone">
            </div>
            <h1><a href="">SHIP TO A DIFFERENT ADDRESS? <i class="fa fa-chevron-circle-up"></i></a></h1>
            <div class="checkout-grayline"></div>
          </form>
      </div>
      <div class="col-md-6 form-order">
        <h1>YOUR ORDER</h1>
        <p>Lorem ipsum dolor elit consector</p>
        <div class="table table-responsive">
          <table class="table">
            <thead>
              <tr>
                <td>Product</td>
                <td>Total</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Queenie HHLF x 1</td>
                <td>$6,900.00</td>
              </tr>
              <tr>
                <td>Subtotal</td>
                <td>$1,475.00</td>
              </tr>
              <tr>
                <td>Shipping</td>
                <td>Free shipping</td>
              </tr>
              <tr>
                <td>Total</td>
                <td>$8,375.00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <h1 class="payment-head">Payment method</h1>
          <p class="payment-copy">Please choose what type of method to use</p>
          <ul class="payment_method">
            <li>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="payment_direct" value="option2">
                  <span class="copy-head">Direct Bank Transfer</span>
                </label>
              </div>
              <p class="copy">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris</p>
            </li>
            <li>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="payment_paypal" value="option2">
                  <span class="copy-head copy-thumbnail1">PayPal</span>
                </label>
              </div>
            </li>
            <li>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="payment_credit" value="option2">
                  <span class="copy-head copy-thumbnail2">Credit Card</span>
                </label>
              </div>
            </li>
          </ul>
          <div class="form-group payment-code ">
              <label for="discount_code">Have a discount code?</label>
              <input type="text" class="form-control" id="discount_code" placeholder="Code">
          </div>
      </div>
      <button type="submit" class="btn btn-default" id="place_order">Place your order</button>
    </div>
  </section>
  </div>
<?php include_once 'footer.php'; ?>
