<br><br>
<br><br>
<h2><?= $title?></h2>
<br><br>
<br><br>
<div class="post-body">      
        <table class="table table-hover">
        <thead>
            <tr>      
                    <th>Member</th>
                    <th>Email</th>
            </tr>
        </thead>
</table>
        <?php foreach($post as $memberscollection) :?>
        <table class="table table-hover">
            <tbody>
                <tr class="table-active">
                       
                        <td><center><?php echo $memberscollection['member'];?> </center> </td>
                        <td><center><?php echo $memberscollection['email'];?></center></td>
                </tr>
            </tbody>
        </table> 
        <?php endforeach; ?> 
</div>
<br><br>
<br><br>
<a class="btn btn-primary pull-left" href="<?php echo base_url();?>members/search">Search</a>