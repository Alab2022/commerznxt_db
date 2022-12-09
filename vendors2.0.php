<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Purchase</h4>
      <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Purchase</a></li>
        <li><a href="#">Vendors</a></li>
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
  <div class="top-vendors">
    <div class="card-heading mb-3">
      <h4>Top Vendors</h4>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card card-pd">
          <div class="vendor-hover">
            <div class="ven-btn text-center">
              <button type="button" class="btn btn-light me-2 btn-sm"> <span><i class="bi bi-eye-fill"></i></span> View Detail</button>
              <button type="button" class="btn btn-primary btn-sm"> <span><i class="bi bi-plus-lg"></i></span> Create PO</button>
            </div>
          </div>
          <div class="vendor-wrap d-flex align-center">
            <div class="id-wrapper me-3">
              <div class="text-center">
                <h5>ID</h5>
                <h5>#CM12</h5>
              </div>
            </div>
            <div class="ven-details">
              <h1>23,654</h1>
              <p>Current Outstanding</p>
              <h4>Herman Black</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card card-pd">
          <div class="vendor-hover">
            <div class="ven-btn text-center">
              <button type="button" class="btn btn-light me-2 btn-sm"> <span><i class="bi bi-eye-fill"></i></span> View Detail</button>
              <button type="button" class="btn btn-primary btn-sm"> <span><i class="bi bi-plus-lg"></i></span> Create PO</button>
            </div>
          </div>
          <div class="vendor-wrap d-flex align-center">
            <div class="id-wrapper me-3">
              <div class="text-center">
                <h5>ID</h5>
                <h5>#CM12</h5>
              </div>
            </div>
            <div class="ven-details">
              <h1>23,654</h1>
              <p>Current Outstanding</p>
              <h4>Herman Black</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card card-pd">
          <div class="vendor-hover">
            <div class="ven-btn text-center">
              <button type="button" class="btn btn-light me-2 btn-sm"> <span><i class="bi bi-eye-fill"></i></span> View Detail</button>
              <button type="button" class="btn btn-primary btn-sm"> <span><i class="bi bi-plus-lg"></i></span> Create PO</button>
            </div>
          </div>
          <div class="vendor-wrap d-flex align-center">
            <div class="id-wrapper me-4">
              <div class="text-center">
                <h5>ID</h5>
                <h5>#CM12</h5>
              </div>
            </div>
            <div class="ven-details">
              <h1>23,654</h1>
              <p>Current Outstanding</p>
              <h4>Herman Black</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="all-vendors">
    <div class="card-heading fo-flx-sb-bl mb-2">
      <h4>All Vendors</h4>
      <div class="d-flex" style="white-space: nowrap;">
        <div class="form-group ms-2 d-flex align-center">
          <h6 class="mr1" style="margin-bottom: 0;">Show</h6>
          <div class="dropdown">
            <span><i class="bi bi-chevron-down"></i></span>
            <button class="btn btn-secondary dropdown-toggle fl-dd" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              50
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">10</a></li>
              <li><a class="dropdown-item" href="#">20</a></li>
              <li><a class="dropdown-item" href="#">30</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="all-vendors-list">
      <div class="row">
        <div class="col-lg-3">
          <div class="card card-pd fadeblue ">
            <div class="details mt-3 text-center">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>
              <div class="mini-div"></div>
              <p class="mb-1">Current Outstanding</p>
              <h4>23,897</h4>
            </div>

            <div class="ven-btn text-center mt-2 align-center d-flex">
              <button type="button" class="btn btn-light me-2 btn-sm"> <span><i class="bi bi-eye-fill"></i></span> View Detail</button>
              <button type="button" class="btn btn-primary btn-sm"> <span><i class="bi bi-plus-lg"></i></span> Create PO</button>
            </div>

          </div>
        </div>
        <div class="col-lg-3">
          <div class="card card-pd fadeblue ">
            <div class="details mt-3 text-center">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>
              <div class="mini-div"></div>
              <p class="mb-1">Current Outstanding</p>
              <h4>23,897</h4>
            </div>
            <div class="ven-btn text-center mt-2 align-center d-flex">
              <button type="button" class="btn btn-light me-2 btn-sm"> <span><i class="bi bi-eye-fill"></i></span>  View Detail</button>
              <button type="button" class="btn btn-primary btn-sm"> <span><i class="bi bi-plus-lg"></i></span> Create PO</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card card-pd fadeblue ">
            <div class="details mt-3 text-center">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>
              <div class="mini-div"></div>
              <p class="mb-1">Current Outstanding</p>
              <h4>23,897</h4>
            </div>
            <div class="ven-btn text-center mt-2 align-center d-flex">
              <button type="button" class="btn btn-light me-2 btn-sm"> <span><i class="bi bi-eye-fill"></i></span>  View Detail</button>
              <button type="button" class="btn btn-primary btn-sm"> <span><i class="bi bi-plus-lg"></i></span> Create PO</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card card-pd fadeblue ">
            <div class="details mt-3 text-center">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>
              <div class="mini-div"></div>
              <p class="mb-1">Current Outstanding</p>
              <h4>23,897</h4>
            </div>
            <div class="ven-btn text-center mt-2 align-center d-flex">
              <button type="button" class="btn btn-light me-2 btn-sm"> <span><i class="bi bi-eye-fill"></i></span>  View Detail</button>
              <button type="button" class="btn btn-primary btn-sm"> <span><i class="bi bi-plus-lg"></i></span> Create PO</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card card-pd fadeblue ">
            <div class="details mt-3 text-center">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>
              <div class="mini-div"></div>
              <p class="mb-1">Current Outstanding</p>
              <h4>23,897</h4>
            </div>
            <div class="ven-btn text-center mt-2 align-center d-flex">
              <button type="button" class="btn btn-light me-2 btn-sm"> <span><i class="bi bi-eye-fill"></i></span>  View Detail</button>
              <button type="button" class="btn btn-primary btn-sm"> <span><i class="bi bi-plus-lg"></i></span> Create PO</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card card-pd fadeblue ">
            <div class="details mt-3 text-center">
              <h3>Herman Black</h3>
              <p>ID: COMNXT-091</p>
              <div class="mini-div"></div>
              <p class="mb-1">Current Outstanding</p>
              <h4>23,897</h4>
            </div>
            <div class="ven-btn text-center mt-2 align-center d-flex">
              <button type="button" class="btn btn-light me-2 btn-sm"> <span><i class="bi bi-eye-fill"></i></span>  View Detail</button>
              <button type="button" class="btn btn-primary btn-sm"> <span><i class="bi bi-plus-lg"></i></span> Create PO</button>
            </div>
          </div>
        </div>

      </div>
      <div class="fo-flx-center">
        <h6>Showing 50 of 200</h6>
        <nav aria-label="Page navigation example">

          <ul class="pagination justify-content-end">
            <li class="page-item">
              <a class="page-link"> <span><i class="bi bi-chevron-left"></i></span> Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next <span><i class="bi bi-chevron-right"></i></span></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
<?php include('common/footer.php'); ?>