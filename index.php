<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHARUSAT</title>
    <style>
        .thankyou-card {
            background-color: #fff;
            /*White card background*/
            background: linear-gradient(to right, #ffffff, #e3f2fd);
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 600px;
            /* Optional maximum width for responsiveness */
        }

        .thankyou-card1 {
            background-color: #fff;
            /*White card background*/
            /* background: linear-gradient(to right, #ffffff, #e3f2fd); */
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0.2, 0.2, 0.5);
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 600px;
            /* Optional maximum width for responsiveness */
        }
        
    </style>
    <!-- <link rel="stylesheet"	href="style.css"> -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <a href="#"><img src="img.png" class="img-fluid" alt="Site Name" class="logo" /></a>
                <h1 class="title mt-3">Campus Anti-Drug Logo Compition</h1>
                <h2 class="title1">By: Anti-Drug and Alcohol Cell</h2>
                <h2> </h2>
                <h2 class="title1">Participants Details</h2>
            </div>
        </div>
        
    
    <!-- Form section that contains the
                    login and the signup form -->
    <div class="form-section container ">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-lg-5 border border-solid border-primary p-5" style="border-radius: 15px;">
                
                <div class="row">
                    <div class="thankyou-card shadow-sm p-3 mb-5 bg-white rounded" style="border-radius: 15px;">
                        <h2>About the Competition</h2>
                        <p>
                            The " Logo Design Competition" is organized by the Anti-Drug Squad -DEPSTAR at CHARUSAT,
                            with a
                            focus on promoting the prohibition and prevention of alcohol and drug use in and
                            around the campus.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col shadow-sm p-3 mb-5 bg-white rounded" style="border-radius: 15px;">
                        <h2>Competition Guidelines</h2>
                        <p>Starts from 26/February/2024 10:00AM Onwards</p>
                        <p>Ends At 2/March/2024 10:00PM</p>
                        <p class="text-danger">No Enteries will be accepted after the deadline*</p>
                        </p>
                    </div>
                </div>
                <!-- signup form -->
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="signup-box">
                        <div class="row">
                            <div class="col">
                                <label for="name">NAME:</label>
                                <input class="form-control" type="text" class="name ele" name="name"
                                    placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">ID:</label> <input class="form-control" type="text" class="name ele"
                                    name="id" placeholder="Enter your ID" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">EMAIL:</label>
                                <input class="form-control" type="email" name="email" class="email ele"
                                    placeholder="yourid@charusat.edu.in" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">MOBILE NO.:</label>
                                <input class="form-control" type="integer" name="number" class="password ele"
                                    placeholder="Number" maxlength="10"
                                    onKeyPress="if(this.value.length==10) return false" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">INSTITUE :</label>
                                <select class="form-select" name="institute" class="email ele" required>
                                    <option value="" selected disabled>-- SELECT INSTITUTE -- </option>
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">DEPARTMENT:</label>
                                <input class="form-control" type="text" name="dept" class="name ele"
                                    placeholder="DEPARTMENT" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">POSTER:</label>
                                <input class="form-control" type="file" id="myFile" name="logo" required>
                                <p class="text-danger"> ONLY JPG,PNG,SVG FORMATES ACCEPTED</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input class="form-control btn btn-success" type="submit" value="SUBMIT" class="clkbtn"
                                    name="submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script>
        $("input[required]").parent("label").addClass("required");
    </script>
    <!-- <script src="sign.js"></script> -->
    <footer class="site-footer footer mt-5">

        <div class="text-center pt-4 px-4" style="background-color: rgba(0, 0, 0, 0.05);">
            <p>Anti-Drug and Alcohol Cell</p>
            <p>Guided by: JAY PATEL</p>
            <p>Prepared By: SHASHVAT (D23DCE158) & JAIMEEN (D23DCE152) </p>
        </div>
        <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.298);">
            <strong>© <span id="year"></span></strong> Copyright: CHARUSAT
        </div>


    </footer>
    </div>
    </div>
    <script>
        const d = new Date();
        let year = d.getFullYear();
        document.getElementById("year").innerHTML = year;
    </script>
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
                            echo "<script>location.href = 'submited'</script>";
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