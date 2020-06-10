@extends("admin.layout")

@section('content')

<h4 class="page-title">Component</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Button Original</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<p class="demo">
											<button class="btn btn-default">Default</button>

											<button class="btn btn-primary">Primary</button>

											<button class="btn btn-info">Info</button>

											<button class="btn btn-success">Success</button>

											<button class="btn btn-warning">Warning</button>

											<button class="btn btn-danger">Danger</button>

											<button class="btn btn-link">Link</button>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Disabled Button</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<p class="demo">
											<button class="btn btn-default" disabled="disabled">Default</button>

											<button class="btn btn-primary" disabled="disabled">Primary</button>

											<button class="btn btn-info" disabled="disabled">Info</button>

											<button class="btn btn-success" disabled="disabled">Success</button>

											<button class="btn btn-warning" disabled="disabled">Warning</button>

											<button class="btn btn-danger" disabled="disabled">Danger</button>

											<button class="btn btn-link" disabled>Link</button>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Button Size</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<p class="demo">
											<button class="btn btn-primary btn-lg">Large</button>

											<button class="btn btn-primary">Normal</button>

											<button class="btn btn-primary btn-sm">Small</button>

											<button class="btn btn-primary btn-xs">Extra Small</button>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Button Type</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<p class="demo">
											<button class="btn btn-primary">Normal</button>
											<button class="btn btn-primary btn-border">Border</button>

											<button class="btn btn-primary btn-round">Round</button>

											<button class="btn btn-primary btn-border btn-round">Round</button>

											<button class="btn btn-primary btn-link">Link</button>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Checkbox</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<p class="demo">
											<label class="form-check-label">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-sign">Unchecked</span>
											</label>

											<label class="form-check-label">
												<input class="form-check-input" type="checkbox" value="" checked>
												<span class="form-check-sign">Checked</span>
											</label>

											<label class="form-check-label">
												<input class="form-check-input" type="checkbox" value="" disabled>
												<span class="form-check-sign">Disabled</span>
											</label>

											<label class="form-check-label">
												<input class="form-check-input" type="checkbox" value="" checked disabled>
												<span class="form-check-sign">Checked Disabled</span>
											</label>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Radio</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<p class="demo">
											<label class="form-radio-label">
												<input class="form-radio-input" type="radio" name="optionsRadios" value="">
												<span class="form-radio-sign">Unchecked</span>
											</label>
											<label class="form-radio-label">
												<input class="form-radio-input" type="radio" name="optionsRadios" value="" checked>
												<span class="form-radio-sign">Checked</span>
											</label>
											<label class="form-radio-label">
												<input class="form-radio-input" type="radio" value="" disabled>
												<span class="form-radio-sign">Disabled</span>
											</label>
											<label class="form-radio-label">
												<input class="form-radio-input" type="radio" value="" checked disabled>
												<span class="form-radio-sign">Checked Disabled</span>
											</label>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Bootstrap Switch</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<p class="demo">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="default">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="info">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="warning">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="danger">
										</p>
										<p class="demo">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="default" data-style="btn-round">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-style="btn-round">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="info" data-style="btn-round">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="warning" data-style="btn-round">
											<input type="checkbox" checked data-toggle="toggle" data-onstyle="danger" data-style="btn-round">
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Bootstrap Dropdown</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<p class="demo">
											<div class="dropdown">

												<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">

													Dropdown

												</button>

												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">

													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Something else here</a>

												</ul>

											</div>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Progress Bar</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<p class="demo">
													<div class="progress">
														<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</p>
												<p class="demo">
													<div class="progress">
														<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</p>
												<p class="demo">
													<div class="progress">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</p>
												<p class="demo">
													<div class="progress">
														<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Bootstrap Input</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<p class="demo">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">

														<input type="text" value="" placeholder="Input" class="form-control" />

													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group has-success">

														<input type="text" value="Success" class="form-control" />

													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group has-error has-feedback">

														<input type="text" value="Error" class="form-control" />

														<span class="la la-times form-control-feedback"></span>

													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<div class="input-group has-icon">

															<input type="text" value="Group Addon" class="form-control">

															<div class="input-group-append">
																<span class="input-group-text input-group-icon"><i class="la la-keyboard-o"></i></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Nav Pills</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills nav-primary">
											<li class="nav-item">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Pagination</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<p class="demo">
											<ul class="pagination pg-primary">
												<li class="page-item">
													<a class="page-link" href="#" aria-label="Previous">
														<span aria-hidden="true">&laquo;</span>
														<span class="sr-only">Previous</span>
													</a>
												</li>
												<li class="page-item active"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item">
													<a class="page-link" href="#" aria-label="Next">
														<span aria-hidden="true">&raquo;</span>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Slider</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<div class="demo">
											<div class="row">
												<div class="col-md-6">
													<div id="slider" class="slider-primary"></div>

													<div id="slider-range" class="slider-success"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Badge</h4>
										<p class="card-category">Here is a subtitle for this table</p>
									</div>
									<div class="card-body">
										<span class="badge badge-count">Count</span>
										<span class="badge badge-default">Default</span>
										<span class="badge badge-primary">Primary</span>
										<span class="badge badge-info">Info</span>
										<span class="badge badge-success">Success</span>
										<span class="badge badge-warning">Warning</span>
										<span class="badge badge-danger">Danger</span>
									</div>
								</div>
							</div>
						</div>
@endsection