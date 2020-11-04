	<form method="post" action="/create">
  @csrf
  
  <div class="form-group">
    <label>name</label>
    <input type="text"  name="name">
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="email"  name="email">
  </div>
   <div class="form-group">
    <label>phone</label>
    <input type="text"  name="phone">
  </div>
<button type="submit" >Submit</button>
</form>