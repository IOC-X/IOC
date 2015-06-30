<div class="raw">
            <table class="table table-striped table-bordered">
		
                    <thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
                    <tbody>
						<?php foreach ($packages as $package) : ?>						
							<tr>
								<td><?php echo htmlentities($package->name);  ?></td>
								<td><?php echo htmlentities($package->description); ?></td>
								<td><?php echo htmlentities($package->price); ?></td>
								<td>
									<a class="btn btn-info" href="index.php?op=show&id=<?php echo $package->id; ?>">View</a>
									<a class="btn btn-success" href="index.php?op=edit&id=<?php echo $package->id; ?>">Update</a>
									<a class="btn btn-danger" href="index.php?op=delete&id=<?php echo $package->id; ?>">Delete Package</a>
								</td>

							</tr>
						<?php endforeach; ?>
					</tbody>
            </table>
	</div>

