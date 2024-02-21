<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uplode Logo</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name" id="" placeholder="Name">
        <br>
        <input type="text" name="id" id="" placeholder="ID number">
        <br>
        <input type="email" name="email" id="" placeholder="University mail">
        <br>
        <input type="number" name="number" id="" placeholder="Mobile Number">
        <br>
        <select name="institute" id="">
            <option value="DEPSTAR">DEPSTAR</option>
            <option value="CSPIT">CSPIT</option>
            <option value="PDPIAS">PDPIAS</option>
            <option value="RPCP">RPCP</option>
            <option value="CMPICA">CMPICA</option>
            <option value="AIRP">AIRP</option>
            <option value="CIPS">CIPS</option>
            <option value="MTIN">MTIN</option>
            <option value="IIIM">IIIM</option>
        </select>
        <br>
        <label for="file">Uplode file</label>
        <input type="file" name="logo" id="">
        <br>
        <input type="submit" value="SUBMIT" name="submit">
    </form>
</body>
</html>

<?php
    include './helperclasses.php';
    include './conn.php';
    
    $timest=date("Y-m-d",time());

    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $institute=$_POST['institute'];
        $aloud_ext=array("jpg","png","jpeg","pdf");

        $obfile= new file_mani();

        if(file_exists("files/"))
        {
            if(file_exists("files/" . $id . ".jpg") || file_exists("files/" . $id . ".png") || file_exists("files/" . $id . ".jpeg")|| file_exists("files/" . $id . ".pdf"))
            {
                echo "<script>alert('There alrady an entry with this id.')</script>";
            }
            else
            {
                try{
                    $obfile->uplode("logo",$aloud_ext,"files/",$id);
                    $obfile->insertIntoDb($id,$name,$email,$number,$institute,$timest,$con);
                }
                catch (Exception $e){
                    echo "<script>alert('There is an error while uploding your file.')</script>";
                }
            }
        }
        else{
            mkdir("files/");
            try{
                $obfile->uplode("logo",$aloud_ext,"files/",$id);
                $obfile->insertIntoDb($id,$name,$email,$number,$institute,$timest,$con);

            }
            catch (Exception $e){
                echo "<script>alert('There is an error while uploding your file.')</script>";
            }
        }
    }
?>