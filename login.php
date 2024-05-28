<html>
    <head>
        <title>form</title>
<style>
    body{
        background-color: rgb(212, 212, 212);
    }
    button{
       box-shadow: 1px solid rgb(107, 106, 106);
    }
    .first{
    text-align: center;
    background-color: white;
    width: 30%;
    margin-left: 35%;
    border: 1px solid rgb(255, 255, 255);
}
h1{
   
    color: rgb(0, 0, 0);
    text-align: center;
}
label{
    font-size: 15px;
    color: rgb(12, 12, 12);
    font-family: arial;
}
.second{
    margin-left: 10px;
}
span{
    font-size: 20px;
    color: rgb(0, 0, 0);
    font-family: arial;
}
.rrr{
   width:80%;
    height: 50px;
    border: 2px solid rgb(32, 15, 12);
    border-radius: 10px;
}
textarea{
    border: 2px solid rgb(51, 48, 48);
}
button{
    background-color:wheat;
    width:98%;
    font-size: 20px;
    padding: 20px;
    border: 3px solid white;
    border-radius: 30px;

    cursor: pointer;
    
}
button:hover{
    background-color: rgb(179, 168, 167);

}
input[type="radio"]
{
    box-shadow: 0 0 10px rgb(36, 26, 24);
}
input::placeholder{
    font-size: 15px; 
}
input{
    margin: 5px;
}
.a00a{
    margin-top: 5%;

}
</style>
    </head>
    <body>
        <div class="a00a">
        <h1> Fast Courier and Cargo service <br>023-534177</h1>
        <div class="first">
           <h2>Log Into Fast Courier</h2>
            
            <div class="second">
            <form action="uservalidate.php" method="post">
                <label>Enter username</label><br>
                <input type="text" name="name" required class="rrr" placeholder="Enter username/email Address"><br>
                <label>Password</label><br>
                <input type="password" name="password" class="rrr" placeholder="Password"><br>
                <br>
                <input type="checkbox">Remember me
                
                <button>LOGIN</button><br>
            <a href="fgtpass.html"> <h3>Forget your password?</h3></a>
            <hrr>
          
        </form>
        </div>
    </div>
</div>
    </body>
</html>