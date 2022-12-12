<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Customer Performance</h4>
      <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Customer Performance</a></li>
      </ul>
    </div>
    <div class="right" style="width: auto;">

    <select class="form-select" aria-label="Default select example">
  <option selected>Last 3 Months</option>
  <option value="1">Last 6 Months</option>
  <option value="2">Last 12 Months</option>
  <option value="3">More the 1 year</option>
</select>
    </div>
  </div>
</div>

<div class="container-fluid page-inner">
  <div class="inner-page">
    <div class="card">
      <div class="card-body">
      <div class="card-heading fo-flx-sb-bl">

      <div class="left d-flex">
      <h4>Customer Performance</h4>
      <div class="d-flex radio-custom mb ms-4">
                    <div class="form-check me-3 ">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            General
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Customer
                        </label>
                    </div>
                </div>
      </div>
              
              <div class="right d-flex" style="white-space: nowrap;width:auto;">
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
          <div class="inner-addon right-addon search_md ms-2 me-2">
            <i class="bi bi-search"></i>
            <input type="text" class="form-control" placeholder="Search" />
          </div>
          <button type="button" class="btn btn-primary"><span><i class="bi bi-filetype-csv"></i></span> Export as CSV</button>


        </div>
            </div>

            <div class="table-wrapper">
              <table id="tb-border-radius" class="table">
                <thead>
                  <tr>
                    <th>CID.</th>
                    <th>Name</th>                    
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>Last Quote Sent Date</th>
                    <th>Last Inv. Sent Date</th>               
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>                   
                    <td>86363 76376</td>
                    <td>sample@gmail.com</td>
                    <td>01/08/2022</td>
                    <td>01/08/2022</td>      
               
                  </tr> 
                  <tr>
                    <td>1</td>
                    <td>Adam</td>                   
                    <td>86363 76376</td>
                    <td>sample@gmail.com</td>
                    <td>01/08/2022</td>
                    <td>01/08/2022</td>      
               
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>                   
                    <td>86363 76376</td>
                    <td>sample@gmail.com</td>
                    <td>01/08/2022</td>
                    <td>01/08/2022</td>      
               
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>                   
                    <td>86363 76376</td>
                    <td>sample@gmail.com</td>
                    <td>01/08/2022</td>
                    <td>01/08/2022</td>      
               
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>                   
                    <td>86363 76376</td>
                    <td>sample@gmail.com</td>
                    <td>01/08/2022</td>
                    <td>01/08/2022</td>      
               
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>                   
                    <td>86363 76376</td>
                    <td>sample@gmail.com</td>
                    <td>01/08/2022</td>
                    <td>01/08/2022</td>      
               
                  </tr>
                  
                </tbody>
              </table>


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
</div>

<?php include('common/footer.php'); ?>