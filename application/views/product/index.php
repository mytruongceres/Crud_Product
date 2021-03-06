<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
    <base href="<?php echo 'BASE_URL';?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>">
    <script src="<?php echo base_url("bootstrap/js/jquery-3.3.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
</head>
<style>
    .container{
        width: 80%;
        margin-top: 100px;
    }
    .bold{
        font-weight: bold;
    }
    .table{
        margin-top: 10px;
    }
    .add {
        float:right;
        margin-top:10px;
    }
    .input_search{
        margin-top: 10px;
        width: 20%;
    }
    .input-group .form-control:first-child{
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    #hide{
        display: none;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .h2_style{
        color: white;
        text-align: center;
        margin-top: 10px;
    }
</style>
<body>
<div class="container">
    <div><nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?=base_url()?>admin/Home/index">Home</a>
            </div>
            <div><h2 style="text-align: center" class="h2_style">Products</h2></div>
        </nav>
    </div>
    <div id="add">
        <a class="bold" href = "<?=base_url()?>admin/product/add"><button class="add btn-success">Add Product</button></a>
    </div>
    <form method="get" action="<?php echo base_url("admin/Product/show_product_id") ?>">
        <div class="input-group input_search">
            <input type="text" name="search" id="myInput" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-success" name="btnSearch" type="submit"><span class="glyphicon glyphicon-search"></span> </button>
            </span>
        </div>
    </form>
    <table class="table" border="0">
        <tr class="danger">
            <td id="hide" class="bold">Id</td>
            <td class="bold">Category_id</td>
            <td class="bold">Name</td>
            <td class="bold">Price</td>
            <td class="bold">Image</td>
            <td class="bold">Action</td>
        </tr>
        <?php foreach ($product as $value) {?>
            <tr>
                <td id="hide"><?php echo $value["id"];?></td>
                <td><?php echo $value["category_id"];?></td>
                <td><?php echo $value["name"];?></td>
                <td><?php echo $value["price"];?></td>
                <td><img src="<?=base_url()?>images/products/<?php echo $value['image'];?>" class="img-thumbnail" alt="Cinque Terre" width="100px" height="100px" ></td>
                <td>
                    <a href="<?php echo base_url() . "admin/product/update_product/" . $value["id"]; ?>"><button class="btn-primary" >Edit</button></a>
                    <a href="<?=base_url()?>admin/product/delete_product/<?php echo $value["id"];?>""><button class="btn-danger">Delete</button></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>