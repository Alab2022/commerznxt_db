<?php include('common/head.php'); ?>
	<?php include('common/header.php'); ?>
		<div class="container-fluid remove-margin bg-white">
			<div class="db-top-wrapper">
				<div class="left">
					<h4>Feeds</h4>
					<ul class="breadcrumb">
						<li><a href="#">Dashboard</a></li>
						<li><a href="#">Feeds</a></li>
					</ul>
				</div>
				<div class="right">
				<div class="inner-addon right-addon search_md ">
        <i class="bi bi-search"></i>
        <input type="text" class="form-control" placeholder="Search Contacts" />
      </div>
					<button class="btn btn-primary ms-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-plus-lg"></i> Create New Feed</button>
				</div>
			</div>
		</div>
		<div class="container-fluid page-inner">
			<div class="row task">
                <!-- Task Colun one -->
				<div class="col-lg-3 d-flex flex-column">
					<div class="row flex-grow">
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
									<div class="row">
										<div class="col-lg-12">
											<div>
                                            <p class="feed-txt">11 Oct, 2022</p>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
                <!-- Task Colun Two -->
				<div class="col-lg-3 d-flex flex-column">
					<div class="row flex-grow">
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <p class="feed-txt">11 Oct, 2022</p>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet</h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et</p>
											</div>
                                    
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
                <!-- Task Colun Three -->
				<div class="col-lg-3 d-flex flex-column">
					<div class="row flex-grow">
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
									<div class="row">
										<div class="col-lg-12">
											<div>
                                            <p class="feed-txt">11 Oct, 2022</p>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
                <!-- Task Colun Four -->
				<div class="col-lg-3 d-flex flex-column">
					<div class="row flex-grow">
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <p class="feed-txt">11 Oct, 2022</p>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet</h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et</p>
											</div>
                                            
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>

			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Feed</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="accordion-body">
      
<div class="form-group mb-3">
	<label for="">Title</label>
	<input type="text">
</div>
<div class="form-group mb-3 gp">
	<label for="">Comments</label>
	<textarea name="" id="" cols="30" rows="10"></textarea>
</div>
     
      
      
    </div>
    </div>
    <div class="offcanvas-footer fil-pd">
      <button type="button" class="btn btn-secondary sec-custom">Cancel</button>
      <button type="button" class="btn btn-primary ms-2 ">Save & Publish</button>
    </div>
  </div>
		</div>
        <!-- Add Task -->
<div class="modal fade" id="addTask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body form-group">
      
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Note</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

		<div class="form-group">
		<label for="">Status</label>
		<div class="d-flex radio-custom mt-3">

      <div class="form-check me-3 ">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            Open
        </label>
        </div>
        <div class="form-check me-3">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            InProgress
        </label>
        </div>
		<div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Completed
        </label>
        </div>
        </div>
		</div>
		

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
		<?php include('common/footer.php'); ?>