<form action="index.php?action=checkLogin" class="form-horizontal" style="margin-top:200px;" role="form" method="POST">
    <div class="form-group">
        <label class="control-label col-sm-offset-2 col-sm-2" for="user">Username : </label>
        <div class="col-sm-4" >
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
        </div>
            
            
        </div>
    
    <div class="form-group">
        <label class="control-label col-sm-offset-2 col-sm-2" for="pwd">Password : </label>
                <div class="col-sm-4" >
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                </div>
        </div>

    <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

