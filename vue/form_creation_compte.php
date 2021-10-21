<form class=" form-horizontal style-form"  method="POST" action="">
    <div class="form-group">
    <h5><?php echo $message ;?> </h5>
    </div>
    <div class="form-group ">
        <label for="login_c" class="control-label col-lg-2">LOGIN*</label>
        <div class="col-lg-3">
            <input class=" form-control" id="login_c" name="login_c" maxlength="10" type="text" placeholder="au plus 10 caratceres" value="<?php if(isset($_POST['login_c'])) { echo $_POST['login_c'];} ?>" required/>
        </div>
    </div>
    <div class="form-group ">
        <label for="pass_c" class="control-label col-lg-2">PASSWORD*</label>
        <div class="col-lg-3">
            <input class="form-control" id="pass_c" type="password" name="pass_c" required/>
        </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-4">
            <button class="btn btn-success" type="submit" name="creation_compte">CREER COMPTE</button>
        </div>
    </div>
</form>
