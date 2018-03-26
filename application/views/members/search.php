<br>
<h2>Search Members</h2>
<?php echo form_open('members/getRecords'); ?>
<br><br>
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

