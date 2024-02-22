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

                        <lable for="name" >NAME:
                        <input type="text" class="name ele" name="name" placeholder="Enter your name" required></lable>
                           <lable for="name">ID: <input type="text"
                            class="name ele" name="id"
                            placeholder="Enter your ID" required></lable>
                        <lable for="name" >EMAIL:
                        <input type="email" name="email"
                            class="email ele" 
                            placeholder="yourid@charusat.edu.in"required></lable>
                            <lable for="name" >MOBILE NO.:
                        <input type="integer" name="number"
                            class="password ele"
                            placeholder="Number"  maxlength="10" onKeyPress="if(this.value.length==10) return false" required></lable>
                            <lable for="name" >INSTITUE :
                            <select name="institute" class="email ele"required> 
                                <option value="DEPSTAR">DEPSTAR</option> 
                                <option value="CSPIT">CSPIT</option> 
                                <option value="PDPIAS">PDPIAS</option> 
                                <option value="RPCP">RPCP</option> 
                                <option value="CMPICA">CMPICA</option>
                                <option value="AIRP">AIRP</option>  
                                <option value="CIPS">CIPS</option> 
                                <option value="MTIN">MTIN</option> 
                                <option value="IIIM">IIIM</option> 
                            </select></lable>
                            <lable for="name" >DEPARTMENT:
                        <input type ="text" name="dept" class = "name ele" placeholder="DEPARTMENT" required></lable>
                        <input type="file" id="myFile" name="logo"required>
                        <p class="mad"> ONLY JPG,PNG,SVG FORMATES ACCEPTED</p>
                        <input type="submit" value="SUBMIT" class="clkbtn" name="submit">
                        
			        </div>
            </form>
				
		</div>
	</div>
    <script>
        $("input[required]").parent("label").addClass("required");
    </script>
	<!-- <script src="sign.js"></script> -->
    <footer class="site-footer">
    <p>Copyright &copy; 2022 CHARUSAT</p>
    <p>Anti-Drug and Alcohol Cell</p>
    <p>Guided by: JAY PATEL</p>
    <p>Prepared By: SHASHVAT (D23DCE158) & JAIMEEN (D23DCE152) </p>
</footer>
</body>
</html>


<?php
    include './helperclasses.php';
    include './conn.php';

    if(isset($_COOKIE['isSubmited'])){
        header("Location: submited");
    }

    $timest=date("Y-m-d",time());

    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $institute=$_POST['institute'];
        $dept=$_POST['dept'];
        $aloud_ext=array("jpg","png","jpeg","svg");

        $obfile= new file_mani();

        if(file_exists("Logos/"))
        {
            if(file_exists("Logos/" . $id . ".jpg") || file_exists("Logos/" . $id . ".png") || file_exists("Logos/" . $id . ".jpeg")|| file_exists("Logos/" . $id . ".svg"))
            {
                echo "<script>alert('There alrady an entry with this id.')</script>";
            }
            else
            {
                try{
                    if($obfile->uplode("logo",$aloud_ext,"Logos/",$id)){
                        if($obfile->insertIntoDb($id,$name,$email,$number,$institute,$dept,$timest,$con)){
                            echo "<script>alert('Your entry is submited successfully.')</script>";
                            setcookie("isSubmited","true",time()+60*60*24*30);
                            echo "<script>location.href='submited'</script>";
                        }
                        else
                        {
                            echo "<script>alert('There is an error while uploding your file.')</script>";
                        }
                    }   
                }
                catch (Exception $e){
                    echo "<script>alert('There is an error while uploding your file.')</script>";
                }
            }
        }
        else{
            mkdir("Logos/");
            try{
                if($obfile->uplode("logo",$aloud_ext,"Logos/",$id)){
                    if($obfile->insertIntoDb($id,$name,$email,$number,$institute,$dept,$timest,$con)){
                        echo "<script>alert('Your entry is submited successfully.')</script>";
                        setcookie("isSubmited","true",time()+60*60*24*30);
                    }
                    else
                    {
                        echo "<script>alert('There is an error while uploding your file.')</script>";
                    }
                }   
            }
            catch (Exception $e){
                echo "<script>alert('There is an error while uploding your file.')</script>";
            }
        }
    }
?>