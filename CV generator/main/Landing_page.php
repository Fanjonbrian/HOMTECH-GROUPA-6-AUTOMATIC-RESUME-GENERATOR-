<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CV_Landing-page </title>
    <link rel="stylesheet" href="../main/CSS/index.css">
</head>
<body>

    <div class="low">
        <div id="logo"><img src="../img/LOGO.png" alt=""></div>
    </div>
    
        <nav>
         <div class="left"> <button type="log"><a href="log_in.php">log_in</a></button></div>
            
            <div class="right"> <button type="sign"><a href="sign_up.php
        ">Sign_up</a></button></div>
         </nav>
    <form>
        <label>First_Name: </label><input type="text" placeholder="first name"> <br>
        <label>Last_Name: </label><input type="text" placeholder="first name" > <br>
        <label>D_O_D: </label><input type="date"><br>
        <p>
            Region_of_Residence:
            <select name="degree">
                <option value="north_west">North_west</option>
                <option value="South_west">South_west</option>
                <option value="North">North</option>
                <option value="South">South</option>
                <option value="EaSth">Easth</option>
                <option value="West">West</option>
                <option value="Centre">Centre</option>
                <option value="Farnorth">Farnorth</option>
                <option value="Adamaoua">Adamaoua</option>
                <option value="Littoral">Littoral</option>
            </select>
        </p><br>
        <p>
        Accademic_level:
        <select>
            <option value="FSLC">FSLC</option>
            <option value="BEPC">BEPC</option>
            <option value="O-L">O-L</option>
            <option value="PROBATOIR">PROBATOIR</option>
            <option value="BAC/A-L">BAC/A-L</option>
            <option value="HND/BTS">HND/BTS</option>
            <option value="liscence">Liscence</option>
            <option value="Batchelors degree">BATCHELOR</option>
            <option value="MASTERS">MASTERS</option>
            <option value="PHD">PHD</option>
        </select>
        </p><br>
        <label for="field">Field: </label><input type="text"><br>
        <label for="">Years_of_expirience: </label><input type="number"><br>
        <label for="Married">Married?: </label><input type="checkbox"><br>
        <label for="more">More_about_me: </label><input type="text"><br>
        <button id="but"><a href="sign_up.php
    ">submit</a></button>
    </form>
    <footer>
        <div class="first">
            About
            <ul>
                <li>Premiume</li>
                <li>Job</li>
                <li>Companies</li>
            </ul>
        </div>
        <div class="sec">

        </div>
        <div class="third">
            <ul>
                <li>HOMTECH_PROJECT</li>
                <li>+237-651-257-276</li>
                <li>Online_CV maker</li>
            </ul>
        </div>
    </footer>

    
</body>
</html>