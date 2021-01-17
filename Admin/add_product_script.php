<?php  
set_time_limit(0);
include('config.php');

if(isset($_POST['submit'])) {

   

    $pname= mysqli_real_escape_string($con, $_POST['pname']);
    $price= mysqli_real_escape_string($con, $_POST['price']);
    $pdes= mysqli_real_escape_string($con, $_POST['pdes']);
    $pcat= mysqli_real_escape_string($con, $_POST['pcat']);
    $image = $_FILES['image']['name'];

    function compressImage($source, $destination, $quality)
    {
        $imgInfo = getimagesize($source);
        $mime = $imgInfo['mime'];

        switch ($mime) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($source);
                break;
            case 'image/png':
                $image = imagecreatefrompng($source);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($source);
                break;
            default:
                $image = imagecreatefromjpeg($source);
        }
        if(imagejpeg($image, $destination, $quality)){
        return $destination;
        }
        else{
            return NULL;
        }
    }
    $uploadPath = "uploads/";
    $allowImageTypes = array('jpg', 'png', 'jpeg', 'gif', 'tif');


    if(!empty($image)) {
        $file = time().'-'.basename($image);
        $uploadPath = $uploadPath.$file;
        $fileType = pathinfo($uploadPath, PATHINFO_EXTENSION);
        if(in_array(strtolower($fileType), $allowImageTypes)){
            $imageTemp = $_FILES['image']['tmp_name'];
           
            $compressedImage = compressImage($imageTemp, $uploadPath, 50);
            if($compressedImage != NULL)
            {
            $q = "INSERT INTO products(pname,pcategory,price, pdes, pimage) VALUES ('$pname','$pcat','$price','$pdes','$compressedImage')";
            
            if(mysqli_query($con, $q)){
                echo "<script>alert('Product Added Successfully'); window.location.href='view_products.php'</script>";
            }
            else{
               echo "<script>alert('Product Not Added'); ";
            }
            }

            else{
               echo "<script>alert('Product Not Added(image error)'); window.location.href='add_blog.php'</script>";
            }
        }


        
    }

    
}

?>