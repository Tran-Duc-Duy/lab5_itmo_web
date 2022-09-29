<?php
    $sql="SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
$query=mysqli_query($connect,$sql);
    ?>

<div class="container-fuild">
    <div class="card">
        <div class="card-header">
            <h2>List products</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i=1;
                while($row = mysqli_fetch_assoc($query)){?>
                <tr>
                    <td><?php echo $i++?></td>
                    <td><?php echo $row['prd_name']?></td>
                    
                    <td>
                        <img style="width: 100px" src="img/<?php echo $row['image']?>"  alt="img">
                    </td>
                    
                    
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['quantity']?></td>
                    <td><?php echo $row['description']?></td>
                    <td><?php echo $row['brand_name']?></td>
                    <td><a href="index.php?page_layout=update&id=<?php echo $row['prd_id']; ?>"> Edit</a></td>
                    <td><a onclick="return Del('<?php echo $row['prd_name'];?>')"  href= "index.php?page_layout=delete&id=<?php echo $row['prd_id']; ?>" >Delete</a></td>
<!--                    <td>--><?php //echo $row['']?><!--</td>-->
<!--                    <td>--><?php //echo $row['']?><!--</td>-->
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=create">Add</a>
        </div>
    </div>
</div>

<script>
    function Del(name){
        return confirm("are you sure to delete: "+name+" ?");
    }
</script>