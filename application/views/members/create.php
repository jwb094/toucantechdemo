<br>
<h2>Create A Member</h2>
<?php echo validation_errors(); ?>
<?php echo form_open('members/create'); ?>
<br><br>
  <div class="form-group">
  <label>Member</label>
    <select name="name" class="form-control">
      <?php foreach($members as $member) :?>
        <option value="<?php echo $member['member'];?>"><?php echo $member['member'];?></option>
       <?php endforeach; ?>
			</select>
  </div>
  <div class="form-group">
  <label>Email</label>
    <select name="email" class="form-control">
      <?php foreach($members as $member) :?>
        <option value="<?php echo $member['email'];?>"><?php echo $member['email'];?></option>
       <?php endforeach; ?>
			</select>
  </div>
  <div class="form-group">
  <label>School</label>
    <select name="school" class="form-control">
      <?php foreach($schools as $data) :?>
        <option value="<?php echo $data['schoolid'];?>"><?php echo $data['school'];?></option>
       <?php endforeach; ?>
			</select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>