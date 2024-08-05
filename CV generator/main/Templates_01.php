<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templates_01</title>
    <link rel="stylesheet" href="../main/CSS/Templates_01.css">
</head>
<body>
    <header>
        
    </header>
    <div class="main">
    <div class="up">
        <div class="pic">
<img src="../image/member-1.png.jpg" height="200%" width="100%">
        </div>
        <p id="na"><label for="name">Name</label><input type="text" id="fna"></p><br>
    </div>
    <div class="man">
        <div class="left">
            <p id="con"><label for="contact">Contact: </label><input type="text" id="fcon"></p>
            <p id="mail"><label for="Email">Email: </label><input type="email" id="fmail"></p>
            <p id="loca"><label for="Location">Location: </label><input type="text" id="floca"></p><br>
            <b><u><h2>SKILS</h2></u></b>
            <ul>
                <li id="skil01"><input type="text" id="fskil01"></li>
                <li id="skil02"><input type="text" id="fskil02"></li>
                <li id="skil03"><input type="text" id="fskil03"></li>
            </ul><br>
            <b><u><h2>LANGUAGE</h2></u></b>
            <ul>
                <li id="land01"><input type="text" id="fland01"></li>
                <li id="land02"><input type="text" id="fland02"></li>
                <li id="land03"><input type="text" id="fland03"></li>
            </ul><br>
            <b><u><h2>HOBIES</h2></u></b>
            <ul>
                <li id="hob01"><input type="text" id="fhob01"></li>
                <li id="hob02"><input type="text" id="fhob02"></li>
                <li id="hob03"><input type="text" id="fhob03"></li>
            </ul><br>

        </div>
        <div class="right">
            <b ><u><h1>SUMMARY</h1></u></b>
            <p id="suma"><textarea name="" id="fsuma" cols="60" rows="5">all about you</textarea></p>
            <b><u><h1>EXPIRIENCE</h1></u></b>
            <p id="exp"><textarea name="" id="fexp" cols="60" rows="5">years of expirience</textarea></p>
            <b><u><h1>ACADEMICS</h1></u></b>
            <p id="aca"><textarea name="" id="faca" cols="60" rows="5">Academic parcours</textarea></p>
            <b><u><h1>MORE</h1></u></b>
            <p id="more"><textarea name="" id="fmore" cols="60" rows="5">More about me</textarea></p>
            <p><b>Social Links</b></p>

        </div>

    </div>
</div>
    <button id="sub">Generate CV</button>
    <script src="index.js"></script>
</body>
</html>