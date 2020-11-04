	<form method="post" action="/update">
  @csrf
  
  <div class="form-group">
    <label>Old name</label>
    <input type="text"  name="oldname">
  </div>
  <div class="form-group">
    <label>New name</label>
    <input type="text"  name="newname">
  </div>
 
<button type="submit" >Update</button>
</form>