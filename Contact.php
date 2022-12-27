<?php
$esm= null;
$email=null;
$message=null;
$filecount=null;
$file=null;
$payam=null;
if(isset($_REQUEST['esm'])){
    if(isset($_REQUEST['email'])){
        if(isset($_REQUEST['message'])){
            $esm = $_REQUEST['esm'];
            $email = $_REQUEST['email'];
            $message = $_REQUEST['message'];

            $filecount = count(glob("messages/message*"));
            //$file = fopen("/salam.txt", "w");
            $file = fopen("messages/message " . $filecount . ".txt","w");
            $payam = "name: " . $esm . "\nemail: " . $email . "\nmessage: " . $message; 
            fwrite($file , $payam);
            fclose($file);
        }
    }
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Resume</title>
        <link rel="stylesheet" href="default.css">
    </head>


    <body style="direction: rtl">


        <nav>
            <ul class = "navigationbar">
                <a href="./index.html">
                    <li id="intro">
                        معرفی
                    </li>
                </a>
                <a href="./Skills.html">
                    <li id="skills">
                        مهارت ها و توانمندی ها
                    </li>
                </a>
                <a href="./Honors.html">
                    <li id="honors">
                        افتخارات
                    </li>
                </a>
                <a href="./Contact.php">
                    <li id="contact">
                        تماس با من
                    </li>
                </a> 
            </ul>
        </nav>


        
        <br/><br/><br/><br/><br/>
        <form method="post" action="">
            <label> نام و نام خانوادگی: </label>
                <input name="esm" class="nameinp"  type="text">
            <br/>
            <label> ایمیل: </label>
                <input name="email" class="emailinp"  type="email">
            <br/>
            <labe> متن پیام:</labe>
            <br/>
                <textarea name="message" class="textarea"></textarea>
            <br/>
                <input onclick="checksubmit()" class="submitbutton" type="submit" value="ثبت">
        </form>




        
        <footer class = "footer" style="direction: ltr">
            <ul>   
                <a href = "http://www.sharif.ir"> <img align="right" width = "75px"  src="./images/sharif.png" alt="this is a image"></a>
                <a href = "http://sharif.edu/~zarrabi/notes/%DA%A9%D8%A7%D8%B1%DA%AF%D8%A7%D9%87_%DA%A9%D8%A7%D9%85%D9%BE%DB%8C%D9%88%D8%AA%D8%B1/%D9%81%D9%87%D8%B1%D8%B3%D8%AA"><img align="right" width = "100px"  src="./images/cw.png" alt="this is a image"></a>
                <a href = "https://github.com/M-Arian1"> <img align="left" width = "75px"  src="./images/github.png" alt="this is a image"></a>
                <a href = "https://stackoverflow.com/users/19647510/m-arian"> <img align="left" height="100px"  src="./images/stackoverflow.png" alt="this is a image"></a>
                <div class="gmail">
                    <img align="left" width = "75px"  src="./images/gmail.png" alt="this is a image">
                    <div>
                        arian.iravaninia@gmail.com
                    </div>
                </div>
            </ul>
        </footer>


    </body>
    <script src="main.js"></script>
</html>