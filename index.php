<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UGRA</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <script src="tema.js" defer></script>
</head>

<header class="header">
    <div class="container">
        <nav class="nav1">
            <div class="nav">
                <a class="logo">
                    <img src="img/logo.png" alt="логотип сайта" class="logo-img">
                </a>
                <ul class="menu">
                    <a href="" class="logo"></a>
                    <li class="menu-item">
                        <a href="#" class="menu-link">Trainers</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link2">Sports</a>
                    </li>
                    <li class="menu-item">
                        <a href="sign_up.php" class="menu-link3">Sign up</a>
                    </li>
                </ul>
            </div>
            <input type="button" value="theme" class="tll">
        </nav>
    </div>
</header>

<body>
    <main class="main">
        <img src="img/fon.png" alt="fon" class="fon" >
        <section class="headline">
            <div class="container">
                <h1 class="title">You don't<br>have<br>tomorrow</h1>
                
            </div>
        </section>
    </main>
  
<form onsubmit="return false;" id="form">
    <div>
        <p>Name</p>
        <input placeholder="Your name" type="text" pattern="[A-Za-zА-Яа-яЁё]{3,15}" class="nema" name="username" value="">
    </div>
    <div class="apple">
        <p>Email</p>
        <input placeholder="Your email"  required type="email" class="usermail" name="usermail" value="email">
        <p>Code</p>
        <input placeholder="Enter the code" type="password" maxlength="4" class="password" name="userpass" value="">
    </div>
        <div class="sports">
            <p>Sports:</p>
        <p><input type="radio" name="color" value="" /> Muay Thai</p>
        <p><input type="radio" name="color" value="" /> Kickboxing</p>
        <p><input type="radio" name="color" value="" /> MMA</p>
        <p><input type="radio" name="color" value="" /> fitness</p>
    </div>
     <div>
        <p>Contraindications or Allergies</p>
        <textarea name="comment" class="com"></textarea>
    </div>
    <div>
        <p>Phone number</p>
        <input placeholder="Phone number" type="tel" class="phonen" name="phone" pattern="+7 [0-9]{3}-[0-9]{3}-[0-9]{4}"
        required>
    </div>
    <div>
        
        <p>Confirm</p>
        <p><input type="checkbox" required name="notrobot" value="" /> I'm not a robot!</p>
     </div>
    <div>
        <button type="submit" class="button"> Sign up</button>
        <button type="reset" class="button"> Reset</button>
    </div>
</form>
<div class="formcontetnt">
</div>

<div class="mons">
    <p>Necessary equipment:</p>
    <script>
       function add(form) {
         var newDiv = document.createElement("li"); 
         newDiv.innerHTML = form.about.value + " <input type=\"button\" onclick=\"del(this)\" value=\"Удалить\"/> <br>";
         var list=document.getElementById("list1"); 
         list.appendChild(newDiv) 
        }
        function del(toDel) { 
            var toDel_parent=toDel.parentNode; 
            toDel_parent.parentNode.removeChild(toDel_parent) 
        }
        </script>
   
            <ul id="list1"></ul>
             <form>
             <input type="text" name="about">
             <input type="button" onclick="add(this.form)" value="Добавить"/>
             <input type="reset"/>
             </form> 
</div>

</body>
</html>