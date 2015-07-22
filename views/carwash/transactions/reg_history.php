<div class="col-lg-12" id="reg_history">
<!-- DISPLAYING LATEST TRANSACTIONS-->
                <div>
                    <h3 class="text-center success"><strong>Earlier Regular Customer Transactions</strong></h3>
					
				</div>
<table class="table table-striped table-bordered table-hover">
		
                    <thead>
                        <tr class="success">
                            <th>Customer ID</th>
                            <th>Package Name</th>
                            <th>Vehicle Number</th>
                            <th>Amount(20% Discount)</th>
                            <th>Date</th>
                            
						</tr>
                    </thead>
                    <tbody>
						<?php  foreach ($regularTransactions as $transaction) : ?>						
                            <tr>
                                    <td><?php echo ($transaction->cust_id); ?></td>
                                    <td><?php echo ($transaction->package); ?></td>
                                    <td><?php echo ($transaction->vehicleNo); ?></td>
                                    <td><?php echo "Rs." .($transaction->amount); ?></td>
                                    <td><?php echo  ($transaction->date); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
            </table>

</div>