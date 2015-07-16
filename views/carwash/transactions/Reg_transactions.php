<table class="table table-condensed table-striped table-bordered">
    <thead>
        <tr>
            <th class="col-lg-2">Customer ID</th>
            <th class="col-lg-2">Package</th>
            <th class="col-lg-2">Vehicle Number</th>
            <th class="col-lg-2">Amount</th>
            <th class="col-lg-2">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <select class="btn active">
                    <?php  foreach ($customers as $customer) : ?>
                <option value="<?php echo ($customer->cust_id); ?>"><?php echo ($customer->cust_id); ?></option>
                
                    <?php endforeach; ?>
                </select>
            </td>
            <td>
                <select class="btn active">
                    <?php  foreach ($packages as $package) : ?>	
                <option value="<?php echo ($package->id); ?>"><?php echo ($package->name); ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td>
                <input type="text"  class="form-control btn" />
            </td>
            <td>
                <label>Rs.</label>
            </td>
            <td>
                <select class="btn active">
                <option value="done">Not Returned</option>
                <option value="processing">Returned</option>
                </select>
            </td>
        </tr>
    </tbody>
</table>