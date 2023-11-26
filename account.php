<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    <?php
    include("navbar.php");
    ?>
    <div class="absolute flex flex-col justify-center top-0 ml-96 ">
        <button class="absolute top-9 bg-sky-950 px-5 py-2 rounded-lg text-white drop-shadow-lg	" id="button" type="submit">Ajouter un compte</button>
    <table class="w-[800px]" >
            <tr>
                <td>ID DE COMPTE</td>  
                <td>ID DE CLIENT</td>
                <td>RIB</td>
                <td>BALANCE</td>
                <td>DEVIS</td>
            </tr>
        </table>
           
        <div id="ajouter" class="w-84 h-96 items-center flex gap-[20px] rounded-lg ml-72 mt-10 flex-col justify-center text-center bg-black transform scale-0 duration-700 ease-in-out	">
            
                <a href="account.php"><img class="absolute top-3 right-9" src="icons8-effacer-30.png" alt=""></a>
            
            <label for="balance"></label>
            <input class="px-5 py-2 rounded text-gray-300 bg-gray-700" type="text" placeholder="BALANCE">
            
            <label for="devis"></label>
            <input class="px-5 py-2 rounded text-gray-300 bg-gray-700 " type="text" placeholder="DEVIS">
            
            <label for="nom"></label>
            <input class="px-5 py-2 rounded text-gray-300 bg-gray-700" type="text" placeholder="RIB">
            
            <label for="nom"></label>
            <input class="px-5 py-2 rounded text-gray-300 bg-gray-700" type="text" placeholder="ID DE CLIENT">
            <div>
            <a href="account.php"><button class="px-8 py-2 rounded text-white bg-orange-700 " type="submit">Ajouter</button></a>
        </div>
        </div>
        
    </div>
    <script src="script.js"></script>
</body>
</html>