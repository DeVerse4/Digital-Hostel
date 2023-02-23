<div class="col-md-3 col-sm-6 my-2">
	<div class="card m-auto event" style="width: 20rem; height: 15rem; box-shadow: 5px -5px 10px 0px #dae0e5;">
		<div class="card-body align-item-end">
			<h4 class="card-title">
				<?php echo $r['name']; ?>
			</h4>
			<p class="card-text">
				<?php echo $r['description']; ?>
			</p>
			<span class="card-text category border border-1 rounded border-info p-1">
				<?php echo $r['category']; ?>
			</span>
		</div>
		<div class="card-footer d-flex justify-content-between align-items-center bg-light">
			<div style="font-weight: 600;">Starting:
				<span class="date">
					<?php echo $r['start_date']; ?>
				</span>
			</div>
			<!-- Button join event -->
			<button type="button" class="btn btn-primary apply-button" data-id="<?php echo $r['id']; ?>"
				data-target="#applyModal" data-toggle="modal">
				Join
			</button>
		</div>
	</div>
	<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenteredLabel">Join this event</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="eventregister.php" method="post">
					<div class="form-group">
						<label for="name">Name/Team Name</label>
						<input type="text" class="form-control" name="team" placeholder="your name/team name">
					</div>
					<div class="form-group">
						<label for="members">No of Members</label>
						<input type="text" class="form-control" name="members" placeholder="N/A if individual">
					</div>
					<div class="form-group">
						<label for="members">Catagory</label>
						<input type="text" class="form-control" name="catagory" placeholder="enter catogary">
					</div>
					<div class="form-group">
						<label for="members">Event name</label>
						<input type="text" class="form-control" name="eventname" placeholder="enter event name">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="text" class="form-control" name="phone" placeholder="phone">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
</div>