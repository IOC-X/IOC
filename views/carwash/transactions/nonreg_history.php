<!-- DISPLAYING LATEST TRANSACTIONS-->
                <div class="col-lg-12 text-center">
                    <h3 class="text-center success"><strong>Earlier NON-Regular Customer Transactions</strong></h3>
					
				</div>
<table class="table table-striped table-bordered table-hover">
		
                    <thead>
                        <tr class="success">
                            <th>Customer Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Package</th>
                            <th>Vehicle No</th>
                            <th>Amount</th>
                            <th>Date</th>
                            
						</tr>
                    </thead>
                    <tbody>
						<?php  foreach ($Transactions as $transaction) : ?>						
                            <tr>
                                    <td><?php echo ($transaction->cname); ?></td>
                                    <td><?php echo ($transaction->package); ?></td>
                                    <td><?php echo ($transaction->contact); ?></td>
                                    <td><?php echo ($transaction->email); ?></td>
                                    <td><?php echo ($transaction->vehicleNo); ?></td>
                                    <td><?php echo "Rs." .($transaction->amount); ?></td>
                                    <td><?php echo  ($transaction->date); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
            </table>
