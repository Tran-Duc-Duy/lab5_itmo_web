<?php
$sql_brand= "SELECT * FROM brands";
$query_brand = mysqli_query($connect, $sql_brand);

if(isset($_POST['sbm'])){
    $prd_name = $_POST['prd_name'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $brand_id = $_POST['brand_id'];
    $sql ="INSERT INTO products (prd_name, image, price, quantity, description, brand_id ) VALUES('$prd_name', '$image', $price, $quantity, '$description', $brand_id)";
    $query = mysqli_query($connect, $sql);
    move_uploaded_file($image_tmp, 'img/'.$image);
    header('location: index.php?page_layout=list');
}
?>

<div class="container-fuild">
    <div class="card">
        <div class="card-header">
            <h2>Add products</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Product's Name</label>
                    <input type="text" name="prd_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Product's Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Product's Price</label>
                    <input type="number" name="price" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Product's quantity</label>
                    <input type="number" name="quantity" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Product's description</label>
                    <input type="text" name="description" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select class="form-control" name="brand_id" >
                        <?php
                        while($row_brand = mysqli_fetch_assoc($query_brand)){?>
                            <option value = "<?php echo $row_brand['brand_id'] ?>"><?php echo $row_brand['brand_name'] ?></option>
                        <?php } ?>

                    </select>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Add</button>
            </form>
        </div>
    </div>
</div>