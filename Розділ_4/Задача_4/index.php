<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача_4</title>
</head>
<body>
<div class="container">
    <div class="container__inner">
   <div class="container__form">
   <h3>Вставте випадковий тект
   </h3>
    <form type ="text" name="text" action="" method="post">

<textarea name="randomtext" id="" cols="30" rows="10"></textarea><br>
<button type="submit">Відправити</button>
    </form><br>
    </div>

<?php
$randomtext = $_POST['randomtext'];

if (empty($randomtext)) {
    echo'<span style = "color:red; font-weight:bold;" >Для перевірки ви повинні<br> вставити текст</span>' ;
} else {

}
$wordwrap = wordwrap($randomtext, 40, "<br>", true)
?>

<div class="textarea"><?php echo $wordwrap; ?></div>
</div>

<div class="copy__text">
    <h3>Випадковий текст</h3>
    Lorem Ipsum є псевдо- латинський текст використовується у веб - дизайні, 
    типографіка, верстка, і друку замість англійської підкреслити елементи дизайну над змістом. 
    Це також називається заповнювач ( або наповнювач) текст. 
    Це зручний інструмент для макетів. Це допомагає намітити візуальні елементи в документ або презентацію, наприклад, друкарня, шрифт,
     або макет. Lorem Ipsum в основному частиною латинського тексту за класичною автор і філософа Цицерона. Це слова і букви були змінені додаванням або видаленням, 
    так навмисно роблять його зміст безглуздо, це не є справжньою, правильно чи зрозумілою Латинської більше.
</div>
</div>

<style>

    container__form{
        margin-bottom: 40px;
    }
    .copy__text{
        width: 50%;
        padding-left: 40px;
    }
    .container__inner{
        display: flex;
  flex-direction: column;


    }
    .container{
        display: flex;
        justify-content: center;
    }
    .textarea{
        padding-top: 50px;
    }
</style>

</body>
</html>


