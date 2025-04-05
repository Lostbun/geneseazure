<?php 

    session_start();

    //$user = $_SESSION['user'];
    //$pass = $_SESSION['pass'];

    $properuser = 'admins';
    $properpass = 'daniel';

    
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];


    }

    if(isset($_SESSION['pass'])){
        $pass = $_SESSION['pass'];
     
    }



    if ($user == $properuser && $pass == $properpass) {
            
    }else{
        header("Location: index.php");
        exit();
    }

    



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminpage.css">
    
</head>
<body>
    




<header class="header">
    <a href="#one">
    <img  class="logo" src="images/DevOpslogos.png" width="165" height="50">

    </a>



    <div id="navcontain">
    <nav >
        <a href="#one">Home</a>
        <a href="#two">Project Description</a>
        <a href="#five">Members</a>
        <a href="logout.php">Logout</a>
    
    </nav>
    </div>
</header>



<!-- HOME PAGE --> <!-- HOME PAGE --> <!-- HOME PAGE --> <!-- HOME PAGE --> <!-- HOME PAGE --> <!-- HOME PAGE --> <!-- HOME PAGE --> <!-- HOME PAGE -->
<section class="one" id="one">

<div class="homedesc">

<div id="homedescup">

</div>
<div id="homedescdown">


    <div class="eyelogo"></div>
    <div id="headercontain">
    <h2 id="eyeheader">Greet The World With a Better View</h2>

    <a href="#two">
    <button class="laptopbutton">
        <span class="laptopbutton_lg">
            <span class="laptopbutton_sl"></span>
            <span class="laptopbutton_text">Get Started</span>
        </span>
       </button>
    </a>    



   </div>
    <p id="eyepara"><!-- The Eye2Wear: Online Eye Clinic for Ambher Optical and Bautista Eye Center with SMS Notification 
        is a web application that will manage the transaction processes for Ambher Optical and Bautista Eye Center. 
        It will handle the patient appointment scheduling and viewing services offered by the two clinics.
        The system will associate various services provided by the optometry and ophthalmology clinic.--></p>
</div>

 </div>

 <div class="home3d">
    <div id="optocontain"></div>

 </div>



 </section>







<!-- PROJECT DESCRIPTION --> <!-- PROJECT DESCRIPTION --> <!-- PROJECT DESCRIPTION --> <!-- PROJECT DESCRIPTION --> <!-- PROJECT DESCRIPTION --> 
 <section class="two" id="two">

 <div id="projdesc1">
    <h1 id="projecthead1">The Eye2Wear</h1>
    <h2 id="projecthead2">Project Description</h2>
    <p id="projectdesc1" class="pdesc">The proposed online eye clinic system for Ambher Optical and Bautista Eye Center is designed to enhance booking consultations 
        and improve patient accessibility to eyecare services, making the process convenient while also providing staff with a system 
        that can track patient records like managing consultation requests, updating prescriptions, and monitoring scheduled patients.
    </p></br>
    <p id="projectdesc2" class="pdesc">
        With the help of our website, registered patients can book a consultation appointment online, ensuring a smooth and easy process.
         The website provides SMS notifications to alert patients about their appointments and also enables them to message the clinic for inquiries. 
         Patients can conveniently pick up their eyewear orders at the clinic.
    </p>
 </div>
 <div id="projdesc2">
    <div id="projimg">

    </div>
 </div>

 </section>







<section class="three" id="three">

    <div id="three1">
        <img src="images/po.png" height="60" width="500">
    </div>
    <div id="three2">
        <div id="speccontain">
            <h1 id="probhead">Problem of the Study</h1>
            <p id="probdesc">The main problem of the study is how to develop and implement a web-based system that will manage eyewear clinic 
                transactions efficiently, providing reliable client information, appointment scheduling, order processing, and 
                inventory management while ensuring a seamless experience for patients and healthcare professionals.</p>



            <h1 id="probheads">Specific Problems</h1>
            <p class="orderspec">1. How is the system enabling patients to register and create secure accounts for accessing clinic services?</p>
            <p class="orderspec">2. How is the system enabling patients to schedule an appointment efficiently with an optometrist or ophthalmologist?</p>
            <p class="orderspec">3. How is the system maintaining accurate records of patient consultations and prescriptions?</p>
            <p class="orderspec">4. How is the system managing product inventory and prescription-based orders?</p>
            
        </div>
        <div id="objcontain">

            <h1 id="probheada">Objectives of the Study</h1>
            <p id="probdesc">The main objective of the study is to develop and implement an Online Eyewear Clinic Management System for Ambher Optical and
                 Bautista Eye Center to streamline operations, enhance customer service, and ensure efficient scheduling, order management, and communication.</p>

            </br>

            <h1 id="probheads">Specific Objectives</h1>
            <p class="orderspec">1. Enabling patients to register and create secure accounts to access clinic services;</p>            </br>
            <p class="orderspec">2. Enabling registered patients to schedule appointments efficiently with an optometrist or ophthalmologist through an integrated appointment module;</p>
            <p class="orderspec">3. Maintaining accurate records of patient consultations, prescriptions, and past visits to ensure comprehensive medical history tracking;</p>
            <p class="orderspec">4. Managing product inventory and prescription-based orders through an organized product management and ordering module;</p>
            

        </div>
    </div>
    
 </section>











 <section class="four" id="four">

    <div class="techcon">
        <div class="techheader"></div>
        <div class="techheader">
            <img src="images/ddd.png" width="295px" height="55px">
        </div>
        <div class="techicons">
            <div class="techcontain"  id="vite">
                <a href="https://vite.dev/"><img src="images/icons/Vite.js.png" width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(81, 4, 154));"></a>
            </div>
            <div class="techcontain" id="react">

                <a href="https://react.dev/">
                <img src="images/icons/React.png" width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(4, 59, 154));">
                </a>

            </div>
            <div class="techcontain" id="bootstrap">

               <a href="https://getbootstrap.com/">
                <img src="images/icons/Bootstrap.png" width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(112, 4, 154));">
                </a>

            </div>
            <div class="techcontain" id="tailwind">

                <a href="https://tailwindcss.com/">
                <img src="images/icons/Tailwind CSS.png"width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(4, 97, 154));">
                </a>

            </div>
            <div class="techcontain" id="node">

                <a href="https://nodejs.org/en">
                <img src="images/icons/Node.js.png" width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(39, 154, 4));">
                </a>

            </div>
            <div class="techcontain" id="html">

                <a href="https://html.com/">
                <img src="images/icons/HTML5.png"width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(154, 74, 4));">
                </a>

            </div>
            <div class="techcontain" id="css">

                 <a href="https://css-tricks.com/">
                <img src="images/icons/CSS3.png"width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(4, 124, 154));">
                </a>

            </div>
            <div class="techcontain" id="javascript">

                <a href="https://www.javascript.com/">
                <img src="images/icons/JavaScript.png" width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(154, 149, 4));">
                </a>

            </div>
            <div class="techcontain" id="mongo">

                    <a href="https://www.mongodb.com/">
                  <img src="images/icons/MongoDB.png" width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(4, 154, 22));">
                  </a>

                </div>
            <div class="techcontain" id="eslint">

                    <a href="https://eslint.org/">
                  <img src="images/icons/ESLint.png" width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(89, 4, 154));">
                  </a>

            </div>
        </div>
    </div>
    <div class="techcon">
        <div class="techheader">
            <img src="images/aaa.png" width="300px" height="50px">
        </div>
        <div class="techicons">
            <div class="techcontain" id="github"> 

                 <a href="https://github.com/">
                <img src="images/icons/GitHub.png" width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(103, 114, 132));">
                </a>

          </div>
          <div class="techcontain" id="figma">

            <a href="https://www.figma.com/login?is_not_gen_0=true&resource_type=team">
            <img src="images/icons/Figma.png" width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(154, 7, 4));">
            </a>

      </div>
      <div class="techcontain" id="vscode">

        <a href="https://code.visualstudio.com/">
        <img src="images/icons/Visual Studio Code (VS Code).png" width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(4, 59, 154));">
        </a>

  </div>
  <div class="techcontain" id="stackoverflow">

    <a href="https://stackoverflow.com/questions">
    <img src="images/icons/Stack Overflow.png" width="70px" height="70px" style="filter: drop-shadow(1px 1px 10px rgb(154, 109, 4));">
    </a>

</div>
        </div>
    </div>
    
 </section>





<!-- MEMBERS --> <!-- MEMBERS --> <!-- MEMBERS --> <!-- MEMBERS --> <!-- MEMBERS --> <!-- MEMBERS --> <!-- MEMBERS --> <!-- MEMBERS --> <!-- MEMBERS -->
<section class="five" id="five">

    <div id="membershead">
        <img src="images/memberslogo.png" width="250" height="90">
    </div>
    <div id="membercontain">

        <div class="members">
        <img class="mempic"  src="images/aljhon.png" width="200" height="200" style="border-radius: 20px;"></img>
        <h1 class="memname">Aljhon P. Lopez</h1>
        <h2 class="memaddress">Samal, Bataan</h2>
        <h2 class="memrole">Documentation Leader</h2>
        <h2 class="memdesc">Description: Manages all information in the paperwork.</h2>
        </div>


        <div class="members">
            <img class="mempic" src="images/francis.jpg" width="200" height="200" style="border-radius: 20px;"></img>
            <h1 class="memname">Francis M. Genese</h1>
            <h2 class="memaddress">Limay, Bataan</h2>
            <h2 class="memrole">Fullstack Developer</h2>
            <h2 class="memdesc">Description: Handles all the system processes, ui/ux, and website structure</h2>
            </div>


            <div class="members">
            <img class="mempic" src="images/johanes.png" width="200" height="200" style="border-radius: 20px;"></img>
            <h1 class="memname">Johannes C. Aquino</h1>
            <h2 class="memaddress">Abucay, Bataan</h2>
            <h2 class="memrole">Quality Analyst</h2>
            <h2 class="memdesc">Description: Ensures system meets quality standards by testing, analyzing, and checking its performance</h2>
            </div>


            <div class="members">
            <img class="mempic" src="images/gab.png" width="200" height="200" style="border-radius: 20px;"></img>
            <h1 class="memname">Gabriel B. Velasco</h1>
            <h2 class="memaddress">Mariveles, Bataan</h2>
            <h2 class="memrole">System Analyst</h2>
            <h2 class="memdesc">Description: Analyzing the system to improve user experience</h2>
            </div>
            
            
            




    </div>


    
 </section>


 

 <script src="adminpage.js" type="text/javascript"></script>


</body>
</html>