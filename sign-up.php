<?php include_once 'header.php'; ?>
  <div class="container signup-wrapper">
    <section class="section-signup">
      <h1>MEMBERSHIP INFORMATION</h1>
      <p class="signup-copy">Choose Membership Type</p>
        <ul class="signup-head">
          <li class="active">
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle signup-dropdown beach-dropdown" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-angle-down"></i>
                Beauty Bonus Club
              </button>
              <div class="container">
              <ul class="dropdown-menu signup-list" role="menu">
                <li>
                  <span class="signup-copy">Beauty Bonus Club Membership Signup</span>
                  <span class="signup-copy1">Members may recieve special promotions or loyalty discounts.</span>
                  <span class="signup-copy2">Special pricing may be available for Bulk / Quantity or if you are a frequent shopper</span>
                <div class="row">
                  <div class="col-md-6 contact-details">
                    <span class="signup-copyhead">Contact Details</span>
                  <form class="contactdetails-form">
                    <div class="form-group form_firstname">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" id="First_Name" placeholder="First Name">
                    </div>
                    <div class="form-group form_lastname">
                      <label for="exampleInputPassword1">Surname</label>
                      <input type="text" class="form-control" id="Surname" placeholder="Surname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email Address</label>
                      <input type="email" class="form-control" id="Email_Address" placeholder="Email Address">
                    </div>
                    <div class="contact-type">
                      <p class="contact-copy">Type</p>
                      <select class="form-control" id="contact_type" required="required">
                        <option>Dance School</option>
                        <option>Community</option>
                        <option>Community</option>
                        <option>Community</option>
                        <option>Community</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone</label>
                      <input type="tel" class="form-control" id="Phone" placeholder="Phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Secondary Phone</label>
                      <input type="tel" class="form-control" id="secondary_phone" placeholder="Secondary Phone">
                    </div>
                  </form>
                  </div>
                  <div class="col-md-6 shipping-info">
                    <span class="signup-copyhead">Shipping Information</span>
                    <form class="shipping-form">
                      <div class="shipping-address">
                          <p class="shipping-copy">Street Address / Shop Address (*Click here for different invoice address)</p>
                          <select class="form-control" id="shipping-address" required="required">
                            <option>Street Address / Shop Address</option>
                            <option>Street Address / Shop Address</option>
                            <option>Street Address / Shop Address</option>
                            <option>Street Address / Shop Address</option>
                            <option>Street Address / Shop Address</option>
                          </select>
                      </div>
                      <div class="shipping-suburb">
                          <p class="shipping-copy">Suburb</p>
                          <select class="form-control" id="shipping_suburb" required="required">
                            <option>Suburb</option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                          </select>
                      </div>
                      <div class="shipping-state">
                          <p class="shipping-copy">State</p>
                          <select class="form-control" id="shipping_state" required="required">
                            <option>State</option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                          </select>
                      </div>
                      <div class="form-group shipping-postcode">
                        <label for="postcode">Postcode</label>
                      <input type="text" class="form-control" id="postcode" placeholder="Postcode">
                      </div>
                      <div class="shipping-country">
                          <p class="shipping-copy">Country</p>
                          <select class="form-control" id="shipping_country" required="required">
                            <option>Country</option>
                            <option></option>
                          </select>
                      </div>
                      <div class="form-group shipping-notes">
                        <label for="shipping-notes">Shipping Instructions / Notes</label>
                      <input type="text" class="form-control" id="shipping_notes" placeholder="Instructions Here">
                      </div>
                  </form>
                  </div>
                  <button type="submit" class="btn btn-default" id="create-account">Create account</button>
                </div>
                <p class="signup-inquiry">*FOR BULK ORDER INQUIRIES PLEASE CONTACT US ON <a href="#" class"inquiry-number">0755 315355</a></p>
                </li>
            </ul>
            </div>
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle signup-dropdown wholesale-dropdown" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-angle-down"></i>
                WHOLESALE
              </button>
              <div class="container">
              <ul class="dropdown-menu wholesale-list" role="menu">
                <li>
                  <span class="signup-copy">Wholesale Application Form</span>
                  <span class="signup-copy1">
                    To apply for access to our Wholesale Product Rates you will need to be a registered business or Sole Trader.
                    Your application will be assessed within 7 working days and upon acceptance you will be notified 
                    by email of a username and password.</span>
                  <span class="signup-copy2">Please complete all the information below (*compulsory field).</span>
                  <p class="signup-copy3">ONLINE APPLICATION ONLY AVAILABLE TO AUSTRALIAN BUSINESSES. OVERSEAS COMPANIES PLEASE PHONE +617 5531 5355</p>
                <div class="row">
                  <div class="col-md-6 contact-details">
                    <span class="signup-copyhead">Contact Details</span>
                  <form class="contactdetails-form">
                    <div class="form-group form_firstname">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" id="First_Name" placeholder="First Name">
                    </div>
                    <div class="form-group form_lastname">
                      <label for="Surname">Surname</label>
                      <input type="text" class="form-control" id="Surname" placeholder="Surname">
                    </div>
                    <div class="form-group">
                      <label for="form_lastname">Email Address</label>
                      <input type="email" class="form-control" id="form_lastname" placeholder="Email Address">
                    </div>
                    <div class="contact-type">
                      <p class="contact-copy">Type</p>
                      <select class="form-control" id="contact_type" required="required">
                        <option>Dance School</option>
                        <option>Community</option>
                        <option>Community</option>
                        <option>Community</option>
                        <option>Community</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="ABN">ABN* ( If no business name, use your name )</label>
                      <input type="text" class="form-control" id="ABN" placeholder="ABN">
                    </div>
                    <div class="form-group">
                      <label for="Phone">Phone</label>
                      <input type="tel" class="form-control" id="Phone" placeholder="Phone">
                    </div>
                    <div class="form-group">
                      <label for="secondary_phone">Secondary Phone</label>
                      <input type="tel" class="form-control" id="secondary_phone" placeholder="Secondary Phone">
                    </div>
                  </form>
                  </div>
                  <div class="col-md-6 shipping-info">
                    <span class="signup-copyhead">Shipping Information</span>
                    <form class="shipping-form">
                      <div class="shipping-address">
                          <p class="shipping-copy">Street Address / Shop Address (*Click here for different invoice address)</p>
                          <select class="form-control" id="shipping-address" required="required">
                            <option>Street Address / Shop Address</option>
                            <option>Street Address / Shop Address</option>
                            <option>Street Address / Shop Address</option>
                            <option>Street Address / Shop Address</option>
                            <option>Street Address / Shop Address</option>
                          </select>
                      </div>
                      <div class="shipping-suburb">
                          <p class="shipping-copy">Suburb</p>
                          <select class="form-control" id="shipping_suburb" required="required">
                            <option>Suburb</option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                          </select>
                      </div>
                      <div class="shipping-state">
                          <p class="shipping-copy">State</p>
                          <select class="form-control" id="shipping_state" required="required">
                            <option>State</option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                          </select>
                      </div>
                      <div class="form-group shipping-postcode">
                        <label for="postcode">Postcode</label>
                      <input type="text" class="form-control" id="postcode" placeholder="Postcode">
                      </div>
                      <div class="shipping-country">
                          <p class="shipping-copy">Country</p>
                          <select class="form-control" id="shipping_country" required="required">
                            <option>Country</option>
                            <option></option>
                          </select>
                      </div>
                      <div class="form-group shipping-notes">
                        <label for="shipping-notes">Shipping Instructions / Notes</label>
                      <input type="text" class="form-control" id="shipping_notes" placeholder="Instructions Here">
                      </div>
                  </form>
                  </div>
                  <button type="submit" class="btn btn-default" id="create-account">Create account</button>
                </div>
                <p class="signup-inquiry">*FOR BULK ORDER INQUIRIES PLEASE CONTACT US ON <a href="#" class"inquiry-number">0755 315355</a></p>
                </li>
            </ul>
            </div>
            </div>
          </li>
        </ul>
    </section>
  </div>
<?php include_once 'footer.php'; ?>
