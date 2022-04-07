<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php
        $productNameErr = $priceErr = $categoryErr = $imageErr = $commentErr = "";
        $existsFileErr = $checkImageErr = $fileSizeErr = $filetypeErr = $uploadErr = "";
        $productName = $category = $image = $comment = "";
        $price = 0;
        $uploadOk = 1;
        $insertData = "";
        $insertDataErr = "";
        $insertSQL = "";

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST["productname"])){
                $productNameErr = "*Vui lòng nhập dữ liệu";
            } else{
                $productName = $_POST["productname"];
            }
            if(empty($_POST["price"])){
                $priceErr = "*Vui lòng nhập dữ liệu";
            } else{
                if($_POST["price"] < 0) $priceErr = "*Vui lòng nhập số dương";
                else{ $price = $_POST["price"];}
            }
            if(empty($_POST["comment"])){
                $commentErr = "*Vui lòng nhập dữ liệu";
            } else{
                $comment = $_POST["comment"];
            }
            //Upload Image
            $target_dir = "images/";
            $fileName = basename($_FILES["imageFile"]["name"]);
            if($fileName == ""){
                $imageErr = "*Vui lòng chọn hình ảnh";
            } else{
                uploadImage($target_dir,$fileName);
            }

            $insertSQL = "INSERT INTO tblsanpham (ten, gia, hinh,mota) 
                    VALUES ('$productName', '$price', '$fileName', '$comment')";

            if (mysqli_query($conn, $insertSQL)) {
              $insertData = "New Product created successfully";
              echo "New Product created successfully";
            } else {
              $insertDataErr = "Error: " . $insertSQL . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    ?>
<!-- Form Data -->
    <div class="container-fluid">
        <div class="row">
            <!-- Import Data -->
            <div class="form-group col-sm-5 col-md-6">
                <h2 class="col-md-6 text-danger">Thêm Sản Phẩm</h2>
                <span class="error col-md-2">* required field</span></p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">  
                    <label class="control-label col-md-3">Tên Sản Phẩm</label><br>
                    <div class="col-md-10">
                        <input type="text" name="productname" value="" class="form-control" placeholder="Nhập tên sản phẩm">
                        <span class="error"> <?php echo $productNameErr; ?> </span>
                    </div>
                    <br>
                    <label class="control-label col-md-2">Giá bán</label><br>
                    <div class="col-md-10">
                        <input type="number" name="price" value="" class="form-control" placeholder="Nhập giá"> 
                        <span class="error"> <?php echo $priceErr; ?> </span> 
                    </div>
                    <br>
                     
                    <label class="control-label col-md-2">Hình ảnh</label><br>
                    <div class="col-md-10" >     
                        <input type="file" name="imageFile"><br>
                        <span class="error"> <?php echo $imageErr;?></span>
                        <span class="error"> <?php echo $existsFileErr;?></span>
                        <span class="error"> <?php echo $fileSizeErr;?></span>
                        <span class="error"> <?php echo $uploadErr;?></span>
                        <span class="error"> <?php echo $checkImageErr;?></span>
                        <span class="error"> <?php echo $image;?></span>
                    </div>
                    <br>

                    <label class="control-label col-md-2">Mô tả</label><br>
                    <div class="col-md-10">
                        <textarea name="comment" rows="5" cols="40" class="form-control" placeholder="Nhập mô tả"></textarea>
                        <span class="error"> <?php echo $commentErr; ?> </span> 
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <a class="btn btn-primary btn-sm form-control" href="index.php">
                                Back to Home
                            </a>  
                        </div>
                        <div class="col-md-5">
                            <input type="submit" name="submit" value="Submit" class="btn btn-success btn-sm form-control">  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        function uploadImage($target_dir, $fileName){
            $tmp = $_FILES["imageFile"]["tmp_name"];
            $target_file = $target_dir . $fileName;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $check = getimagesize($tmp);
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $check = getimagesize($tmp);
                if($check !== false) {
                    $uploadOk = 1;
                } 
                else {
                    $GLOBALS['checkImageErr'] = "File is not an image.";
                    $uploadOk = 0;
                }
                // Check if file already exists
                if (file_exists($target_file)) {
                    $GLOBALS['existsFileErr'] =  "Sorry, file already exists.";
                    $uploadOk = 0;
                }
                // Check file size
                if ($_FILES["imageFile"]["size"] > 500000) {
                    $GLOBALS['fileSizeErr'] = "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                    $GLOBALS['filetypeErr'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
                if ($uploadOk == 0) {
                    $GLOBALS['uploadErr'] = "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } 
                else {
                    if (move_uploaded_file($tmp, $target_file)) {
                        $GLOBALS['image'] = "The file ". htmlspecialchars($fileName). " has been uploaded.";
                    } 
                    else {
                        $GLOBALS['uploadErr'] = "Sorry, there was an error uploading your file.";
                    }
                }
            }
        } 
    ?>
</body>
</html>