<?php include('common/head.php'); ?>
	<?php include('common/header.php'); ?>
	<div class="container">
        <div class="card-columns">
           
                <div class="card">
                    <div class="card-header">
                        Card Header
                    </div>
                    <img class="card-img-top" src="https://source.unsplash.com/daily" alt="Card image top">
                    <div class="card-body">
                        <h3 class="card-title">Each Card body can have a title</h3>
                        <h4 class="card-subtitle">And a subtitle</h4>
                        <p class="card-text">This is a card body 1</p>
                    </div>


                    <div class="card-body">
                        <h3 class="card-title">Card body 2 title</h3>
                        <h4 class="card-subtitle">And subtitle</h4>
                        <p class="card-text">You can also add a second body or even more</p>
                    </div>
                    <img class="card-img-bottom" src="https://source.unsplash.com/daily" alt="Card image bottom">
                    <div class="card-footer">
                        Card Footer
                    </div>
                </div>
          
          
                <div class="card">

                    <img class="card-img-top" src="https://source.unsplash.com/daily?nature" alt="Card image top">
                    <div class="card-img-overlay">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can use the cap image as an overlay for the body</p>
                    </div>
                </div>

                <div class="card">

                    <img class="card-img-top" src="https://source.unsplash.com/daily?rock" alt="Card image top">
                    <div class="card-img-overlay white">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can add links to card body</p>
                        <a href="#" class="card-link">Link 1</a>
                        <a href="#" class="card-link">Link 2</a>
                    </div>
                </div>
    
                <div class="card  card-primary p-3 text-center">
                    <ul class="list-group">
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                    </ul>

                </div>

                <div class="card text-white border-danger bg-danger p-1 text-center">

                    <div class="card-body">
                        <h2 class="card-title"> My Card</h2>
                        <p class="card-text"> This is a simple centered text </p>
                    </div>

                </div>
 
                <div class="card text-primary border-primary">

                    <div class="card-body">
                        <h2 class="card-title"> My List</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Item 1</li>
                            <li class="list-group-item">Item 2</li>
                            <li class="list-group-item">Item 3</li>
                        </ul>
                    </div>

                </div>

                <div class="card border-danger text-primary">
                    <img class="card-img-top" src="https://source.unsplash.com/daily?rock" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Card text</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Link 1</a>
                        <a href="#" class="card-link">Link 2</a>
                    </div>
                </div>
            
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Tab 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tab 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tab 3</a>
                            </li>
                        </ul>
                    </div>
                    <img class="card-img-top" src="https://source.unsplash.com/daily?rock" alt="Card image top">
                    <div class="card-body">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can add navigation (navigation and pills) to card header</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <ul class="nav  nav-pills card-header-pill">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Pill 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pill 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pill 3</a>
                            </li>
                        </ul>
                    </div>
                    <img class="card-img-top" src="https://source.unsplash.com/daily?wood" alt="Card image top">
                    <div class="card-body">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can add navigation (navigation and pills) to card header</p>
                    </div>
                </div>

                <div class="card text-white bg-dark mt-5">
                    <div class="card-header">This is a Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a text </p>
                    </div>
                </div>
            
        </div>

    </div>
		<div class="container-fluid remove-margin bg-white">
			<div class="db-top-wrapper">
				<div class="left">
					<h4>My Task</h4>
					<ul class="breadcrumb">
						<li><a href="#">Dashboard</a></li>
						<li><a href="#">Task</a></li>
					</ul>
				</div>
				<div class="right">
					<button class="btn btn-primary"><i class="bi bi-file-earmark-arrow-up-fill"></i> Export to CSV</button>
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
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">Customer</div>
                                                <div class="status"><i class="bi bi-check-circle-fill completed"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-grow">
						<div class="col-md-6 col-lg-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">Customer</div>
                                                <div class="status"><i class="bi bi-circle-half in-progress"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">Customer</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
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
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div class="flag_general">General</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet</h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-grow">
						<div class="col-md-6 col-lg-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">Customer</div>
                                                <div class="status"><i class="bi bi-check-circle-fill completed"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_general">General</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet</h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
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
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">Customer</div>
                                                <div class="status"><i class="bi bi-check-circle-fill completed"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-grow">
						<div class="col-md-6 col-lg-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">Customer</div>
                                                <div class="status"><i class="bi bi-circle-half in-progress"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">Customer</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
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
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div class="flag_general">General</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet</h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-grow">
						<div class="col-md-6 col-lg-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_customer">Customer</div>
                                                <div class="status"><i class="bi bi-check-circle-fill completed"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore</p>
											</div>
                                            <button class="btn btn-light btn-sm"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 grid-margin stretch-card">
							<div class="card card-rounded">
								<div class="card-body">
                                <div class="row">
										<div class="col-lg-12">
											<div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class="flag_general">General</div>
                                                <div class="status"><i class="bi bi-circle open"></i></div>
                                            </div>
												<h4 class="card-title card-title-dash">Lorem ipsum dolor sit amet</h4>											
                                            </div>
											<div class="list-wrapper">
                                            <p>sed do eiusmod tempor incididunt ut labore et</p>
											</div>
                                            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-pencil-fill"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Add Task -->
<div class="modal fade" id="addTask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body form-group">
        <div class="d-flex radio-custom mt-3">
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
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Select Customer</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="row">
        <div class="col">
        <label for="exampleFormControlTextarea1" class="form-label">Target Date</label>
		<div class="input-group date" id="datepicker">
        <input type="text" class="form-control" id="date"/>
        <span class="input-group-append shadow-cs ">
          <span class="input-group-text bg-light d-block dp_icon">
		  <i class="bi bi-calendar-week-fill"></i>
          </span>
        </span>
      </div>
        </div>
        <div class="col">
        <label for="exampleFormControlTextarea1" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Select</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		<?php include('common/footer.php'); ?>