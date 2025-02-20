<?php require('../includes/header.php'); ?>

<body class="app">
	<?php require('../includes/navbar.php'); ?>
	<?php require('../includes/sidebar.php'); ?>
	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<div class="row g-3 mb-4 align-items-center justify-content-between">
					<div class="col-auto">
						<h1 class="app-page-title mb-0">Orders</h1>
					</div>
					<div class="col-auto">
						<div class="page-utilities">
							<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
								<div class="col-auto">
									<form class="table-search-form row gx-1 align-items-center">
										<div class="col-auto">
											<input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
										</div>
										<div class="col-auto">
											<button type="submit" class="btn app-btn-secondary">Search</button>
										</div>
									</form>

								</div><!--//col-->
								<div class="col-auto">

									<select class="form-select w-auto">
										<option selected value="option-1">All</option>
										<option value="option-2">This week</option>
										<option value="option-3">This month</option>
										<option value="option-4">Last 3 months</option>

									</select>
								</div>
								<div class="col-auto">
									<a class="btn app-btn-secondary" href="#">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
											<path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
										</svg>
										Download CSV
									</a>
								</div>
							</div><!--//row-->
						</div><!--//table-utilities-->
					</div><!--//col-auto-->
				</div><!--//row-->



				<div class="tab-content" id="orders-table-tab-content">
					<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
						<div class="app-card app-card-orders-table shadow-sm mb-5">
							<div class="app-card-body">
								<div class="p-3">
									<a class="btn btn-primary btn-sm text-white" href="create.php" role="button">Add User </a>
								</div>
								<div class="table-responsive">
									<?php
									if(isset($_GET['sms'])){
										$sms = $_GET['sms'];

										if($sms == 'deleted'){
											echo '<div class="alert alert-success">User deleted successfully</div>';
											echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
											
										}
										if($sms == 'error'){
											echo '<div class="alert alert-danger">An error occurred</div>';
											echo "<meta http-equiv=\"refresh\" content=\"2 ;URL=index.php\">";
										}
									}	
									?>
									<table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="col">#</th>
												<th class="col">Name</th>
												<th class="col">Phone</th>
												<th class="col">Address</th>
												<th class="col">Email</th>
												<th class="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$select = "SELECT *FROM users";
											$select_result = mysqli_query($conn, $select);
											$i = 1;
											while ($data = mysqli_fetch_array($select_result)) {
											?>
												<tr>
													<td class="cell"><?php echo $i++; ?></td>
													<td class="cell"><?php echo $data['name']; ?> </td>
													<td class="cell"><?php echo $data['phone']; ?></td>
													<td class="cell"><?php echo $data['address']; ?></td>
													<td class="cell"><?php echo $data['email']; ?></td>
													<td class="cell">
														<a class="btn btn-sm btn-secondary" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
														<a class="btn btn-sm btn-info" href="show.php?id=<?php echo $data['id']; ?>">View</a>
														<a class="btn btn-sm btn-danger" onclick="return confirm('Do you wanna to Delete this data??')" href="delete.php?id=<?php echo $data['id'];?> ">Delete</a>
													</td>
												</tr>
											<?php
											}
											?>


										</tbody>
									</table>
								</div><!--//table-responsive-->

							</div><!--//app-card-body-->
						</div><!--//app-card-->
						<nav class="app-pagination">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav><!--//app-pagination-->

					</div><!--//tab-pane-->



				</div><!--//tab-content-->



			</div><!--//container-fluid-->
		</div><!--//app-content-->



		<?php require('../includes/footer.php'); ?>