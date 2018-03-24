<br>
<h2><?= $title?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('members/create'); ?>
<br><br>
  <div class="form-group">
    <label>Member's Name</label>
    <input type="text" class="form-control" name="name" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text"  class="form-control" name="email" placeholder="Add Email Address">
  </div>
  <div class="form-group">
    <label>School</label>
    <select name="school" class="form-control">
  			<option value="University of Essex">University of Essex</option>
  			<option value="Abbrey Hall">Abbrey Hall</option>
  			<option value="Concord College">Concord College</option>
  			<option value="Roedan School">Roedan School</option>
			</select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>