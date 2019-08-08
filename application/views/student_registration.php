<!DOCTYPE html>
<html>
<head>
<title>Student Registration form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
<link rel= "stylesheet" type ="text/css" href = "<?php echo base_url();?>application/css/style.css" >
</head>

<body>
    sdfsaffasfas
    <div class="container">
        <br><br>
        <h3 style="text-align: center;">Student Registration Form</h3><br/>
        <form method="post">
            <div class="form-group">
                <label>Enter Your Name</label>
                <input type="text" name="name" class="form-control" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
                <?php echo form_error('name','<span class="help-block">','</span>'); ?>
            </div>
            <div class="form-group">
                <label>Enter Your Email</label>
                <input type="text" name="email" class="form-control" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
                <?php echo form_error('email','<span class="help-block">','</span>'); ?>
            </div>
            <div>
                <label>Select your class</label>
                <select name="class" class="form-control" required>
                    <option value="">Select Class</option>
                    <option>LKG</option>
                    <option>UKG</option>
                    <option>First</option>
                    <option>Seconc</option>
                    <option>Third</option>
                    <option>Fourth</option>
                    <option>Fivth</option>
                    <option>Sixth</option>
                    <option>Seventh</option>
                    <option>Eight</option>
                    <option>Ninth</option>
                    <option>Tenth</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-info"/>
                <a href="<?php echo base_url('Login');?>" > <input type="button" name="login" value="Login" class="btn btn-info"> 
            </div>
        </form>
    </div>

	
</body>
</html>