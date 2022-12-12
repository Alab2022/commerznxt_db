<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Create Target </h4>
      <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Sales Activity</a></li>
      </ul>
    </div>
    <div class="right">

      <a href="s-activity.php" class="btn btn-primary"><i class="bi bi-arrow-left me-1"></i></i>Back</a>
    </div>
  </div>
</div>

<div class="container-fluid page-inner">
  <div class="inner-page">
    <div class="card cr-pmnt">
      <div class="card-body">
      <div class="card-heading fo-flx-sb-bl mb-3">
              <h4>Create Target</h4>
              <div class="right d-flex" style="white-space: nowrap; width:auto;">
              <div class="date-picker">
        <form action="/action_page.php">
          <input type="date" id="birthday" name="birthday">
        </form>
      </div>
                
              </div>
            </div>

            <div class="table-wrapper">
              <table id="tb-border-radius" class="table">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Name</th>                    
                    <th>Set Target</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                   
                    <td><input class="tb-input" type="text"></td>
               
                  </tr> 
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                   
                    <td><input class="tb-input" type="text"></td>
               
                  </tr> 
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                   
                    <td><input class="tb-input" type="text"></td>
               
                  </tr> 
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                   
                    <td><input class="tb-input" type="text"></td>
               
                  </tr> 
                  <tr>
                    <td>1</td>
                    <td>Adam</td>
                   
                    <td><input class="tb-input" type="text"></td>
               
                  </tr> 
                </tbody>
              </table>


            </div>
            <div class="button-wrapper mt-3 fo-flx-right align-center">
                      
                      <button type="button" class="btn btn-secondary-light me-2 btn-sm">Clear All</button>
                      <button type="button" class="btn btn-secondary btn-sm">Save</button>
                    </div>

      </div>
    </div>

  </div>
</div>

<?php include('common/footer.php'); ?>