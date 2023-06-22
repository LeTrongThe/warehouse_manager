
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script>
        function deleteConfirm() {
            if(confirm("Are you sure to delete it?")) {
                return true;
            }
            else {
                return false;
            }
        }
        </script>
        <form name="frm" method="post" action="" style="margin: 100px;">
        <h1>Product Management</h1>
        <p>
        <a href="?page=add_product"> Add Product, </a>  
        <a href="?page=add_category"> Add Category,</a>  
        <a href="?page=add_supplier"> Add Supplier</a> 
    </p>  
        <table id="tableproduct" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Product ID</strong></th>
                    <th><strong>Product Name</strong></th>
                    <th><strong>Price($)</strong></th>
                    <th><strong>Quantity</strong></th>
                    <th><strong>Category</strong></th>
                    <th><strong>Supplier</strong></th>
                    <th><strong>Date</strong></th>
                    <th><strong>Image</strong></th>
                    
                    <th>Action</th>
                </tr>
             </thead>

            <tbody>
        <?php
        include_once("connection.php");
        if(isset($_GET["function"])=="del")
        {
            if(isset($_GET["id"]))
            {
                $id=$_GET["id"];
                mysqli_query($conn, "DELETE FROM product WHERE Product_ID='$id'");
            }              
        }
        $No=1;
                $result = mysqli_query($conn, "SELECT Product_ID, Product_Name, Price, Pro_qty, Pro_image, Cat_Name, sup_name, ProDate
                FROM product a
                INNER JOIN  category b ON a.Cat_ID = b.CAT_ID
                INNER JOIN suppier c ON a.sup_id = c.sup_id
                ORDER BY ProDate DESC");
                // WHERE a.Cat_ID = b.Cat_ID, a.sup_id = c.sup_id ORDER BY ProDate DESC
            
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
        <tr>
              <td ><?php echo $No; ?></td>
              <td ><?php echo $row["Product_ID"]; ?></td>
              <td><?php echo $row["Product_Name"];  ?></td>
              <td><?php echo $row["Price"]; ?></td>
              <td ><?php echo $row["Pro_qty"]; ?></td>
              <td><?php echo $row["Cat_Name"]; ?></td>
              <td><?php echo $row["sup_name"]; ?></td>
              <td><?php echo $row["ProDate"]; ?></td>

             <td align='center' class='cotNutChucNang'>
                 <img src='product-imgs/<?php echo $row['Pro_image']?>' border='0' width="50" height="50"  /></td>
             <td align='center' class='cotNutChucNang'><a href="?page=update_product&&id=<?php echo $row["Product_ID"]; ?>">Edit,</a>
            <a href="?page=product_management&&function=del&&id=<?php echo $row["Product_ID"]; ?>" 
             onclick="return deleteConfirm()"> Delete </a>
            </td>
            </tr>
            <?php
                    $No++;
                }
            ?>
            </tbody>
        </table>
</form>


