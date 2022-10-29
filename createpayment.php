<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Purchase</h4>
      <ul class="breadcrumb">
        <li><a href="#">Purchase</a></li>
        <li><a href="#">Payments</a></li>
        <li><a href="#">View</a></li>
      </ul>
    </div>
    <div class="right align-center">



      <a href="v-payments.php" class="btn btn-primary ms-2"><i class="bi bi-arrow-left"></i> Back</a>
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
              <label for="">Vendor Name</label>
              <input type="text" class="shadow-cs">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Purshase Order Date</label>
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
              <label for="">Purchase Order No.</label>
              <form action="/action_page.php">
                <input type="date" id="birthday" name="birthday" class="shadow-cs">
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Expected delivery date</label>
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
              <label for="">Bill Amount</label>
              <input type="text" class="shadow-cs">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Paid</label>
              <input type="text" class="shadow-cs">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Balance</label>
              <input type="text" class="shadow-cs">
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
  <div class="card remove-padding detail-vw-wi">


    <div class="card-body fo-padding">
      
      <div class="table-wrapper">
        <table id="tb-border-radius" class="table">
          <thead>
            <tr>
              <th>S.No</th>
              <th>Receipt No</th>
              <th>Last Payment Date</th>
              <th>Payment Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>01</td>
              <td>REC-001</td>
              <td>09/10/2022</td>
              <td>500</td>
            </tr>
            <tr>
              <td>01</td>
              <td>REC-001</td>
              <td>09/10/2022</td>
              <td>500</td>
            </tr>
            <tr>
              <td>01</td>
              <td>REC-001</td>
              <td>09/10/2022</td>
              <td>500</td>
            </tr>
            <tr>
              <td>01</td>
              <td>REC-001</td>
              <td>09/10/2022</td>
              <td>500</td>
            </tr>
            
          

          </tbody>
        </table>

      
      </div>
      <div class="button-wrapper align-right mt-3">

        <button type="button" class="btn btn-secondary mr0-5 btn-sm">Create Payment</button>

      </div>
    </div>
  </div>

</div>

<?php include('common/footer.php'); ?>