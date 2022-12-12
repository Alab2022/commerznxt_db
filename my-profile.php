<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>My Profile</h4>
      <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">My Profile</a></li>
      </ul>
    </div>
    <div class="right align-center">
      <!-- <h6 class="text-warning">Waiting for Approval</h6>
      <button type="button" class="btn btn-primary ms-2 bg-drk-blue"> <span><img src="img/edit.svg" alt=""></span> Edit</button> -->

      <button class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-geo-alt-fill"></i> Add Address</button>
      <!-- add address -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Address</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="accordion-body ad" style="padding-top: 0; padding-bottom: 0;">
                        <div class="form-group mb-2">
                        <label for="">Type</label>
                        <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                        </div>
                        <div class="form-group mb-2">
                          <label for="">Street Address</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        <div class="form-group mb-2">
                          <label for="">City/State/Province</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        <div class="form-group mb-2">
                          <label for="">Country</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        <div class="form-group mb-2">
                          <label for="">Zip Code</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        <div class="form-group mb-2">
                          <label for="">Email/Fax</label>
                          <div class="inner-frm">
                          <input type="text" class="shadow-cs fm-st-wi me-2">
                          <input type="text" class="shadow-cs">
                          </div>
                        </div>
                  </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary btn-sm">Submit</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<div class="container-fluid page-inner">
  <div class="row my-profile">
    <div class="col-md-3">
      <div class="card sticky">
        <div class="card-body">


          <div class="card-body card-pad-avatar remove-padding">

            <div class="db-top-wrapper" style="padding-top: 0;">
              <div class="left outer-wi">
                <div class="profile-sec d-flex align-center">
                  <div class="icon-float">
                  <i class="bi bi-pencil-fill"></i>
                  </div>
                  <div class="image-avatar me-3">
                    <img src="img/prof-big.png" alt="">
                  </div>
                  <div class="content">
                    <h3>User Image</h3>
                    <p class="text-start">Max Image size 10MB <br> with.jpg, png</p>
                  </div>
                </div>

                <div class="divider remove-padding mt-3"></div>
                <div class="my-prof-form mt-3">
                  <div class="accordion-body remove-padding">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group mb-2">
                          <label for="">First Name</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        <div class="form-group mb-2">
                          <label for="">Last Name</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        <div class="form-group mb-2">
                          <label for="">Designation</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        <div class="form-group mb-2">
                          <label for="">Company Name</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        <div class="form-group mb-2">
                          <label for="">Email</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        <div class="form-group mb-2">
                          <label for="">Created Date</label>
                          <input type="text" class="shadow-cs">
                        </div>
                        
                        <div class="form-btn text-right mt-3">
                          <button type="button" class="btn btn-secondary">Save</button>
                        </div>
                      </div>


                    </div>



                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card card-pd">
        <div class="crm-cd-header fo-flx-center remove-padding">
          <h4>Change Password</h4>
          <div class="button-wrapper fo-flx-right align-center">
            <button type="button" class="btn btn-secondary btn-sm">Save</button>
          </div>
        </div>
        <div class="divider mt-3 mb-3 w-100 remove-padding"></div>
        
        <div class="accordion-body remove-padding">
          <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="form-group mb-2">
                <label for="">Enter the Current Password</label>
                <input type="text" class="shadow-cs">
              <div class="eyr">
              <i class="bi bi-eye-slash"></i>
              </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="form-group mb-2">
                <label for="">New Password</label>
                <input type="text" class="shadow-cs">
                <div class="eyr">
              <i class="bi bi-eye-slash"></i>
              </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="form-group mb-2">
                <label for="">Current Password</label>
                <input type="text" class="shadow-cs">
                <div class="eyr">
              <i class="bi bi-eye-slash"></i>
              </div>
             </div>
          </div>
          </div>
        </div>
      </div>
      <div class="card card-pd mt-3">
        <div class="crm-cd-header fo-flx-center remove-padding">
          <h4>Address</h4>
          
        </div>
        <div class="divider mt-3 mb-3 w-100 remove-padding"></div>
        
        <div class="address-item">
        <div class="address-list" style="position: relative;">
          
          <div class="table-wrapper">
              <table id="tb-border-radius" class="table mb-0">
              
                <tbody>
                <div class="icon-float">
                <i class="bi bi-pencil-fill"></i>
                  </div>
                  <tr>
                    <td class="tb-st-wi"><Strong>Type</Strong></td>
                    <td>Head Office</td>
                    
                  </tr>
                  <tr>
                    <td class="tb-st-wi"><Strong>Street Address</Strong></td>
                    <td>3790EL Camino Real pfo alto</td>
                    
                  </tr>
                  <tr>
                    <td class="tb-st-wi"><Strong>City/State/Province</Strong></td>
                    <td>CA</td>
                    
                  </tr>
                  <tr>
                    <td class="tb-st-wi"><Strong>Country</Strong></td>
                    <td>USA</td>
                    
                  </tr>
                  <tr>
                    <td class="tb-st-wi"><Strong>Zip Code</Strong></td>
                    <td>94306</td>
                    
                  </tr>
                  <tr>
                    <td class="tb-st-wi"><Strong>Email/Fax</Strong></td>
                    <td>user@gmail.com/ +343434</td>
                    
                  </tr>


                </tbody>
              </table>


            </div>

        </div>
        <div class="address-list mt-3" style="position: relative;">
          
          <div class="table-wrapper">
              <table id="tb-border-radius" class="table mb-0">
              
                <tbody>
                <div class="icon-float">
                <i class="bi bi-pencil-fill"></i>
                  </div>
                  <tr>
                    <td class="tb-st-wi"><Strong>Type</Strong></td>
                    <td>Head Office</td>
                    
                  </tr>
                  <tr>
                    <td class="tb-st-wi"><Strong>Street Address</Strong></td>
                    <td>3790EL Camino Real pfo alto</td>
                    
                  </tr>
                  <tr>
                    <td class="tb-st-wi"><Strong>City/State/Province</Strong></td>
                    <td>CA</td>
                    
                  </tr>
                  <tr>
                    <td class="tb-st-wi"><Strong>Country</Strong></td>
                    <td>USA</td>
                    
                  </tr>
                  <tr>
                    <td class="tb-st-wi"><Strong>Zip Code</Strong></td>
                    <td>94306</td>
                    
                  </tr>
                  <tr>
                    <td class="tb-st-wi"><Strong>Email/Fax</Strong></td>
                    <td>user@gmail.com/ +343434</td>
                    
                  </tr>


                </tbody>
              </table>


            </div>

        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php include('common/footer.php'); ?>