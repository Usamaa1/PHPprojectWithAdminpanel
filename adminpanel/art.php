 <!-- Database Connection -->
 <?php
$con = mysqli_connect('localhost', 'id18789108_root', 'Usama29may1997!', 'id18789108_portfolio');
?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Arts Design</title>
     <link rel="stylesheet" href="style.css">
 </head>

 <body>

     <div class="main-container">
         <div class="category-container">
             <!-- <label for="categories">Choose Category</label> -->
             <select name="category" id="category-items" onchange="location = this.value;">
                 <option value="choose">Choose Category</option>
                 <option value="ads.php">Ads Design</option>
                 <option value="art.php">Arts Design</option>
                 <option value="logos.php">Logos Design</option>
                 <option value="product.php">Porducts Design</option>
                 <option value="promotional.php">Promotional Stuff</option>
                 <option value="uiux.php">UI/UX Design</option>

             </select>
             <div class="logout-btn-wrapper">
         <!-- <div class="logout-btn"><a href="login/logout.php?logout">Logout</a></div> -->
         <?php
                session_start();
                if (isset($_SESSION['User'])) {
                    echo '<div class="logout-btn"><a href="login/logout.php?logout">Logout</a></div>';
                } else {
                    header("location:login/login.php");
                }

                ?>
         </div>
         </div>
         <div class="main-wrapper">

             <div class="main-title-wrapper">
                 <h1 class="main-title">Admin Panel</h1>
                 <h3 class="main-hd">Arts Design</h3>
             </div>

             <div class="add-product-wrapper">
                 <form action="arts.php" method="POST" enctype="multipart/form-data">
                     <div class="productName align-feilds">
                         <label for="productName">Title:</label>
                         <input class="input-border" type="text" name="title">
                     </div>
                     <div class="carName align-feilds">
                         <label for="carName">Description:</label>
                         <input class="input-border" type="text" name="desc">
                     </div>


                     <div class="images">
                         <label for="image">Insert Image:</label>
                         <input type="file" id="img1" name="img" accept="image/*">

                     </div>
                     <div class="submit-button">
                         <input type="submit" value="submit" name="add">
                     </div>
                 </form>
             </div>
         </div>

     </div>

 </body>

 </html>

 <?php
    if (isset($_POST['add'])) {
        // text variables
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $status = 'on';
        // $product_title = $_POST['product_title'];

        //images names
        $img = $_FILES['img']['name'];

        //image temporary names
        $temp_name1 = $_FILES['img']['tmp_name'];


        if ($title == '' or $img == '') {

            echo "<script>
        alert('Please fill all the fields!');
        </script>";
            exit;
        } else {
            move_uploaded_file($temp_name1, "db_images/arts/$img");


            $add = "insert into arts (title, description, img, date) 
                                             values ('$title','$desc','$img',NOW())";

            $run_work = mysqli_query($con, $add);

            if ($run_work) {
                echo "<script>alert('Product inserted sucessfully')</script>";
            }
        }
    }

    ?>