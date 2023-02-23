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