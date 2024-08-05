<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_up</title>
    <link rel="stylesheet" href="../main/CSS/sign_up.css">
</head>
<body>
    <div class="main">
    <form>
        <label>User-name: </label><input type="text"><br>
        
        <label>phone number: </label><input type="text"><br>
        
        <label>email: </label><input type="email"><br>
        
        <label>pasword: </label><input type="text"><br>
        <button id="1sign"><a href="../main/home.php">sign_up</a></button>
    </form>
</div>
<script>
    document.getElementById("1sign").onclick = function(){
        alert ("YOU NOW OWN AN ACCOUNT");
    }
</script>
</body>
</html>