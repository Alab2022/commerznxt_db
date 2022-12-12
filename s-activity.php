<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Sales Activity</h4>
      <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Sales Activity</a></li>
      </ul>
    </div>
    <div class="right">
      <div class="date-picker">
        <form action="/action_page.php">
          <input type="date" id="birthday" name="birthday">
        </form>
      </div>
      <a href="createtarget.php" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i> Create Target Plan</a>
    </div>
  </div>
</div>

<div class="container-fluid page-inner">
  <div class="inner-page">
    <div class="row sa">
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card card-pd flex-row align-center">
          <div class="icon-wrap">
            <img src="img/sa1.png" alt="">
          </div>
          <div class="content">
            <h3>38K</h3>
            <h6>Total Goal</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card card-pd flex-row align-center">
          <div class="icon-wrap">
            <img src="img/sa2.png" alt="">
          </div>
          <div class="content">
            <h3>4.5M</h3>
            <h6>Total Sales</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card card-pd flex-row align-center">
          <div class="icon-wrap">
            <img src="img/sa3.png" alt="">
          </div>
          <div class="content">
            <h3>2.1M</h3>
            <h6>Goal Remaining</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card card-pd flex-row align-center">
          <div class="icon-wrap">
            <img src="img/sa4.png" alt="">
          </div>
          <div class="content">
            <h3>2.1M</h3>
            <h6>Goal Attainment</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card sticky">
          <div class="card-body">
            <!-- Sales Chart -->
            <!-- <h5>Sales 2021 - 2022</h5> -->
            <figure class="highcharts-figure">
              <div id="sales-activity-chart"></div>
              <!-- <p class="highcharts-description">
    Chart showing stacked horizontal bars. This type of visualization is
    great for comparing data that accumulates up to a sum.
  </p> -->
            </figure>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <div class="card-heading fo-flx-sb-bl mb-3">
              <h4>Sales Analysis</h4>
              <div class="right d-flex" style="white-space: nowrap; width:auto;">
                <div class="form-group me-2 d-flex align-center">
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
                <button type="button" class="btn btn-secondary btn-sm me-2"><span><i class="bi bi-pencil-fill"></i></span> Edit</button>
                <button type="button" class="btn btn-primary btn-sm"><span><i class="bi bi-filetype-csv"></i></span> Export as CSV</button>


              </div>
            </div>
            <div class="table-wrapper">
              <table id="tb-border-radius" class="table">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Sales Executive</th>
                    <th>Actual Sales</th>
                    <th>Sales Target</th>
                    <th>Target Acheived</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                    <td>40,000 </td>
                    <td>1,50,000</td>
                    <td>40%</td>

                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                    <td>40,000 </td>
                    <td>1,50,000</td>
                    <td>40%</td>

                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                    <td>40,000 </td>
                    <td>1,50,000</td>
                    <td>40%</td>

                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                    <td>40,000 </td>
                    <td>1,50,000</td>
                    <td>40%</td>

                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                    <td>40,000 </td>
                    <td>1,50,000</td>
                    <td>40%</td>

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
        <div class="card">
          <div class="card-body">
            <div class="card-heading fo-flx-sb-bl mb-3">
              <h4>Sales Analysis</h4>
              <div class="right d-flex" style="white-space: nowrap; width:auto;">
                <div class="form-group me-2 d-flex align-center">
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
                <button type="button" class="btn btn-secondary btn-sm"><span><i class="bi bi-save me-1"></i></span> Save</button>
                


              </div>
            </div>
            <div class="table-wrapper">
              <table id="tb-border-radius" class="table">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Sales Executive</th>
                    <th>Actual Sales</th>
                    <th>Sales Target</th>
                    <th>Target Acheived</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                    <td>40,000 </td>
                    <td><input class="tb-input" type="text"></td>
                    <td>40%</td>
                  </tr>  
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                    <td>40,000 </td>
                    <td><input class="tb-input" type="text"></td>
                    <td>40%</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                    <td>40,000 </td>
                    <td><input class="tb-input" type="text"></td>
                    <td>40%</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                    <td>40,000 </td>
                    <td><input class="tb-input" type="text"></td>
                    <td>40%</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                    <td>40,000 </td>
                    <td><input class="tb-input" type="text"></td>
                    <td>40%</td>
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

    <!-- <div class="chart-wrapper">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-pd">
            <div class="card-heading fo-flx-sb-bl">
              <h4>Sales AnaAlysis</h4>
              <div class="fo-flx">
                <p class="text-green">2021 (+80%) <span><img class="mr1" src="img/up.svg" alt=""></span></p>
                <p class="text-orange">2022 ( 60%)</span> <img class="mr0-5" src="img/upor.svg" alt=""></span></p>
              </div>

            </div>
            <div id="chartcondb"></div>
          </div>

          <div class="row" style="margin-top: 25px;">
            <div class="col-md-6">
              <div class="progressbar-wrapper fo-flx-js-sb">

                <div class="card card-pd">
                  <h3>38</h3>
                  <h6>Quotes</h6>
                  <div class="progress">
                    <div class="progress-bar orange" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">

                    </div>
                  </div>
                  <p>10 Waiting for Approval</p>
                </div>
                <div class="card card-pd">
                  <h3>48</h3>
                  <h6>Invoices</h6>
                  <div class="progress">
                    <div class="progress-bar solidblue" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:35%">

                    </div>
                  </div>
                  <p>5 Waiting for Approval</p>
                </div>
              </div>
              <div class="card card-pd">
                <div class="card-heading fo-flx-sb-bl">
                  <h4>Top 5 Geography Sales</h4>

                </div>
                <div id="geography"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-pd">
                <div class="card-heading fo-flx-sb-bl">
                  <h4>Purchase Overview</h4>
                  <p class="text-green"><span><img class="mr0-5" src="img/profile.svg" alt=""></span>Vendors 50</p>
                </div>
                <div id="semiDonut"></div>
              </div>
              <div class="card card-pd">
                <div class="card-heading fo-flx-sb-bl">
                  <h4>Recent Notes</h4>
                  <a class="btn btn-light btn-sm" href="">View All</a>
                </div>
                <div class="notes">
                  <div class="content fo-flx mt-3">
                    <div class="number">
                      <h6>01</h6>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the
                      printing and typesetting industry..</p>

                  </div>
                  <div class="divider remove-padding mt-3 mb-3"></div>
                  <div class="content fo-flx mt-3">
                    <div class="number">
                      <h6>01</h6>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the
                      printing and typesetting industry..</p>

                  </div>
                </div>
              </div>
            </div>

          </div>



        </div>
        <div class="col-md-4">
          <div class="card card-pd fadeblue fadeblue-pad">
            <div class="t1 fo-flx-center">
              <p>Total Revenue</p>
              <h6>2022</h6>
            </div>
            <div class="t2 fo-flx-sb-bl">
              <h1>€128,988</h1>
              <h6>+10% <span><img src="img/network.svg" alt=""></span> </h6>
            </div>
          </div>

          <div class="card card-pd">
            <div class="card-heading fo-flx-sb-bl">
              <h4>Sales Tracker</h4>
              <div class="fo-flx-center">
                <h6>2022</h6>
                <a class="btn btn-light btn-sm ms-2" href="">More</a>
              </div>
            </div>
            <div class="chart-body">
              <div id="salesTracker">FusionCharts XT will load here!</div>
            </div>
            <div class="chart-detail-wrapper">
              <div class="chart-details fo-flx-js-sb bo-bottom" style="padding-bottom: 15px;">
                <div class="left fo-flx">
                  <div class="profile-sec mr1">
                    <img src="img/cart.svg" alt="">
                  </div>
                  <div class="content">
                    <h4>E-Commerce Sales</h4>
                    <h6>2345 products sale</h6>
                  </div>
                </div>
                <div class="wr-right fo-flx">
                  <h1>70%</h1>
                  <img src="img/lo-up-or.svg" alt="">
                </div>
              </div>
              <div class="chart-details fo-flx-js-sb mt-2">
                <div class="left fo-flx">
                  <div class="profile-sec mr1">
                    <img src="img/loc.svg" alt="">
                  </div>
                  <div class="content">
                    <h4>E-Commerce Sales</h4>
                    <h6>2345 products sale</h6>
                  </div>
                </div>
                <div class="wr-right fo-flx">
                  <h1>70%</h1>
                  <img src="img/lo-up-or.svg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="card card-pd">
            <div class="card-heading fo-flx-sb-bl">
              <h4>Customers</h4>
              <div class="fo-flx">
                <p class="text-green">Target Achieved 80% <span><img class="mr1" src="img/up.svg" alt=""></span></p>

              </div>
            </div>
            <div class="customers-details mt-3">
              <div class="fo-flx">
                <div class="left fo-flx mr3">
                  <div class="db-icn-bg fadeblue mr1">
                    <i class="bi bi-star"></i>
                  </div>
                  <div>
                    <h3>200</h3>
                    <h6>New Customers</h6>
                  </div>
                </div>
                <div class="right fo-flx">
                  <div class="db-icn-bg slaygreen mr1">
                    <i class="bi bi-chat-left-text-fill"></i>
                  </div>
                  <div>
                    <h3>180</h3>
                    <h6>Quotes Sent</h6>
                  </div>
                </div>
              </div>
              <div class="divider remove-padding mt-3 mb-3"></div>
              <div class="cs-det-footer fo-flx-js-sb">
                <div class="items d-flex align-center">
                  <span><i class="bi bi-circle-half de-success"></i></span>
                  <h6>In Progress 2</h6>
                </div>
                <div class="vertical-div"></div>
                <div class="items d-flex align-center">
                  <span><i class="bi bi-shield-check de-success"></i></i></span>
                  <h6>Won 5</h6>
                </div>
                <div class="vertical-div"></div>
                <div class="items d-flex align-center">
                  <span><i class="bi bi-graph-down-arrow de-error"></i></span>
                  <h6>Lost 0</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->


  </div>
</div>

<?php include('common/footer.php'); ?>