<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Purchase</h4>
      <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Vendors</a></li>
        <li><a href="#">Add</a></li>
      </ul>
    </div>
    <div class="right">

      <div class="inner-addon right-addon search_md ms-2">
        <i class="bi bi-search"></i>
        <input type="text" class="form-control" placeholder="Search" />
      </div>

      <a href="addvendor.php" class="btn btn-primary ms-2"><span><i class="bi bi-plus-lg"></i></span> Add Vendor</a>
    </div>
  </div>
</div>
<div class="container-fluid page-inner">
  <!-- Inner Nav pills -->
  <ul class="nav nav-pills custom mt-3 mb-2" id="myTabPills" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button" role="tab" aria-controls="activity" aria-selected="true"><i class="bi bi-person-fill"></i> Basic Info</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="comments-tab" data-bs-toggle="tab" data-bs-target="#comments" type="button" role="tab" aria-controls="comments" aria-selected="false"><i class="bi bi-person-lines-fill"></i>Other Details</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#email" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-geo-alt-fill"></i> Address</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#quotes" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-telephone-fill"></i>Contact Person</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-check-circle-fill"></i> Remark</button>
    </li>

  </ul>
  <div class="tab-content tab-page-inner" id="myTabContentPills">
    <!--Basic info Content -->
    <div class="tab-pane fade show active" id="activity" role="tabpanel" aria-labelledby="activity-tab">
      <div class="row">
        <div class="card remove-padding">
          <div class="ven-id">
            <p>VENDOR ID: COMNXT-091</p>
          </div>
          <div class="card-body">
            <div class="accordion-body remove-padding">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Mobile</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Company Name</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Branch Name/ID</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Primary Contact</label>
                    <div class="dropdown">
                      <span><i class="bi bi-chevron-down"></i></span>
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>



            </div>

            <div class="button-wrapper mt-3 fo-flx-right align-center">
              <!-- <h6>attachments if any <span><i class="bi bi-paperclip"></i></span></h6>
                      <button type="button" class="btn btn-secondary mr0-5 btn-sm">Cancel</button> -->
              <button type="button" class="btn btn-secondary-light btn-sm">Save</button>
            </div>

          </div>


        </div>
      </div>
    </div>

    <!-- Other details content -->
    <div class="tab-pane fade show " id="comments" role="tabpanel" aria-labelledby="comments-tab">
      <div class="row">
        <div class="card remove-padding">
          <div class="ven-id">
            <p>VENDOR ID: COMNXT-091</p>
          </div>
          <div class="card-body">
            <div class="accordion-body remove-padding">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Pan</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Opening Balance</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Payment Terms</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Tax%</label>
                    <input type="text" class="shadow-cs">
                  </div>
                </div>
              </div>



            </div>

            <div class="button-wrapper mt-3 fo-flx-right align-center">
              <!-- <h6>attachments if any <span><i class="bi bi-paperclip"></i></span></h6>
                      <button type="button" class="btn btn-secondary mr0-5 btn-sm">Cancel</button> -->
              <button type="button" class="btn btn-secondary-light btn-sm">Save</button>
            </div>

          </div>


        </div>
      </div>
    </div>

    <!-- Address Content -->
    <div class="tab-pane fade show " id="email" role="tabpanel" aria-labelledby="email-tab">
      <div class="row">
        <div class="card remove-padding">
          <div class="ven-id">
            <p>VENDOR ID: COMNXT-091</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="address-wrap">
                  <div class="header">
                    <h6>Billing Address</h6>
                  </div>
                  <div class="accordion-body">
                    <div class="row">
                      <div class="form-flex fo-flx-js-sb">
                        <div class="form-group">
                          <label for="">Attention</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        <div class="form-group">
                          <label for="">Phone</label>
                          <input type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="shadow-cs">
                      </div>
                      <div class="form-flex fo-flx-js-sb">
                        <div class="form-group">
                          <label for="">Country</label>
                          <div class="dropdown">
                            <span><i class="bi bi-chevron-down"></i></span>
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown button
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="">State/Province</label>
                          <input type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="">City</label>
                        <input type="text">
                      </div>
                      <div class="form-group">
                        <label for="">Zip Code</label>
                        <input type="text">
                      </div>
                      <div class="form-group">
                        <label for="">Fax</label>
                        <input type="text">
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                        <label class="form-check-label" for="flexCheckDefault2">Use same address for shipping
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="address-wrap">
                  <div class="header">
                    <h6>Shipping Address</h6>
                  </div>
                  <div class="accordion-body">
                    <div class="row">
                      <div class="form-flex fo-flx-js-sb">
                        <div class="form-group">
                          <label for="">Attention</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        <div class="form-group">
                          <label for="">Phone</label>
                          <input type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="shadow-cs">
                      </div>
                      <div class="form-flex fo-flx-js-sb">
                        <div class="form-group">
                          <label for="">Country</label>
                          <div class="dropdown">
                            <span><i class="bi bi-chevron-down"></i></span>
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown button
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="">State/Province</label>
                          <input type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="">City</label>
                        <input type="text">
                      </div>
                      <div class="form-group">
                        <label for="">Zip Code</label>
                        <input type="text">
                      </div>
                      <div class="form-group">
                        <label for="">Fax</label>
                        <input type="text">
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                        <label class="form-check-label" for="flexCheckDefault2">Use same address for shipping
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="button-wrapper mt-3 fo-flx-right align-center">
              <!-- <h6>attachments if any <span><i class="bi bi-paperclip"></i></span></h6>
                      <button type="button" class="btn btn-secondary mr0-5 btn-sm">Cancel</button> -->
              <button type="button" class="btn btn-secondary-light btn-sm">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Person Content -->
    <div class="tab-pane fade show " id="quotes" role="tabpanel" aria-labelledby="quotes-tab">
      <div class="row">
        <div class="card remove-padding">
          <div class="card-body">
            Contact Person
          </div>
        </div>
      </div>
    </div>

    <!-- Remarks Content -->
    <div class="tab-pane fade show " id="orders" role="tabpanel" aria-labelledby="orders-tab">
      <div class="row">
        <div class="card remove-padding">
          <div class="card-body">
            Remarks
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php include('common/footer.php'); ?>