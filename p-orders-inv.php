<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Purchase</h4>
      <ul class="breadcrumb">
        <li><a href="#">Purchase</a></li>
        <li><a href="#">Purchase Order</a></li>
        <li><a href="#">View</a></li>
      </ul>
    </div>
    <div class="right align-center">

     

      <a href="p-orders.php" class="btn btn-primary ms-2"><i class="bi bi-arrow-left"></i> Back</a>
    </div>
  </div>
</div>
<div class="container-fluid page-inner">
<div class="card remove-padding detail-vw-wi">
<div class="card-body fo-padding">
<div class="accordion-body remove-padding">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Select Vendor</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Delivery to</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Reference#</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                <label for="">Date#</label>
        <form action="/action_page.php">
          <input type="date" id="birthday" name="birthday" class="shadow-cs">
        </form>
      </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                <label for="">Date#</label>
        <form action="/action_page.php">
          <input type="date" id="birthday" name="birthday" class="shadow-cs">
        </form>
      </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Payment terms</label>
                    <input class="shadow-cs fade-out" placeholder="10">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Purchase Order #</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
              </div>



            </div>
</div>
</div>
  <div class="card remove-padding detail-vw-wi">
   
    
    <div class="card-body fo-padding">

      <div class="brand-wrapper fo-flx-center">
        <div class="left fo-flx-top">
          <div class="img-sec mr3">
            <img src="img/br1.png" alt="">
          </div>
          <div class="casualities">
            <h1 class="mb-3">Blue Bridge</h1>
            <div class="details fo-flx">
              <h6 class="st-wi">INVOICE NO </h6>
              <h6>#009-01</h6>
            </div>
            <div class="details fo-flx">
              <h6 class="st-wi">INVOICE DATE</h6>
              <h6>Jul 19,2022</h6>
            </div>
          </div>
        </div>
        <div class="right align-right">
          <div class="details">
            <div class="fo-flx-right mb-3">
              <h6 class="st-wi mr2">ORDER NO </h6>
              <h6>#009-01</h6>
            </div>
          </div>
          <p>TOTAL</p>
          <h1 class="big-total"> €4,275 </h1>
        </div>
      </div>
      <div class="divider w-100 mb-3"></div>
      <div class="address-wrapper fo-flx-top mb-4">
        <div class="left">
          <p>Supplier Address</p>
          <h5>Richard Welsh</h5>
          <h6>83 Park Row, Egbury, United Kingdom <br>
            amelia@abccompany.com <br>
            +44 078 7102 4793</h6>
        </div>
        <div class="right">
          <p>Delivery Address</p>
          <h5>Amelia</h5>
          <h6>83 Park Row, Egbury, United Kingdom <br>
            amelia@abccompany.com <br>
            +44 078 7102 4793</h6>
        </div>
      </div>
      <div class="table-wrapper">
        <table id="tb-border-radius" class="table">
          <thead>
            <tr>
              <th class="fo-bo-topl-bottoml">PRODUCT NAME</th>
              <th>SKU ID</th>
              <th>QTY</th>
              <th>PRICE/QTY</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                  PHAG100 with 6 <strong> </td>
              <td>W3089GTA</td>
              <td>30</td>
              <td>1500</td>
            </tr>
            <tr>
              <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                  PHAG100 with 6 <strong> </td>
              <td>W3089GTA</td>
              <td>30</td>
              <td>1500</td>
            </tr>
            <tr>
              <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                  PHAG100 with 6 <strong> </td>
              <td>W3089GTA</td>
              <td>30</td>
              <td>1500</td>
            </tr>
            <tr>
              <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                  PHAG100 with 6 <strong> </td>
              <td>W3089GTA</td>
              <td>30</td>
              <td>1500</td>
            </tr>

          </tbody>
        </table>

        <div class="table-footer fo-flx-top mt-4">
          <div class="left">
            <div class="content-1 mb-3">
              <h5 class="mb-2">Payment Method</h5>
              <h6> <strong>Paypal:</strong> payment@company.com <br>
                <strong> Card ayment we accept:</strong> Visa, Mastercard
              </h6>
            </div>
            <div class="content-2">
              <h5 class="mb-2">Terms & Conditions</h5>
              <h6>Lorem Ipsum is simply dummy text of the printing and <br>typesetting industry. Lorem
                Ipsum has been the industry's <br> standard dummy text ever since the 1500s, when an
                unknown</h6>
            </div>
          </div>
          <div class="right">
            <div class="bg-tb-bottom">
              <table class="table">
                <tbody>
                  <tr>
                    <td>Sub Total</td>
                    <td></td>
                    <td>4500</td>

                  </tr>
                  <tr>
                    <td>Tax(%)</td>
                    <td>16</td>
                    <td>1000</td>
                  </tr>
                  <tr>
                    <td>Discount(5%)</td>
                    <td>5</td>
                    <td>500</td>
                  </tr>
                  <tr>
                    <td>Advance Received</td>
                    <td></td>
                    <td>500</td>

                  </tr>
                  <tr>
                    <td>Credit Period</td>
                    <td></td>
                    <td>30</td>

                  </tr>
                  <tr>
                    <td class="remove-bo"><b>Total</b></td>
                    <td class="remove-bo"></td>
                    <td class="remove-bo"><b>4275</b></td>
                  </tr>
                </tbody>
              </table>


            </div>
            <div class="alert">
              <p>*This quotation does not required any seal or signature </p>
            </div>
          </div>
        </div>
      </div>
      <div class="button-wrapper align-right mt-3">
        <button type="button" class="btn btn-secondary mr0-5 btn-sm">View Payment Plan</button>
        <button type="button" class="btn btn-secondary mr0-5 btn-sm">Create Payment Paln</button>
        <button type="button" class="btn btn-secondary mr0-5 btn-sm">Save & Send Email</button>
        <button type="button" class="btn btn-secondary-light btn-sm">Save</button>
      </div>
    </div>
  </div>
  
</div>

<?php include('common/footer.php'); ?>