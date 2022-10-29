<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Purchase</h4>
      <ul class="breadcrumb">
        <li><a href="#">Purchase</a></li>
        <li><a href="#">Purchase Order</a></li>
        <li><a href="#">Create</a></li>
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
              <label for="">Primary Contact</label>
              <div class="dropdown">
                <span><i class="bi bi-chevron-down"></i></span>
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  select
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
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
              <label for="">Reference#</label>
              <input type="text" class="shadow-cs">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Purchase Order</label>
              <div class="dropdown">
                <span><i class="bi bi-chevron-down"></i></span>
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  select
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Bill Amount</label>
              <input class="shadow-cs fade-out" placeholder="10">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Payment Terms</label>
              <input class="shadow-cs fade-out" placeholder="10">
            </div>
          </div>
          <div class="col-md-12">
            <div class="divider mt-3 mb-3 remove-padding"></div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Enter Amount</label>
              <input class="shadow-cs" placeholder="10">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Receipt No.</label>
              <input class="shadow-cs fade-out" placeholder="REC 4354">
            </div>
          </div>
          <div class="col-md-12 mt-1">
            <div class="form-group gp">
              <div class="top fo-flx-js-sb">
                <label for="">Enter Amount</label>
                <h6>attachments if any <span><i class="bi bi-paperclip"></i></span></h6>
              </div>
              <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="col-md-12 text-right ">
            <div class="form-group inp-rg">
              <label class="mr1" for="">Balance</label>
              <input class="shadow-cs fade-out" placeholder="REC 4354">
            </div>
          </div>
        </div>
        <div class="button-wrapper mt-3 fo-flx-right align-center">
          <!-- <h6>attachments if any <span><i class="bi bi-paperclip"></i></span></h6> -->
          <button type="button" class="btn btn-secondary mr0-5 btn-sm">Cancel</button>
          <button type="button" class="btn btn-secondary-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask">Save</button>
        </div>


      </div>
    </div>
  </div>


</div>
<div class="modal fade" id="addTask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body form-group">

        <div class="popup text-center">
          <i class="bi bi-exclamation-circle text-primary"></i>
          <h6 style="font-size: 30px;">Are you sure do you want
            to save the payment?</h6>
          <div class="button-wrapper mt-3 fo-flx-js-center align-center">
            <!-- <h6>attachments if any <span><i class="bi bi-paperclip"></i></span></h6> -->
            <button type="button" class="btn btn-secondary mr0-5 btn-sm">Cancel</button>
            <button type="button" class="btn btn-secondary-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask">Save</button>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
<?php include('common/footer.php'); ?>