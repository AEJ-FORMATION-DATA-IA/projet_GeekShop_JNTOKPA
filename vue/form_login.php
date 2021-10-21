<form class="form-horizontal style-form"  method="POST" action="">
    <div class="form-group">
    <h5 ><?php echo $message ?> </h5>
    </div>
    <div class="form-group ">
        <label for="login" class="control-label col-lg-2">LOGIN*</label>
        <div class="col-lg-3">
            <input class=" form-control" id="login" name="login" minlength="2" type="text" value="<?php if(isset($_POST['login'])) { echo $_POST['login'];} ?>" required/>
        </div>
    </div>
    <div class="form-group ">
        <label for="pass" class="control-label col-lg-2">PASSWORD*</label>
        <div class="col-lg-3">
            <input class="form-control" id="pass" type="password" name="pass" required/>
        </div>
    <div class="form-group">
        <div class="col-lg-4">
            <button class="btn btn-success" type="submit" name="authentification">AUTHENTIFICATION</button>
        </div>
    </div>
</form>
