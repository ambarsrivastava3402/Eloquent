	<form method="post" action="/delete">
  @csrf
  
  <div class="form-group">
    <label>id</label>
    <input type="text"  name="id">
  </div>

<button type="submit" >Delete</button>
</form>