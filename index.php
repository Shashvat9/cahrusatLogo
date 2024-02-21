<!-- <!DOCTYPE html>
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
</html> -->
<!DOCTYPE html>
<html lang="en">
    
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<title>CHARUSAT</title>
	<link rel="stylesheet"	href="style.css">
        
</head>

<body>
<header>
    <a href="#"><img src="img.png" alt="Site Name" class="logo"/></a>
    <h1 class="title">Campus Anti-Drug Logo Compition</h1>
	<h2 class="title1">By: Anti-Drug and Alcohol Cell</h2>
	<h2> </h2>
	<h2 class="title1">Participants Details</h2>
</header>
		<!-- Form section that contains the
			login and the signup form -->
		<div class="form-section">
			<!-- signup form -->
            <form action="" method="post" enctype="multipart/form-data">
                    <div class="signup-box">

                        <input type="text"class="name ele" name="name" placeholder="Enter your name">
                            <input type="text"
                            class="name ele" name="id"
                            placeholder="Enter your ID">

                        <input type="email" name="email"
                            class="email ele"
                            placeholder="youremail@charusat.edu.in">

                        <input type="integer" name="Number"
                            class="password ele"
                            placeholder="Number"  maxlength="10" onKeyPress="if(this.value.length==10) return false" >

                            <select name="institute" class="email ele"> 
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

                        <input type="file" id="myFile" name="logo">

                        <input type="submit" value="SUBMIT" class="clkbtn" name="submit">
			        </div>
            </form>
				
		</div>
	</div>
	<!-- <script src="sign.js"></script> -->
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

        if(file_exists("Logos/"))
        {
            if(file_exists("Logos/" . $id . ".jpg") || file_exists("Logos/" . $id . ".png") || file_exists("Logos/" . $id . ".jpeg")|| file_exists("Logos/" . $id . ".pdf"))
            {
                echo "<script>alert('There alrady an entry with this id.')</script>";
            }
            else
            {
                try{
                    $obfile->uplode("logo",$aloud_ext,"Logos/",$id);
                    $obfile->insertIntoDb($id,$name,$email,$number,$institute,$timest,$con);
                }
                catch (Exception $e){
                    echo "<script>alert('There is an error while uploding your file.')</script>";
                }
            }
        }
        else{
            mkdir("Logos/");
            try{
                $obfile->uplode("logo",$aloud_ext,"Logos/",$id);
                $obfile->insertIntoDb($id,$name,$email,$number,$institute,$timest,$con);

            }
            catch (Exception $e){
                echo "<script>alert('There is an error while uploding your file.')</script>";
            }
        }
    }
?>