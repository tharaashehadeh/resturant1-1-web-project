<title>Fayrouz Restaurant</title>
<link rel = "icon" href="img/f1.png">
<script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","getscat.php?q="+str,true);
            xmlhttp.send();
        }
    }
</script>
<?php include "header.php"; ?>

<link rel="stylesheet" type="text/css" href="style.css">
<div class="content">

        <?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "restaurant";
        $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        $b = $_GET['b'];
        $s = mysqli_query($con,"select * from menu where id='$b'");
        if($r = mysqli_fetch_array($s))
        {
            ?>
    <form action="" method="post" enctype="multipart/form-data">
        <table border=0 align="center" bgcolor="white" width="65%" style="box-shadow: 1px 3px 15px 2px;" cellpadding="10" cellspacing="15" >



                <tr align="center">
                    <td class="title">Update</td>
                </tr>

                <tr align="center">
                    <td>ID</td>

                    <td> <input type="text" name="id" class="text" value="<?php echo $r['id']; ?>"> </td>

                </tr>
                <tr align="center">
                    <td>Food Category</td>
                    <td> <input type="text" name="cat" class="text" value="<?php echo $r['category']; ?>"> </td>

                    </tr>

                <tr align="center">
                    <td>Catagory</td>
                    <td><input type="text" name="scat" value="<?php echo $r['sub_cat']; ?>" placeholder="" class="text" ></td>
                </tr>

                <tr align="center">
                    <td>Title</td>
                    <td><input type="text" name="title" value="<?php echo $r['title']; ?>" placeholder="" class="text" ></td>
                </tr>
                <tr align="center">
                    <td> Detail </td>
                    <td><textarea rows="4" name="detail" cols="40" class="ar" style="background-color: black; color: white; padding: 10px;"><?php echo $r['description']; ?></textarea></td>
                </tr>

                <tr align="center">
                    <td>price </td>
                    <td> <input type="text" name="price" value="<?php echo $r['price']; ?>" class="text"> </td>
                </tr>

                <tr align="center">
                    <td>  Image </td>
                    <td><input type="File" name="img"  placeholder="" class="" required></td>
                </tr>

                <tr>
                    <td colspan=2 align="center"> <input type="submit" name="s" value="Update" class="btn"> </td>
                </tr>

        </table>
    </form>

            <?php
        }
        ?>
    <?php
    if(isset($_POST['s']))
    {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "restaurant";
        $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        $id = $_POST['id'];
        $cat = $_POST['cat'];
        $scat = $_POST['scat'];
        $title = $_POST['title'];
        $det = $_POST['detail'];
        $price = $_POST['price'];
        $i = "mimg/".$_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], $i);
        $sql = "UPDATE `menu` SET `category`='$cat', `sub_cat`='$scat', `title`='$title', `description`='$det', `price`='$price', `image`='$i' WHERE `id`='$id'";

        mysqli_query($con,$sql);
        echo "<div style='text-align:center; font-size:1.3em; color:red;'>Data Updated SuccessFully</div>";

    }
    ?>



</div>
