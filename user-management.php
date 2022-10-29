<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>User Management</h4>
      <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">User Management</a></li>
      </ul>
    </div>
    <div class="right">

      <div class="inner-addon right-addon search_md ms-2">
        <i class="bi bi-search"></i>
        <input type="text" class="form-control" placeholder="Search" />
      </div>
      <button type="button" class="btn btn-primary ms-2" data-bs-toggle="offcanvas" data-bs-target="#addUser" aria-controls="offcanvasRight">
        <i class="bi bi-person-fill"></i> Add User</button>
      <button type="button" class="btn btn-primary ms-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight-cr" aria-controls="offcanvasRight-cr">
        <i class="bi bi-person-fill"></i> Add Role</button>
    </div>
  </div>
</div>

<ul class="nav nav-tabs page-nav" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="ecomsale-tab" data-bs-toggle="tab" data-bs-target="#ecomsale" type="button" role="tab" aria-controls="home" aria-selected="true">
      <i class="bi bi-bag-check-fill"></i>Users</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="dirsale-tab" data-bs-toggle="tab" data-bs-target="#dirsale" type="button" role="tab" aria-controls="profile" aria-selected="false">
      <i class="bi bi-geo-alt-fill"></i>Roles</button>
  </li>
</ul>

<div class="tab-content tab-page" id="myTabContent">
  <div class="tab-pane fade show active" id="ecomsale" role="tabpanel" aria-labelledby="ecomsale-tab">
    <div class="page-inner">
      <div class="profile-flx-wrapper">

        <div class="card card-pd text-center">
          <div class="pro-hov-content">
            <div class="prof-al-center sml">
              <div class="ic-right">
                <i class="bi bi-pencil-square"></i>
              </div>
              <div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Email</h6>
                    <h6>test@gmail.com</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Phone</h6>
                    <h6>87647 67665</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-calendar-event"></i>
                  </div>
                  <div class="cc">
                    <h6>Date</h6>
                    <h6>Jun 24, 2022</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body remove-padding text-center">

            <div class="pro-sec">
              <img src="img/f1.jpg" alt="">
            </div>
            <div class="details mt-3">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>

            </div>
          </div>
        </div>
        <div class="card card-pd text-center">
          <div class="pro-hov-content">
            <div class="prof-al-center sml">
              <div class="ic-right">
                <i class="bi bi-pencil-square"></i>
              </div>
              <div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Email</h6>
                    <h6>test@gmail.com</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Phone</h6>
                    <h6>87647 67665</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-calendar-event"></i>
                  </div>
                  <div class="cc">
                    <h6>Date</h6>
                    <h6>Jun 24, 2022</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body remove-padding text-center">

            <div class="pro-sec">
              <img src="img/f1.jpg" alt="">
            </div>
            <div class="details mt-3">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>
            </div>
          </div>
        </div>
        <div class="card card-pd text-center">
          <div class="pro-hov-content">
            <div class="prof-al-center sml">
              <div class="ic-right">
                <i class="bi bi-pencil-square"></i>
              </div>
              <div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Email</h6>
                    <h6>test@gmail.com</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Phone</h6>
                    <h6>87647 67665</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-calendar-event"></i>
                  </div>
                  <div class="cc">
                    <h6>Date</h6>
                    <h6>Jun 24, 2022</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body remove-padding text-center">

            <div class="pro-sec">
              <img src="img/f3.jpg" alt="">
            </div>
            <div class="details mt-3">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>

            </div>
          </div>
        </div>
        <div class="card card-pd text-center">
          <div class="pro-hov-content">
            <div class="prof-al-center sml">
              <div class="ic-right">
                <i class="bi bi-pencil-square"></i>
              </div>
              <div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Email</h6>
                    <h6>test@gmail.com</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Phone</h6>
                    <h6>87647 67665</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-calendar-event"></i>
                  </div>
                  <div class="cc">
                    <h6>Date</h6>
                    <h6>Jun 24, 2022</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body remove-padding text-center">

            <div class="pro-sec">
              <img src="img/f2.jpg" alt="">
            </div>
            <div class="details mt-3">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>
            </div>
          </div>
        </div>
        <div class="card card-pd text-center">
          <div class="pro-hov-content">
            <div class="prof-al-center sml">
              <div class="ic-right">
                <i class="bi bi-pencil-square"></i>
              </div>
              <div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Email</h6>
                    <h6>test@gmail.com</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Phone</h6>
                    <h6>87647 67665</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-calendar-event"></i>
                  </div>
                  <div class="cc">
                    <h6>Date</h6>
                    <h6>Jun 24, 2022</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body remove-padding text-center">

            <div class="pro-sec">
              <img src="img/f3.jpg" alt="">
            </div>
            <div class="details mt-3">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>
            </div>
          </div>
        </div>
        <div class="card card-pd text-center">
          <div class="pro-hov-content">
            <div class="prof-al-center sml">
              <div class="ic-right">
                <i class="bi bi-pencil-square"></i>
              </div>
              <div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Email</h6>
                    <h6>test@gmail.com</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="cc">
                    <h6>Phone</h6>
                    <h6>87647 67665</h6>
                  </div>
                </div>
                <div class="divider remove-padding mt-3 mb-3"></div>
                <div class="fo-flx align-center">
                  <div class="ic-bg primary">
                    <i class="bi bi-calendar-event"></i>
                  </div>
                  <div class="cc">
                    <h6>Date</h6>
                    <h6>Jun 24, 2022</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body remove-padding text-center">

            <div class="pro-sec">
              <img src="img/f2.jpg" alt="">
            </div>
            <div class="details mt-3">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
  <div class="tab-pane fade show active" id="dirsale-tab" role="tabpanel" aria-labelledby="dirsale">
    <div class="page-inner">
      <div class="profile-flx-wrapper">

        <div class="card card-pd text-center">
          <div class="card-body remove-padding text-center">

            <div class="details mt-3">
              <h3>Sales Executive</h3>
              <p>Code: COM-091</p>
              <div class="mini-div"></div>
              <h6>Description</h6>
              <h4>sample description will be displayed here</h4>
            </div>
          </div>
        </div>


      </div>
    </div>

  </div>
</div>

<!-- Add User offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="addUser" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Filter By</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">


    <div class="accordion" id="accordionExample">

      <div class="accordion-item">


        <div class="accordion-body">
          <div class="d-flex">
            <div class="profile-upload">
              <img src="img/prof-big.png" alt="">
              <div class="prof-ess">
                <div class="settings">
                  <div>
                    <i class="bi bi-trash3 mr1"></i>
                    <i class="bi bi-camera-fill"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="ms-3">
              <h5>User Image</h5>
              <p class="text-muted">Max Image Size 10MB with Jpg, png</p>
              <h5>Status</h5>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="">Status</label>
            <div class="dropdown">
              <span><i class="bi bi-chevron-down"></i></span>
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          </div>



          <div class="form-group">
            <label for="">Geography</label>
            <div class="dropdown">
              <span><i class="bi bi-chevron-down"></i></span>
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Brand
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          </div>
          <div class="form-group">
            <label for="">Channel</label>
            <div class="dropdown">
              <span><i class="bi bi-chevron-down"></i></span>
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Out of Stock
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          </div>
          <div class="col">

            <label for="exampleFormControlTextarea1">Target Date</label>
            <div class="input-group date" id="datepicker">
              <input type="text" class="form-control shadow-cs" id="date" />
              <span class="input-group-append shadow-cs ">
                <span class="input-group-text bg-light d-block dp_icon">
                  <i class="bi bi-calendar-week-fill"></i>
                </span>
              </span>
            </div>

          </div>

        </div>

      </div>

    </div>
  </div>
  <div class="offcanvas-footer fil-pd">
    <button type="button" class="btn btn-secondary sec-custom">Clear</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#ecomfilter" aria-controls="offcanvasRight">Apply</button>
  </div>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight-cr" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Role</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="accordion-body">


      
        <div class="form-group mb-2">
          <label for="">Role Code</label>
          <input type="text" class="shadow-cs">
        </div>
        <div class="form-group mb-2">
          <label for="">Role Name</label>
          <input type="text">
        </div>


      <div class="form-group mb-2">
        <label for="">Role Description</label>
        <input type="text">
      </div>
      <div class="form-group mb-2">
      <label for="">Role Status</label>
      <div class="d-flex radio-custom mt-2">
            <div class="form-check me-3 ">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Enable
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Disable
              </label>
            </div>
          </div>
          </div>
      
    </div>
  </div>
  <div class="offcanvas-footer fil-pd">
    <button type="button" class="btn btn-secondary sec-custom">Cancel</button>
    <button type="button" class="btn btn-primary ms-2 ">Submit</button>
  </div>
</div>
<?php include('common/footer.php'); ?>