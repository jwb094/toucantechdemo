<br><br>
<br><br>
<h2><?= $title?></h2>
<br><br>
<br><br>
<div class="post-body">
        <?php //echo json_encode($post); ?>       
        <table class="table table-hover">
        <thead>
            <tr>        <th></th>
                        <th>Member</th>
                        <th>Email</th>
                        <th>School</th>
            </tr>
        </thead>
</table>
        <?php foreach($post as $membersdata) :?>
        <table class="table table-hover">
            <tbody>
                <tr class="table-active">
                        <th></th>
                        <td> <center><?php echo $membersdata['member'];?> </center> </td>
                        <td><center><?php echo $membersdata['email'];?></center></td>
                        <td><?php echo $membersdata['school'];?></td>
                </tr>
            </tbody>
        </table> 
        <?php endforeach; ?> 
</div>
<br><br>
<br><br>
<a class="btn btn-primary pull-left" href="<?php echo base_url();?>members/search">Search</a>