<div class="col-md-4 col-sm-6 my-2">
	<div class="card m-auto event" style="width: 20rem;">
		<div class="card-body">
			<h4 class="card-title"><?php echo $r['name']; ?></h4>
			<p class="card-text"><?php echo $r['description']; ?></p>
			<p class="card-text category"><?php echo $r['category']; ?></p>


			<div style="display: flex; justify-content: space-between; align-items: center;">
				<div style="font-weight: 600;">Starting:
					<span class="date"><?php echo $r['start_date']; ?></span>
				</div>

				<!-- Button save event -->
				<button title="Save Event" data-id="<?php echo $r['id']; ?>" type="button" class="btn save-button">
					<span>
						<i class="fa fa-heart-o text-dark"></i>
					</span>
				</button>

				<!-- Button join event -->
				<button type="button" class="btn apply-button" data-id="<?php echo $r['id']; ?>" data-target="#applyModal" data-toggle="modal">
					<span class="text-white">
						Join
					</span>
				</button>

				<!-- Modal -->
				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenteredLabel">Join this event</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="fullName">Full Name</label>
										<input type="text" class="form-control" id="fullName<?php echo $r['id']; ?>" placeholder="your full name">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email<?php echo $r['id']; ?>" placeholder="email">
									</div>
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" id="phone<?php echo $r['id']; ?>" placeholder="phone">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>