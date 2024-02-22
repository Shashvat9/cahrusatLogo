<?php
class file_mani 
{
    function uplode($FileName,array $AllowedExtansion,$FileDestinationPath,$NewFileName="0",$AllowedFileSize=5242880)
    {
        $file=$_FILES[$FileName];
        $file_name=$_FILES[$FileName]["name"];
        $file_tmp_name=$_FILES[$FileName]["tmp_name"];
        $file_size=$_FILES[$FileName]["size"];
        $file_error=$_FILES[$FileName]["error"];
        $file_type=$_FILES[$FileName]["type"];

        $file_get_ex=explode('.',$file_name);
        $file_ex=strtolower(end($file_get_ex));

        $allowed_ex=$AllowedExtansion;

        //this will chack if the file formate is alloud or not
        if(in_array($file_ex,$allowed_ex))
        {
            if($file_error==0)
            {
                if($file_size < $AllowedFileSize)
                {
                    if($NewFileName=="0")
                    {
                        $file_new_name=uniqid('',true).".".$file_ex; 
                    }
                    else
                    {
                        $file_new_name=$NewFileName.".".$file_ex; 
                    }
                    $file_destination=$FileDestinationPath. $file_new_name;
                    if(move_uploaded_file($file_tmp_name,$file_destination))
                    {
                        return true;
                    }
                    else{
                        return false;
                    }
                }
                else
                {
                    echo "<script>alert('This is too large file.')</script>";
                }
            }
            else
            {
                // echo "<script>alert('There is a error in file uplode please try again.')</script>";
                throw new Exception("There is a error in file uplode error no".$file_error);
            }
        }
        else
        {
            echo "<script>alert('This file type is not allowed please enter a valid file type.')</script>";
        }

    }   

    function insertIntoDb($id,$name,$email,$number,$institute,$dept,$timestamp,$con)
    {
        $sql="INSERT INTO records (`id`, `name`, `email`, `contectNumber`, `institute`,`dept`,`timeStamp`) VALUES ('$id','$name','$email','$number','$institute','$dept','$timestamp')";
        if($con->query($sql))
        {
            // echo "<script>alert('Your responce is reported successfull')</script>";
            return true;
            // echo "done";
        }
        else
        {
            // echo "<script>alert('There is an error while uploding your file.')</script>";
            return false;
            // echo "not done";
        }
    }
} 
?>