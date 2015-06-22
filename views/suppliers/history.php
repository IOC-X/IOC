	<body>                
        <div id="list" class="panel panel-default" style="width: 900px; margin: 0 auto; margin-top: 20px;">
            <div class="panel-heading">
                <h1 class="panel-title">Earlier Transactions</h1>
            </div>
            <table class="table table-condensed table-hover contacts" border="0" cellpadding="0" cellspacing="0">
                <thead style="background-color: #eee;">
                    <tr>
                        <th><a href="?orderby=name">Name</a></th>
                        <th><a href="?orderby=quantity">Quantity</a></th>
                        <th><a href="?orderby=cost">Cost</a></th>
                        <th><a href="?orderby=date">Date</a></th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <!--  <?php foreach ($contacts as $contact): ?> -->
                        <tr>
                            <td><a href="index.php?op=show&id=<?php print $contact->id; ?>"><?php print htmlentities($contact->name); ?></a></td>
                            <td><?php print htmlentities($contact->phone); ?></td>
                            <td><?php print htmlentities($contact->email); ?></td>
                            <td><?php print htmlentities($contact->address); ?></td>

                            <td>
                                <a class="btn btn-info" href="index.php?op=edit&id=<?php print $contact->id; ?>">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </a>
                            </td>                            
                            <td>
                                <a class="btn btn-danger" href="index.php?op=delete&id=<?php print $contact->id; ?>">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            </td>                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </div>
    </body>
