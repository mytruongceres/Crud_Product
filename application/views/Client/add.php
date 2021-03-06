<head>
    <base href="<?php echo 'BASE_URL';?>">
    <title>Add User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>">
    <script src="<?php echo base_url("bootstrap/js/jquery-3.3.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
</head>
<html>
<style>
    .container {
        width: 30%;
        margin: auto;
        margin-top: 50px;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    input[type=text] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }
    input[type=password] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 20px;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
    .cancel{
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: left;
    }
    #mySidenav a {
        position: absolute;
        left: -80px;
        transition: 0.3s;
        padding: 10px;
        width: 100px;
        text-decoration: none;
        font-size: 20px;
        color: white;
        border-radius: 0 5px 5px 0;
    }

    #mySidenav a:hover {
        left: 0;
    }

    #cancel {
        top: 0px;
        background-color: #a61717;
    }
</style>
<body>
<div id="mySidenav" class="sidenav">
    <a id="cancel" class="cancel" href="<?=base_url()?>admin/Crud_user/show_user_id">Cancel</a>
</div>
<div class="container">
    <div style="text-align: center"><h2>Add User</h2></div>
    <form action="add" style="margin-left: 50px" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td></td>
                <td><span style="color: red;"><?php echo validation_errors(); ?></span></td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label class="control-label" for="fname"><i class="glyphicon glyphicon-hand-right"></i> Username</label>
                        <input type="text" name="username">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label class="control-label" for="fname"><i class="glyphicon glyphicon-hand-right"></i> Email</label>
                    <input type="text" name="email">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label class="control-label" for="fname"><i class="glyphicon glyphicon-hand-right"></i> First Name</label>
                    <input type="text" name="first_name">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                    <label class="control-label" for="fname"><i class="glyphicon glyphicon-hand-right"></i> Last Name</label>
                    <input type="text" name="last_name">
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="form-group">
                        <label class="control-label" for="fname"><i class="glyphicon glyphicon-hand-right"></i> User type</label>
                        <select name="user_type" class="form-control">
                            <option>user</option>
                            <option>admin</option>
                        </select>
                        <br>
                    </div>
                </td>
            </tr>
            <tr>
                <div class="form-group">
                 <td><label class="control-label" for="fname"><i class="glyphicon glyphicon-hand-right"></i> Password</label>
                <input type="password" name="password">
                </td>
                </div>
            <tr>
                <td></td>
                <td><input type="submit" name="btnadd" value="Add"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>