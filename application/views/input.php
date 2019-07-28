<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

</head>

<?php echo form_open('flight'); ?>

    <label for="flight">Title</label>
    <input type="input" name="flight" /><br />

    <input type="submit" name="submit" value="Find" />

</form>

</body>
</html>
