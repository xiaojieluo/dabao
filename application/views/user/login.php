<div class="container">
    <?php echo validation_errors(); ?>

    <?php echo form_open(''); ?>

    <h5>Username</h5>
    <input type="text" name="username" value="" size="50" />

    <h5>Password</h5>
    <input type="text" name="password" value="" size="50" />

    <div><input type="submit" value="Submit" /></div>
    <a href="/reset_password">Reset password</a>
    </form>
</div>
