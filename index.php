<?php
if (!empty($_POST["NameOfWeb"])) {

mkdir("lwp-serveur");
mkdir("lwp-libs");
mkdir("lwp-error");
mkdir("lwp-client");
mkdir("lwp-admin");
file_put_contents("createPage.php", '
<?php
include_once("./lwp-serveur/password.php");
if (!empty($_COOKIE["LWPS_PASSWORD"])) {
    if ($_COOKIE["LWPS_PASSWORD"] == $CODE) {
if (!empty($_POST["Name"])) {
    mkdir($_POST["Name"]);
    mkdir($_POST["Name"]."/content");
    file_put_contents($_POST["Name"]."/content/number.txt", "-1");
    file_put_contents($_POST["Name"]."/content/title.txt",$_POST["Name"] );
    $p = $_POST["Name"];
    file_put_contents("$p/action.php", \\\'
    <?php
include_once("../lwp-serveur/password.php");
if (!empty($_COOKIE["LWPS_PASSWORD"])) {
    if ($_COOKIE["LWPS_PASSWORD"] == $CODE) {


if (!empty($_POST)) {
    $file_name = (int) file_get_contents("content/number.txt");
    $file_name += 1;
    if ($_GET["type"] == "addMenu") {
        $Menu_Title = $_POST["Name"];
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <link rel="stylesheet" href="../lwp-libs/css.css" />
        <menu>
          \\\'.$Menu_Title.\\\' :
          <ul class="MenuJson menu-bar"></ul>
        </menu>
        <h6 class="h6">Open Menu</h6>
        <script type="module">
          import { xlm_menu } from "../lwp-libs/js.js";
          xlm_menu();
        </script>
        \\\');
    }
    if ($_GET["type"] == "addSep") {
        $Menu_Color = $_POST["Color"];
        $Menu_Hauteur = $_POST["Width"];
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <hr style="height: \\\'.$Menu_Hauteur.\\\'px;background: \\\'.$Menu_Color.\\\';"></hr>
        \\\');
    }
    if ($_GET["type"] == "addForm_Connect") {
        $Form_Color = $_POST["Color"];
        $Form_Style = $_POST["Style"];
        $Menu_Color = $_POST["Slogan"];
        if ($Form_Style == "C") {

        $Menu_Color = $_POST["Slogan"];
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <main>
        <form action="../lwp-serveur/createAccount.php" method="post">
        <h1>\\\'.$Menu_Color.\\\'</h1>
        <br>
        <label for="pseudo">Pseudo</label>
        <br>
        <input id="pseudo" name="pse" type="text"></input>
        <br>
        <label for="password">Mot de passe</label>
        <br>
        <input id="password" name="mdp" type="password"></input>
        <br>
        <input type="submit" value="Valider"></input>
        </form>
        </main>
        <style>
    
        main {
            width: 100%;
            height: 70%;
            background-color: white;
            border: 10px solid black;
            border-radius: 20px;
            box-shadow: inset 0 0 20px 0px;
            overflow: scroll;
            background:  \\\'.$Form_Color.\\\';
        }
    
        input {
            padding: 10px;
            background: \\\'.$Form_Color.\\\';
            color: black;
            border-radius: 20px;
            transition: 0.5s;
        }
    
        input[type="submit"]:hover {
            letter-spacing: 5px;
        }
    
        .red {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: red;
        }
        </style>
        \\\');
    } elseif ($Form_Style == "F") {
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <main>
        <form action="../lwp-serveur/createAccount.php" method="post">
          <h1>\\\'.$Menu_Color.\\\'</h1>
          <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input id="pseudo" name="pse" type="text" placeholder="Entrez votre pseudo" required>
            <div class="underline"></div>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input id="password" name="mdp" type="password" placeholder="Entrez votre mot de passe" required>
            <div class="underline"></div>
          </div>
          <button type="submit" class="btn">Valider</button>
        </form>
      </main>
        <style>
    
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 20vh;
            overflow: scroll;
            }
            
            form {
            display: flex;
            flex-direction: column;
            background: #f2f2f2;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.2);
            overflow: scroll;
            height: 90%;
            width: 90%;
            }
            
            h1 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 30px;
            }
            
            .form-group {
            position: relative;
            margin-bottom: 30px;
            }
            
            label {
            position: absolute;
            top: 0;
            left: 0;
            color: #999;
            font-size: 1rem;
            transform-origin: 0 0;
            transition: all 0.2s ease-out;
            }
            
            input {
            border: none;
            border-bottom: 2px solid #ddd;
            padding: 20px 0;
            font-size: 1.2rem;
            width: 100%;
            }
            
            .underline {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: #2196f3;
            transform: scaleX(0);
            transform-origin: 0 0;
            transition: all 0.2s ease-out;
            }
            
            input:focus + .underline,
            input:not(:placeholder-shown) + .underline {
            transform: scaleX(1);
            }
            
            .btn {
            background: #2196f3;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.2s ease-out;
            }
            
            .btn:hover {
            background: #0d8ae5;
            }
        </style>
        \\\');
    } elseif ($Form_Style == "A") {
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <main>
  <form action="../lwp-serveur/createAccount.php" method="post">
    <h1>\\\'.$Menu_Color.\\\'</h1>
    <div class="form-group">
      <label for="pseudo">Nom d\\\\\'utilisateur</label>
      <input id="pseudo" name="pse" type="text">
    </div>
    <div class="form-group">
      <label for="password">Mot de passe</label>
      <input id="password" name="mdp" type="password">
    </div>
    <div class="form-group">
      <input type="submit" value="S\\\\\'enregistrer">
    </div>
  </form>
</main>

<style>
  /* Style du formulaire */
  main {
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 10px #ccc;
    margin: 50px auto;
    max-width: 600px;
    padding: 20px;
  }

  h1 {
    border-bottom: 2px solid #ccc;
    font-family: serif;
    font-size: 2em;
    margin-bottom: 20px;
    text-align: center;
    text-transform: uppercase;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    font-family: serif;
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 10px;
  }

  input[type="text"],
  input[type="password"] {
    border: none;
    border-bottom: 1px solid #ccc;
    font-family: serif;
    font-size: 1.2em;
    padding: 10px;
    width: 100%;
  }

  input[type="submit"] {
    background-color: #8b0000;
    border: none;
    color: #fff;
    cursor: pointer;
    font-family: serif;
    font-size: 1.2em;
    padding: 10px 20px;
    text-transform: uppercase;
    transition: background-color 0.3s;
  }

  input[type="submit"]:hover {
    background-color: #b22222;
  }
</style>
        \\\');
    }
}
    if ($_GET["type"] == "addPostAdder") {
        $Form_Color = $_POST["Color"];
        $Form_Style = $_POST["Style"];
        $Menu_Color = $_POST["Slogan"];
        $Form_Police_Color = $_POST["ColorP"];
        if ($Form_Style == "C") {

        $Menu_Color = $_POST["Slogan"];
        file_put_contents("content/" . $file_name . ".txt", \\\'
        
        <h1>\\\'.$Menu_Color.\\\'</h1>
        <br>
        <br>
        <button class="Img">Ajouter une image</button>
        <br>
        <br>
        <button class="Title">Ajouter un titre</button>
        <br>
        <br>
        <button class="Text">Ajouter du texte</button>
        <br>
        <br>
        <button class="Return">Retours</button>
        <br>
        <br>
        <form action="../lwp-serveur/CreatePost.php" method="post">
          <label for="Name">Nom de votre post</label>
          <input type="text" name="Name" id="Name" />
    
          <view></view>
          <input value="Contenu : " class="content" type="hidden" name="Content"></input>
          <input type="submit" value="Valider" id="" />
        </form>
        <style>
          .view {
            padding: 20px;
          }
        </style>
        <script>
          let Sauv = [""];
          let Current_Sauv = 0
          document.querySelector(".Img").addEventListener("click", () => {
            Current_Sauv++;
            let img = prompt("Image URL");
            document.querySelector(".content").value += `
            <img src="${img}"></img>
            `;
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
            console.log(document.querySelector(".content").value);
            Sauv.push(document.querySelector(".content").value);
          });
          document.querySelector(".Title").addEventListener("click", () => {
            Current_Sauv++;
            let img = prompt("Texte");
            document.querySelector(".content").value += `
            <h3>${img}</h3>
            `;
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
            console.log(document.querySelector(".content").value);
            Sauv.push(document.querySelector(".content").value);
          });
          document.querySelector(".Text").addEventListener("click", () => {
            Current_Sauv++;
            let img = prompt("Texte");
            document.querySelector(".content").value += `
            <p>${img}</p>
            `;
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
            console.log(document.querySelector(".content").value);
            Sauv.push(document.querySelector(".content").value);
          })
          document.querySelector(".Return").addEventListener("click", () => {
            Current_Sauv--;
          })
          setInterval(() => {
            document.querySelector(".content").value = Sauv[Current_Sauv];
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
          }, 100);
        </script>
        <style>
          /* Normal */
          button {
      background-color: \\\'.$Form_Color.\\\';
      color: \\\'.$Form_Police_Color.\\\';
      font-size: 1rem;
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 1rem;
    }
    
    button:hover {
      background-color: \\\'.$Form_Color.\\\';
    }
    
    label {
      display: block;
      margin-top: 1rem;
    }
    
    input[type="text"] {
      padding: 0.5rem;
      border-radius: 4px;
      border: 1px solid #ccc;
      width: 100%;
      box-sizing: border-box;
      margin-bottom: 1rem;
    }
    
    input[type="submit"] {
      background-color: \\\'.$Form_Color.\\\';
      color: #fff;
      font-size: 1rem;
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: \\\'.$Form_Color.\\\';
    }
        \\\');
    } elseif ($Form_Style == "F") {
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <button class="Img">Ajouter une image</button>
        <br>
        <br>
        <button class="Title">Ajouter un titre</button>
        <br>
        <br>
        <button class="Text">Ajouter du texte</button>
        <br>
        <br>
        <button class="Return">Retours</button>
        <br>
        <br>
        <form action="../../lwp-serveur/CreatePost.php" method="post">
          <label for="Name">Nom de votre post</label>
          <input style="color: white;" type="text" name="Name" id="Name" />
    
          <view></view>
          <input value="Contenu : " class="content" type="hidden" name="Content"></input>
          <input type="submit" value="Valider" id="" />
        </form>
        <style>
          .view {
            padding: 20px;
          }
        </style>
        <script>
          let Sauv = [""];
          let Current_Sauv = 0
          document.querySelector(".Img").addEventListener("click", () => {
            Current_Sauv++;
            let img = prompt("Image URL");
            document.querySelector(".content").value += `
            <img src="${img}"></img>
            `;
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
            console.log(document.querySelector(".content").value);
            Sauv.push(document.querySelector(".content").value);
          });
          document.querySelector(".Title").addEventListener("click", () => {
            Current_Sauv++;
            let img = prompt("Texte");
            document.querySelector(".content").value += `
            <h3>${img}</h3>
            `;
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
            console.log(document.querySelector(".content").value);
            Sauv.push(document.querySelector(".content").value);
          });
          document.querySelector(".Text").addEventListener("click", () => {
            Current_Sauv++;
            let img = prompt("Texte");
            document.querySelector(".content").value += `
            <p>${img}</p>
            `;
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
            console.log(document.querySelector(".content").value);
            Sauv.push(document.querySelector(".content").value);
          })
          document.querySelector(".Return").addEventListener("click", () => {
            Current_Sauv--;
          })
          setInterval(() => {
            document.querySelector(".content").value = Sauv[Current_Sauv];
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
          }, 100);
        </script>
        <style>
        main {
          background-color: #000;
          border: none;
          box-shadow: 0px 0px 20px #00ffff, 0px 0px 40px #00ffff, 0px 0px 60px #00ffff, 0px 0px 80px #00ffff;
          margin: 50px auto;
          max-width: 600px;
          padding: 20px;
        }
        
        h1 {
          color: #00ffff;
          font-family: \\\\\'Orbitron\\\\\', sans-serif;
          font-size: 3em;
          margin-bottom: 30px;
          text-align: center;
          text-transform: uppercase;
          text-shadow: 0px 0px 10px #00ffff;
        }
        
        .form-group {
          margin-bottom: 30px;
        }
        
        label {
          color: #00ffff;
          display: block;
          font-family: \\\\\'Orbitron\\\\\', sans-serif;
          font-size: 1.5em;
          font-weight: bold;
          margin-bottom: 10px;
          text-shadow: 0px 0px 10px #00ffff;
        }
        
        input[type="text"],
        input[type="password"] {
          background-color: transparent;
          border: none;
          border-bottom: 2px solid #00ffff;
          color: #fff;
          font-family: \\\\\'Orbitron\\\\\', sans-serif;
          font-size: 1.2em;
          padding: 10px;
          width: 100%;
        }
        
        input[type="submit"],button {
          background-color: #00ffff;
          border: none;
          color: #000;
          cursor: pointer;
          font-family: \\\\\'Orbitron\\\\\', sans-serif;
          font-size: 1.5em;
          padding: 10px 20px;
          text-transform: uppercase;
          transition: background-color 0.3s;
        }
        
        input[type="submit"]:hover {
          background-color: #fff;
          color: #000;
        }
        </style>
        \\\');
    } elseif ($Form_Style == "A") {
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <button class="Img">Ajouter une image</button>
        <br>
        <br>
        <button class="Title">Ajouter un titre</button>
        <br>
        <br>
        <button class="Text">Ajouter du texte</button>
        <br>
        <br>
        <button class="Return">Retours</button>
        <br>
        <br>
        <form action="../../lwp-serveur/CreatePost.php" method="post">
          <label for="Name">Nom de votre post</label>
          <input type="text" name="Name" id="Name" />
    
          <view></view>
          <input value="Contenu : " class="content" type="hidden" name="Content"></input>
          <input type="submit" value="Valider" id="" />
        </form>
        <style>
          .view {
            padding: 20px;
          }
        </style>
        <script>
          let Sauv = [""];
          let Current_Sauv = 0
          document.querySelector(".Img").addEventListener("click", () => {
            Current_Sauv++;
            let img = prompt("Image URL");
            document.querySelector(".content").value += `
            <img src="${img}"></img>
            `;
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
            console.log(document.querySelector(".content").value);
            Sauv.push(document.querySelector(".content").value);
          });
          document.querySelector(".Title").addEventListener("click", () => {
            Current_Sauv++;
            let img = prompt("Texte");
            document.querySelector(".content").value += `
            <h3>${img}</h3>
            `;
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
            console.log(document.querySelector(".content").value);
            Sauv.push(document.querySelector(".content").value);
          });
          document.querySelector(".Text").addEventListener("click", () => {
            Current_Sauv++;
            let img = prompt("Texte");
            document.querySelector(".content").value += `
            <p>${img}</p>
            `;
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
            console.log(document.querySelector(".content").value);
            Sauv.push(document.querySelector(".content").value);
          })
          document.querySelector(".Return").addEventListener("click", () => {
            Current_Sauv--;
          })
          setInterval(() => {
            document.querySelector(".content").value = Sauv[Current_Sauv];
            document.querySelector("view").innerHTML = document.querySelector(".content").value;
          }, 100);
        </script>
        <style>
        main {
          background-color: #f5f5f5;
          border: 1px solid #ccc;
          box-shadow: 0px 0px 10px #ccc;
          margin: 50px auto;
          max-width: 600px;
          padding: 20px;
        }
        
        h1 {
          border-bottom: 2px solid #ccc;
          font-family: Georgia, "Times New Roman", serif;
          font-size: 2em;
          margin-bottom: 20px;
          text-align: center;
          text-transform: uppercase;
        }
        
        .form-group {
          margin-bottom: 20px;
        }
        
        label {
          display: block;
          font-family: Georgia, "Times New Roman", serif;
          font-size: 1.2em;
          font-weight: bold;
          margin-bottom: 10px;
        }
        
        input[type="text"],
        input[type="password"] {
          border: none;
          border-bottom: 1px solid #ccc;
          font-family: Georgia, "Times New Roman", serif;
          font-size: 1.2em;
          padding: 10px;
          width: 100%;
        }
        
        input[type="submit"],button {
          background-color: #8b0000;
          border: none;
          color: #fff;
          cursor: pointer;
          font-family: Georgia, "Times New Roman", serif;
          font-size: 1.2em;
          padding: 10px 20px;
          text-transform: uppercase;
          transition: background-color 0.3s;
        }
        
        input[type="submit"]:hover {
          background-color: #b22222;
        }
</style>
        \\\');
    }
}
    if ($_GET["type"] == "addAct_NewPosts") {
        $Menu_Color = $_POST["Slogan"];
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <div style="height:50vh;">
        <iframe style="width:100%; height:100%;" src="./NewPosts.php?number=\\\'.$_POST["NumberOfPosts"].\\\'"></iframe>
</div>

        \\\');
    }
    if ($_GET["type"] == "addImg") {
        $Img_Source = $_POST["Source"];
        $Img_Width = $_POST["Width"];
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <style>
        .img {
            width: \\\'.$Img_Width.\\\'%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        </style>
        <img src="\\\'.$Img_Source.\\\'" class="img"></img>
        \\\');
    }
    if ($_GET["type"] == "addLink") {
        $Lien_URL = $_POST["Lien"];
        $Lien_Texte = $_POST["Texte"];
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <a href="\\\'.$Lien_URL.\\\'" style="text-decoration: none;text-align: center;display: block; color: black;">\\\'.$Lien_Texte.\\\'</a>
        \\\');
    }
    if ($_GET["type"] == "allPosts") {
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <div style="height:50vh;">

        <iframe style="width:100%; height:100%;" src="./allPost.php"></iframe>
        </div>


        \\\');
    }
    if ($_GET["type"] == "addFooter") {
        $Footer_Color = $_POST["Color"];
        $Text_Color = $_POST["ColorP"];
        $Footer_Name = $_POST["Name"];
        $Dev = $_POST["Dev"];
        file_put_contents("content/" . $file_name . ".txt", \\\'
        <style>
        footer {
            background-color: \\\'.$Footer_Color.\\\';
            color: \\\'.$Text_Color.\\\';
            padding: 20px 0;
            font-family: sans-serif;
            font-size: 14px;
          }
          
          .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
          }
          
          .logo {
            display: flex;
            align-items: center;
          }
          
          .logo img {
            width: 50px;
            margin-right: 10px;
          }
          
          .powered-by,
          .site-name {
            text-align: center;
          }
          
          .powered-by h3,
          .site-name h3 {
            margin: 0;
            font-weight: 400;
            text-transform: uppercase;
          }
          
          .powered-by h3 {
            font-size: 12px;
          }
          
          .site-name h3 {
            font-size: 18px;
          }
          
        </style>
        <footer>
        <div class="footer-container">
          <div class="logo">
            <img src="https://loines.ch/assetshome/image/loineslogo.png" alt="Logo">
            <h3>\\\'.$Dev.\\\'</h3>
          </div>
          <div class="powered-by">
            <h3>Powered By Loines Cloud</h3>
          </div>
          <div class="site-name">
            <h3>\\\'.$Footer_Name.\\\'</h3>
          </div>
        </div>
      </footer>
      
        \\\');
    }
    file_put_contents("content/number.txt", $file_name);
    header("Location: ./modify.php");
}
} else {
  header("Location: ../lwp-error/start.php");
}
} else {
  header("Location: ../lwp-error/start.php");
}
?>
\\\');
file_put_contents("$p/allPost.php", \\\'
<h1>All Posts : </h1>
<hr>
<?php
include_once("../lwp-serveur/password.php");
$JSON = json_decode(file_get_contents("../lwp-serveur/" . $CODE . ".json"));
$list = [];
$list2 = [];
foreach ($JSON->posts as $event) {
    array_push($list ,$event->timestamp);
    $list2[$event->timestamp] = $event;
}
for ($i=0; $i < count($list); $i++) { 
    echo "<h1> Nom : ".$list2[$list[$i]]->Name . "</h1>".$list2[$list[$i]]->content . "de : " . $list2[$list[$i]]->creator."<hr>";
}

?>
<style>
body {
    font-family: Arial;
}
</style>
\\\');
file_put_contents("$p/delete.php", \\\'
<?php
include_once("../lwp-serveur/password.php");
if (!empty($_COOKIE["LWPS_PASSWORD"])) {
    if ($_COOKIE["LWPS_PASSWORD"] == $CODE) {


if (is_file($_GET["file"])) {
unlink($_GET["file"]);
$file_name = (int) file_get_contents("content/number.txt");
$file_name -= 1;
file_put_contents("content/number.txt", $file_name);
header("Location: ./index.php");
}
} else {
    header("Location: ../lwp-error/start.php");
  }
} else {
    header("Location: ../lwp-error/start.php");
  }
?>
\\\');
file_put_contents("$p/index.php", \\\'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo file_get_contents("./content/title.txt");?></title>
    <style>
    body {
        font-family: Arial;
    }
    </style>
</head>

<body>

</body>
<?php
include_once("../lwp-serveur/password.php");
if (!empty($_COOKIE["LWPS_PASSWORD"])) {
    if ($_COOKIE["LWPS_PASSWORD"] == $CODE) {
        echo \\\'<a href="modify.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
          </svg></a>\\\';
    }
}
include_once("../lwp-libs/php.php");
$i = 0;
while ($i < count_files("./content/", "txt", 1)-2) {
    echo file_get_contents("content/".$i.".txt");
    $i++;
}
?>

</html>
\\\');
file_put_contents("$p/main.js", \\\'
let toggle = false;
document.querySelector(".close").addEventListener("click", () => {
if (!toggle) {
document.querySelector(".GUI_BOX_NewObject").style.top = "-1000px";
document.querySelector(".close").textContent = "open";
toggle = true;
} else {
document.querySelector(".GUI_BOX_NewObject").style.top = "0px";
document.querySelector(".close").textContent = "close";
toggle = false;
}
});
function seeFom(to, name, input) {
document.body.innerHTML += `
<form method="post" action="${to}" class="form">
    ${name} :
    <br>
</form>
`;
let form = document.querySelector(".form");
for (const key in input) {
if (Object.hasOwnProperty.call(input, key)) {
const element = input[key];
let Random = Math.floor(Math.random() * 1000);
form.innerHTML += `
<label for=\\\'s${Random}\\\'>${element.label}</label>
<input id=\\\'s${Random}\\\' type=\\\'${element.type}\\\' name=\\\'${key}\\\'></input>
<br>
`;
}
}
form.innerHTML += `
<input type=\\\'submit\\\' name=\\\'submit\\\' value="Valider"></input>
<br>
`;
}
document.querySelector(".NewObject_menu").addEventListener("click", (e) => {
seeFom("./action.php?type=addMenu", "Menu", {
Name: {
type: "text",
label: "Titre",
},
});
});
document.querySelector(".NewObject_sep").addEventListener("click", (e) => {
seeFom("./action.php?type=addSep", "Séparateur", {
Color: {
type: "color",
label: "Couleur",
},
Width: {
type: "number",
label: "Hauteur (px)",
},
});
});
document
.querySelector(
"body > div.GUI_BOX_NewObject > h3.GUI_BUTTON.NewObject_newPost"
)
.addEventListener("click", (e) => {
seeFom("./action.php?type=addAct_NewPosts", "Nouveaux Posts", {
NumberOfPosts: {
type: "number",
label: "Nombre de posts",
},
});
});
document
.querySelector(".NewObject_FoprmConnect")
.addEventListener("click", (e) => {
seeFom("./action.php?type=addForm_Connect", "Formulaire de connexion", {
Slogan: {
type: "text",
label: "Slogan (genre Bienvenue!)",
},
Style: {
type: "text",
label: "Futuriste (F), Ancien, (A), Basé sur une couleur : (C)",
},
Color: {
type: "color",
label: "(UNIQUEMENT SI C)",
},
});
});
document
.querySelector(".NewObject_addAdderForm")
.addEventListener("click", (e) => {
seeFom("./action.php?type=addPostAdder", "Formulaire d\\\'ajout de post", {
Slogan: {
type: "text",
label: "Slogan (genre Merci de poster des posts corrects!)",
},
Style: {
type: "text",
label: "Futuriste (F), Ancien, (A), Basé sur une couleur : (C)",
},
Color: {
type: "color",
label: "couleur de fond (UNIQUEMENT SI C)",
},
ColorP: {
type: "color",
label: "Couleur du texte",
},
});
});
document.querySelector(".NewObject_image").addEventListener("click", (e) => {
seeFom("./action.php?type=addImg", "Image", {
Source: {
type: "url",
label: "Source (genre https://example.com/img.png)",
},
Width: {
type: "number",
label: "Taille (En % de l\\\'écran horizontal)",
},
});
});
document.querySelector(".NewObject_link").addEventListener("click", (e) => {
seeFom("./action.php?type=addLink", "Image", {
Lien: {
type: "url",
label: "Lien (genre https://example.com/mapage.html)",
},
Texte: {
type: "texte",
label: "Texte du lien",
},
});
});
document.querySelector(".NewObject_footer").addEventListener("click", (e) => {
seeFom("./action.php?type=addFooter", "Footer (Bas De Page)", {
Dev: {
type: "text",
label: "Créateur",
},
Color: {
type: "color",
label: "fond",
},
ColorP: {
type: "color",
label: "Couleur de texte",
},
Name: {
type: "text",
label: "Nom du site web",
},
});
});
document.querySelector(".NewObject_AllPosts").addEventListener("click", (e) => {
seeFom("./action.php?type=allPosts", "Rien a mettre", {});
});

\\\');
file_put_contents("$p/modify.php", \\\'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>HTML</title>

    <!-- HTML -->

    <!-- Custom Styles -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <style>
    iframe {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }

    .close {
        position: absolute;
        top: 0;
        color: white;
        left: 0;
    }
    </style>
    <iframe src="./modifyIner.php" frameborder="0"></iframe>
    <div class="GUI_BOX_NewObject">
        <h3 class="GUI_BUTTON NewObject_menu">
            Menu
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-menu-app-fill" viewBox="0 0 16 16">
                <path
                    d="M0 1.5A1.5 1.5 0 0 1 1.5 0h2A1.5 1.5 0 0 1 5 1.5v2A1.5 1.5 0 0 1 3.5 5h-2A1.5 1.5 0 0 1 0 3.5v-2zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
            </svg>
        </h3>
        <h3 class="GUI_BUTTON NewObject_sep">
            Separator
            <hr width="50" />
        </h3>
        <h3 class="GUI_BUTTON NewObject_newPost">
            New Posts
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list"
                viewBox="0 0 16 16">
                <path
                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                <path
                    d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
            </svg>
        </h3>
        <h3 class="GUI_BUTTON NewObject_AllPosts">
            All Posts
            🌍
        </h3>
        <h3 class="GUI_BUTTON NewObject_footer">
            Footer
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-dock"
                viewBox="0 0 16 16">
                <path
                    d="M3.5 11a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm4.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                <path
                    d="M14 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h12ZM2 14h12a1 1 0 0 0 1-1V5H1v8a1 1 0 0 0 1 1ZM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2Z" />
            </svg>
        </h3>
        <h3 class="GUI_BUTTON NewObject_image">
            Image
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image"
                viewBox="0 0 16 16">
                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                <path
                    d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
            </svg>
        </h3>
        <h3 class="GUI_BUTTON NewObject_link">
            Lien
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg"
                viewBox="0 0 16 16">
                <path
                    d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                <path
                    d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
            </svg>
        </h3>
        <h3 class="GUI_BUTTON NewObject_FoprmConnect">
            Formulaire de Connexion
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-person-fill-add" viewBox="0 0 16 16">
                <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path
                    d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
            </svg>
        </h3>
        <h3 class="GUI_BUTTON NewObject_addAdderForm">
            Formulaire d\\\'ajout de posts
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
        </h3>
    </div>
    <div class="close">close</div>
    <!-- Project -->

    <script src="main.js"></script>
</body>

</html>
\\\');
file_put_contents("$p/modifyIner.php", \\\'
<?php
include_once("../lwp-serveur/password.php");
if (!empty($_COOKIE["LWPS_PASSWORD"])) {
    if ($_COOKIE["LWPS_PASSWORD"] == $CODE) {

include_once("../lwp-libs/php.php");
$i = 0;
while ($i < count_files("./content/", "txt", 1)-2) {
    echo "<hr><span>".file_get_contents("content/".$i.".txt")."</span><form  style=\\\'background: blue;height: 5%;\\\' method=\\\'get\\\' action=\\\'rename.php\\\'><input style=\\\'display: none;\\\' name=\\\'file\\\' value=\\\'$i\\\'></input>Changer la place de : $i à <input name=\\\'number\\\' type=\\\'number\\\' value=\\\'$i\\\'></input><input type=\\\'submit\\\' value=\\\'Valider\\\'></input><a href=\\\'delete.php?file=content/$i.txt\\\'>❌ ATTENTION!!!!! LE BLOCK DOIT ÊTRE A LA FIN (utilisez rename)</a></form>";
    $i++;
}
} else {
    header("Location: ../lwp-error/start.php");
  }
} else {
    header("Location: ../lwp-error/start.php");
  }
?>
\\\');
file_put_contents("$p/newPosts.php", \\\'
<h1>New Posts : </h1>
<hr>
<?php
include_once("../lwp-serveur/password.php");
$JSON = json_decode(file_get_contents("../lwp-serveur/" . $CODE . ".json"));
$list = [];
$list2 = [];
foreach ($JSON->posts as $event) {
    array_push($list ,$event->timestamp);
    $list2[$event->timestamp] = $event;
}
for ($i=0; $i < (int) $_GET["number"]; $i++) { 
    echo "<post>"."<h1>Nom: ".$list2[max($list)]->Name . "</h1>".$list2[max($list)]->content . "<h4>De : ".$list2[max($list)]->creator."</h4></post> <br><hr>";
    unset($list[array_search(max($list), $list)]);
}

?>
<style>
body {
    font-family: Arial;
}
</style>
\\\');
file_put_contents("$p/rename.php", \\\'
<?php
include_once("../lwp-serveur/password.php");
if (!empty($_COOKIE["LWPS_PASSWORD"])) {
    if ($_COOKIE["LWPS_PASSWORD"] == $CODE) {

if (isset($_GET[\\\'number\\\']) && isset($_GET[\\\'file\\\'])) {
    $number = $_GET[\\\'number\\\'];
    $file = $_GET[\\\'file\\\'];

    $dir_path = \\\'content/\\\';

    // Vérifier que le numéro est valide
    if (!ctype_digit($number) || $number < -1) {
        die(\\\'Invalid number\\\');
    }

    // Vérifier que le fichier existe
    $filename = $dir_path . $file . \\\'.txt\\\';
    if (!file_exists($filename)) {
        die(\\\'File does not exist\\\');
    }

    // Lire le contenu du fichier
    $content = file_get_contents($filename);

    // Supprimer le fichier
    unlink($filename);

    // Décaler les fichiers
    for ($i = $file + 1; $i <= $number; $i++) {
        $old_filename = $dir_path . $i . \\\'.txt\\\';
        $new_filename = $dir_path . ($i - 1) . \\\'.txt\\\';
        rename($old_filename, $new_filename);
    }

    // Créer le nouveau fichier
    $new_filename = $dir_path . $number . \\\'.txt\\\';
    file_put_contents($new_filename, $content);

    echo \\\'File moved successfully\\\';
} else {
    echo \\\'Invalid request\\\';
}
} else {
    header("Location: ../lwp-error/start.php");
  }
} else {
    header("Location: ../lwp-error/start.php");
  }
\\\');
file_put_contents("$p/style.css", \\\'
body {
    font-size: 15pt;
    font-family: Arial;
  }
  
  .GUI_BOX_NewObject {
    position: absolute;
    left: 0;
    top: 0;
    color: white;
    background: rgba(0, 0, 0, 1);
    transition: 1s;
  }
  .GUI_BUTTON {
    border: 1px solid black;
    padding: 10px;
  }
  .close {
    z-index: 1000;
    position: absolute;
  }
  
  .form {
    position: absolute;
    z-index: 1000000;
    background: rosybrown;
    padding: 20px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  
\\\');
$JSON = json_decode(file_get_contents("./lwp-client/pages.json"));
    $JSONResp = new stdClass;
    $JSON->{$_POST["Name"]} = $JSONResp;
    $JSON->{$_POST["Name"]}->name = $_POST["Name"];
    $JSON->{$_POST["Name"]}->path = $_POST["Name"];
    file_put_contents("./lwp-client/pages.json", json_encode($JSON));
    echo "All OK";
}
} else {
    header("Location: ./lwp-error/start.php");
  }
  } else {
    header("Location: ./lwp-error/start.php");
  }
?>
');
file_put_contents("./lwp-serveur/1234.json", '
{
"users": {
"L_BOT": {
"IsExist": true,
"MDP": "muhiwefzghiweqf78z34596p78g543x6l7gb9345lg6897345",
"posts": [3422345]
},
"FannetteLaBellette": {
"IsExist": true,
"MDP": "58fa2fc4bfc34711a35152f07741e353",
"posts": [1687257748]
}
},
"posts": {
"3422345": {
"Name": "Default Post",
"content": "<h1>This is the first post auo-generated</h1>",
"creator": "L_BOT",
"timestamp": 1
},
"3422346": {
"Name": "Default Post",
"content": "<h1>This is the second post auo-generated</h1>",
"creator": "L_BOT",
"timestamp": 1
}
}
}

');
file_put_contents("./lwp-serveur/createAccount.php", '
<?php
include_once("./password.php");
if (!empty($_POST["pse"]) && !empty($_POST["mdp"])) {
    $JSON = json_decode(file_get_contents($CODE.".json"));
    if (!empty($JSON->users->{$_POST["pse"]}->IsExist)) {
        if (hash_equals($JSON->users->{$_POST["pse"]}->MDP, hash("md5",$_POST["mdp"]))) {
        setcookie("USER", $_POST["pse"], time()+1000, "/", $_SERVER["SERVER_NAME"]);
        setcookie("PASSWORD", $_POST["mdp"], time()+1000, "/", $_SERVER["SERVER_NAME"]);
        header("Location: ../success.php");    
    } else {
        header("Location: ../error.php");
        }
    } else {
        $JSON->users->{htmlspecialchars($_POST["pse"])} = new stdClass;
        $JSON->users->{htmlspecialchars($_POST["pse"])}->IsExist = true;
        $JSON->users->{htmlspecialchars($_POST["pse"])}->MDP = hash("md5",$_POST["mdp"]);
        $JSON->users->{htmlspecialchars($_POST["pse"])}->posts = [];
        file_put_contents($CODE.".json", json_encode($JSON));
        header("Location: ../success.php");    

    }
}
?>
');
file_put_contents("./lwp-serveur/CreatePost.php", '
<?php
include_once("./password.php");
if (!empty($_POST["Content"]) && !empty($_POST["Name"])) {
    $JSON = json_decode(file_get_contents($CODE.".json"));
    if (!empty($JSON->users->{$_COOKIE["USER"]})) {
        if (hash_equals($JSON->users->{$_COOKIE["USER"]}->MDP, hash("md5",$_COOKIE["PASSWORD"]))) {
            $rand = rand();
            $JSON->posts->{$rand} = new stdClass;
            $JSON->posts->{$rand}->Name = $_POST["Name"];
            $JSON->posts->{$rand}->content = $_POST["Content"];
            $JSON->posts->{$rand}->creator = $_COOKIE["USER"];
            $JSON->posts->{$rand}->timestamp = time();
            array_push($JSON->users->{$_COOKIE["USER"]}->posts, $rand);
            file_put_contents($CODE.".json", json_encode($JSON));
        header("Location: ../success.php");
    } else {
            header("Location: ../error.php");
        }
    } else {
        header("Location: ../error.php");    
    }
} else {
    header("Location: ../error.php");    
}
?>
');
file_put_contents("./lwp-serveur/password.php", '
<?php
$CODE="1234"
?>
');
file_put_contents("./lwp-libs/css.css", '
menu {
position: absolute;
top: 0;
left: 0;
background: blanchedalmond;
width: 100%;
font-family: Arial, Helvetica, sans-serif;
margin: 0;
color: black;
font-size: 150%;
transition: 1s;
}
.menu-bar {
border-radius: 25px;
height: fit-content;
display: inline-flex;
background-color: rgba(0, 0, 0, 0.4);
-webkit-backdrop-filter: blur(10px);
backdrop-filter: blur(10px);
align-items: center;
padding: 0 10px;
margin: 50px 0 0 0;
}
.menu-bar li {
list-style: none;
color: white;
font-family: sans-serif;
font-weight: bold;
padding: 12px 16px;
margin: 0 8px;
position: relative;
cursor: pointer;
white-space: nowrap;
}
.menu-bar li::before {
content: " ";
position: absolute;
top: 0;
left: 0;
height: 100%;
width: 100%;
z-index: -1;
transition: 0.2s;
border-radius: 25px;
}
.menu-bar li:hover {
color: black;
}
.menu-bar li:hover::before {
background: linear-gradient(to bottom, #e8edec, #d2d1d3);
box-shadow: 0px 3px 20px 0px black;
transform: scale(1.2);
}
a {
text-decoration: none;
color: white;
}

');
file_put_contents("./lwp-libs/js.js", '
export function xlm_menu() {
let xlm2 = new XMLHttpRequest();
xlm2.responseType = "json";
xlm2.open("GET", "../lwp-client/pages.json");
xlm2.send();
xlm2.onload = function () {
let object = xlm2.response;
for (const key in object) {
if (Object.hasOwnProperty.call(object, key)) {
const element = object[key];
document.querySelector(".MenuJson").innerHTML += `
<li class="Menu-Item"><a href=\'../${element.path}\'>${element.name}</a></li>
`;
}
}
};
document.addEventListener("scroll", (e) => {
if (window.scrollY > 100) {
document.querySelector("menu").style.top = "-1000px";
} else {
document.querySelector("menu").style.top = "0px";
document.querySelector("menu").style.top = window.scrollY + "px";
}
});
document.querySelector(".h6").addEventListener("click", () => {
document.querySelector("menu").style.top = "0px";
});
setTimeout(() => {
document.querySelector("menu").style.top = "-1000px";
}, 2000);
}

');
file_put_contents("./lwp-libs/php.php", '
<?php
/*---------------------------------------------------------------*/
/*
    Titre : Compte le nombre de fichiers d\'un répertoire                                                                 
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=51
    Auteur           : R@f                                                                                                
    Date édition     : 01 Sept 2004                                                                                       
    Date mise à jour : 13 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
    - maintenance du code                                                                                                 
*/
/*---------------------------------------------------------------*/

function count_files($folder, $ext, $subfolders)
{
     // on rajoute le / à la fin du nom du dossier s\'il ne l\'est pas
     if(substr($folder, -1) != \'/\')
        $folder .= \'/\';
     
     // $ext est un tableau?
     $array = 0;
     if(is_array($ext))
        $array = 1;

     // ouverture du répertoire
     $rep = @opendir($folder);
     if(!$rep)
        return -1;
        
     $nb_files = 0;
     // tant qu\'il y a des fichiers
     while($file = readdir($rep))
     {
        // répertoires . et ..
        if($file == \'.\' || $file == \'..\')
         continue;
        
        // si c\'est un répertoire et qu\'on peut le lister
        if(is_dir($folder . $file) && $subfolders)
            // on appelle la fonction
         $nb_files += count_files($folder . $file, $ext, 1);
        // vérification de l\'extension avec $array = 0
        else if(!$array && substr($file, -strlen($ext))== $ext)
         $nb_files++;
        // vérification de l\'extension avec $array = 1   
        else if($array==1 && in_array(strtolower(substr(strrchr($file,"."),1)), 
$ext))
         $nb_files++;
     }
     
     // fermeture du rep
     closedir($rep);
     return $nb_files;
} 
?>
');
file_put_contents("./lwp-error/start.php", '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Installing</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main>
        <h1>!!! UNE FOIS CONNECTEZ (OUVREZ CETTE PAGE POUR LA PREMIÈRE FOIS) METTEZ UN AUTRE MOT DE PASSE (mot de passe
            par déf : 1234)!!!!!</h1>
        <?php

                if (!empty($_POST["password"])) {
                    setcookie("LWPS_PASSWORD", $_POST["password"], time()+2300000, "/", $_SERVER["SERVER_NAME"]);
                }
        include_once("../lwp-serveur/password.php");
if (!empty($_COOKIE["LWPS_PASSWORD"])) {
    if ($_COOKIE["LWPS_PASSWORD"] == $CODE) {
        echo "C.O.D.E OK!";
        if (!empty($_POST["password2"])) {
            rename("../lwp-serveur/".$CODE.".json", "../lwp-serveur/".$_POST["password2"].".json");
            setcookie("LWPS_PASSWORD", $_POST["password2"], time()+2300000, "/", $_SERVER["SERVER_NAME"]);
            file_put_contents("../lwp-serveur/password.php", \'
            <?php
            $CODE="\'.$_POST["password2"].\'"
            ?>
        \');
        echo "MDP CHANGÉ!";
        }
        } else {
        echo "WRONG CODE!";
        }
        } else {
        setcookie("LWPS_PASSWORD", "1234", time()+2300000, "/", $_SERVER["SERVER_NAME"]);
        }
        ?>
        <form method="post" action="./start.php">
            <input name="password" type="password" placeholder="Mot de passe"></input>
            <input type="submit" value="Se Connecter"></input>
            <br>
            ^
            <br>
            |
            <h2>(Nouveau Mot De Passe Mettez votre mdp AVANT)</h2>
            <input name="password2" type="password" placeholder="Nouveau Mot de passe"></input>
            <input type="submit" value="Valider"></input>
            <a href="index.php">Retours</a>
        </form>
    </main>
    <style>
    body {
        background: rgb(182, 91, 91);
        font-family: Arial, Helvetica, sans-serif;
    }

    main {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 70%;
        height: 70%;
        background-color: white;
        border: 10px solid black;
        border-radius: 20px;
        box-shadow: inset 0 0 20px 0px;
        overflow: scroll;
    }

    input {
        padding: 10px;
        background-color: salmon;
        color: black;
        border-radius: 20px;
        transition: 0.5s;
    }

    input[type="submit"]:hover {
        letter-spacing: 5px;
    }

    .red {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: red;
    }
    </style>
</body>

</html>
');
file_put_contents("./lwp-error/start.php", '
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Erreur</title>
    <style>
    body {
        background-color: #1a1a1a;
        color: #fff;
        font-family: Arial, sans-serif;
    }

    h1 {
        font-size: 4em;
        text-align: center;
        margin-top: 100px;
    }

    p {
        font-size: 1.5em;
        text-align: center;
        margin-top: 30px;
    }

    a {
        color: #fff;
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <h1>Erreur</h1>
    <p>
        Il semble que quelque chose ait mal tourné. Veuillez
        <a href="../index.php">retourner à l\'accueil</a> et réessayer.
    <p>
        <br>
        "Compte non trouvé" : Ce message d\'erreur peut être affiché si un utilisateur essaie de se connecter à un
        compte
        <br>
        qui n\'existe pas dans la base de données. La suggestion de correction pourrait être de demander à
        l\'utilisateur
        <br>
        de vérifier s\'il a entré le nom d\'utilisateur ou le mot de passe correctement, et de lui offrir la possibilité
        <br>
        de créer un nouveau compte s\'il n\'en a pas encore.
        <br>

        <br>
        "Formulaire non rempli" : Ce message d\'erreur peut être affiché si un utilisateur essaie de soumettre un
        <br>
        formulaire sans avoir rempli tous les champs obligatoires. La suggestion de correction pourrait être d\'indiquer
        <br>
        clairement quels champs sont obligatoires et d\'afficher un message d\'erreur spécifique pour chaque champ
        <br>
        manquant.
        <br>

        <br>
        "Page introuvable" : Ce message d\'erreur peut être affiché si un utilisateur essaie d\'accéder à une page qui
        <br>
        n\'existe pas ou qui a été déplacée. La suggestion de correction pourrait être de rediriger l\'utilisateur vers
        <br>
        une page similaire ou de lui offrir une recherche pour trouver la page qu\'il cherche.
        <br>

        <br>
        "Erreur de chargement de page" : Ce message d\'erreur peut être affiché si une page ne peut pas être chargée en
        <br>
        raison d\'un problème technique. La suggestion de correction pourrait être de demander à l\'utilisateur de
        <br>
        vérifier sa connexion Internet ou de contacter l\'assistance technique pour obtenir de l\'aide.
        <br>
    </p>
    </p>
</body>

</html>
');
file_put_contents("./lwp-client/infos.json", '
{
"name": "'.$_POST["NameOfWeb"].'"
}

');
file_put_contents("./lwp-client/pages.json", '
{}
');
file_put_contents("./lwp-admin/modifyPage.php", '
<?php
include_once("../lwp-serveur/password.php");
if (!empty($_COOKIE["LWPS_PASSWORD"])) {
    if ($_COOKIE["LWPS_PASSWORD"] == $CODE) {

if (!empty($_GET["type"])) {
    if ($_GET["type"]=="submit") {
        $JSON = json_decode(file_get_contents("../lwp-client/pages.json"));
        if (!empty($JSON->{$_GET["page"]})) {
            $JSONResp = $JSON->{$_GET["page"]};
            $JSON->{$_POST["NewName"]} = $JSONResp;
            $JSON->{$_POST["NewName"]}->name = $_POST["NewName"];
            unset($JSON->{$_GET["page"]});
            file_put_contents("../lwp-client/pages.json", json_encode($JSON));
            echo "All OK";
        } else {
            echo "Page non-valide!";
        }
    }
}
} else {
    header("Location: ../lwp-error/start.php");
  }
  } else {
    header("Location: ../lwp-error/start.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Panel</title>
    <style>
    /* Style général */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* En-tête */
    header {
        background-color: #222;
        color: #fff;
        display: flex;
        justify-content: space-between;
        padding: 10px;
        position: relative;
    }

    header h1 {
        margin: 0;
        font-size: 2em;
        font-weight: bold;
        text-transform: uppercase;
    }

    header a {
        color: #fff;
        text-decoration: none;
    }

    /* Menu latéral */
    nav {
        background-color: #444;
        color: #fff;
        height: calc(100% - 50px);
        overflow: auto;
        padding: 10px;
        position: absolute;
        top: 50px;
        bottom: 0;
        left: 0;
        width: 200px;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav li {
        margin-bottom: 10px;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 10px;
    }

    nav a:hover {
        background-color: #666;
    }

    /* Contenu principal */
    main {
        padding: 10px;
        margin: 50px 0 0 300px;
    }

    /* Formulaire de configuration */
    .config-form {
        background-color: #eee;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 10px 0;
        padding: 20px;
    }

    .config-form label {
        display: block;
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .config-form input[type="text"] {
        width: 100%;
        padding: 10px;
        font-size: 1.2em;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 20px;
    }

    .config-form button {
        background-color: #0073aa;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 1.2em;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .config-form button:hover {
        background-color: #00608d;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
    }

    label {
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 10px;
    }

    input[type="text"] {
        padding: 10px;
        font-size: 1.2em;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #8b0000;
        border: none;
        color: #fff;
        cursor: pointer;
        font-family: serif;
        font-size: 1.2em;
        padding: 10px 20px;
        text-transform: uppercase;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #b22222;
    }
    </style>
</head>

<body>
    <header>
        <h1>Modifier la page : <?php if (!empty($_GET["page"])) {
            echo $_GET["page"];
        } ?></h1>
    </header>
    <nav>
        <ul>
            <li><a href="../lwp-error/start.php">Modifier le mot de passe</a></li>
            <li>
                <form action="../createPage.php" method="post">
                    Créer une page (Nom)
                    <input type="text" name="Name">
                    <input type="submit" value="Valider">
                </form>
            </li>
        </ul>
    </nav>
    <main>
        <form action="./modifyPage.php?type=submit&page=<?php  if (!empty($_GET["page"])) {
            echo $_GET["page"];
        } ?>" method="post">
            <input type="text" name="NewName" id="Nouveau Nom">
            <input type="submit" value="Changer">
        </form>
        <!-- le contenu du panel -->
    </main>
    <footer>
    </footer>
    <script>
    let xlm2 = new XMLHttpRequest();
    xlm2.responseType = "json";
    xlm2.open("GET", "../lwp-client/pages.json");
    xlm2.send();
    xlm2.onload = function() {
        let object = xlm2.response;
        for (const key in object) {
            if (Object.hasOwnProperty.call(object, key)) {
                const element = object[key];
                document.querySelector("nav > ul").innerHTML += `
          <li class="Menu-Item"><a href=\'../lwp-admin/modifyPage.php?type=form&page=${key}\'>${element.name} (accès : ${element.path}) ✏️</a></li>
          `;
            }
        }
    };
    </script>
</body>

</html>
');
file_put_contents("./lwp-admin/index.php", '<?php
include_once("../lwp-serveur/password.php");
if (!empty($_COOKIE["LWPS_PASSWORD"])) {
    if ($_COOKIE["LWPS_PASSWORD"]==$CODE) {
        header("Location: modifyPage.php");
    } else {
    header("Location: ../lwp-error/start.php");
}
} else {
header("Location: ../lwp-error/start.php");
    }
?>
');
file_put_contents("success.php", '<?php
<?php
echo "L\'opération est un succès! redirection : <a href=\'./index.php\'>Passer</a>";
?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000);
</script>
');
file_put_contents("index.php", '<?php
<?php
include_once("./lwp-serveur/password.php");
if (!empty($_COOKIE["LWPS_PASSWORD"])) {
    if ($_COOKIE["LWPS_PASSWORD"]==$CODE) {
        echo "You Are ADMIN! <a href=\'home\'>Home</a><a href=\'panel.php\'>Panel</a>";
} else {
    header("Location: home/");
}
} else {
header("Location: home/");
    }
?>
');
file_put_contents("error.php", '<?php
<?php
header("Location: lwp-error/know.php");
?>
');
}
?>
<form action="./index.php" method="post">
    Nom de votre site web!
    <input type="text" name="NameOfWebNameOfWeb" id="">
</form>
