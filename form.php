<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        background-color: whitesmoke;
    }
    #col1{
        padding-left: 460px;
        margin-top: 60px;
    }
    .name{
        padding: 16px;
        width: 400px;
        border: 1px solid grey;
        color: grey;
        font-size: large;
    }
    .btn{
        background-color: green;
        padding: 17px;
        width: 435px;
    }
</style>
<body>
    <h1 style="text-align:center;">REGISTRATION FORM</h1>
    <form method="POST" action="submit.php">
        <div id="col1">
                <input type="text" placeholder="First name" name="name" class="name"><br><br>
                <input type="text" placeholder="Last name" name="last"class="name" ><br><br>
                <input type="text" placeholder="Email" name="email" class="name"><br><br>
                <input type="text" placeholder="Password" name="pass" class="name"><br><br>
                <input type="submit" class="btn" placeholder="Login">
            </div>
        </div>
    </form>
</body>
</html>