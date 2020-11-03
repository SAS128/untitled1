<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php echo '<link href="style.css" rel="stylesheet" />'; ?>
</head>
<body>
<?php
try {
//    if(isset($_GET["http://localhost:63342/untitled/index.php?page="])) {
//        echo 'mem';
//    }
//    else {
//
//        header('location: drakula404.html');
//        exit();
//    }
}
catch (Exception $ex){
    echo $ex->getMessage();
    header('location: Error.html');
}

echo '<link href="style.css" rel="stylesheet" />';
$page=0;
$item=1;
$pajes = array(0=>
    array("article"=> "Iphone11",
        "coast" => "499$",
        "adress" => "Это типа адресс" ,
        "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
        "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
        "top" => "Топ"),
    1=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ"),
    2=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ"),
    3=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ"),
    4=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ"),
    5=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ"),
    6=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ"),
    7=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ"),
    8=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ"),
    9=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ"),
    10=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ"),
    11=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ"),
    12=>
        array("article"=> "Iphone12",
            "coast" => "9999$",
            "adress" => "Это типа адресс" ,
            "img" => "https://img.xdrv.ru/articles/442/small_logo.jpg",
            "imghurt" => "https://svg-art.ru/wp-content/uploads/2016/05/heart-whole.png",
            "top" => "Топ")

);
function getpajes($help){

    return '<table style=" alignment: center" width="850px" height="130px" ">
<h1 style="margin-left: 100px;">
 <tr >
            <td rowspan="2" width="100px" >
                <img  src='.$help["img"].' /></td>
            <td ><h2 style="text-align: left;" >
                        '.$help["article"].'
                 </h2></td>
            <td > <h2 style="text-align: right;" >
                        '.$help["coast"].'
                 </h2></td>
   </tr>
    <tr valign="bottom" >
    
            <td>  <h2 style="text-align: left;" >
                        '.$help["adress"].'
                 </h2></td>
            <td valign="bottom">
                 <h2 style="text-align: right;" >
                        <img width="50px" height="50px" src='.$help["imghurt"].' />
                 </h2>
     </td>
     </tr>
</h1>

  
    </table>
   
    ';
}

function setpajes($cuc){
    return ' <a href="http://localhost:63342/untitled/index.php?page='.$cuc.'">'.$cuc.'</a>';
}

foreach ($pajes as $key => $value)
{
    echo getpajes($value);
    if($key%5==0)
    {
        $page++;
        echo setpajes($page);
    }
}

$_GET["page"] ='page='.$page.'';
echo $_GET;
if(isset($_GET["http://localhost:63342/untitled/index.php?page="])) {
    echo 'mem';
}
else {

    header('location: drakula404.html');
    exit();
}
?>
<form method="get" action="index.php">
</form>
</body>
</html>
<style>
    table {
        border: 4px solid white; /* Параметры границы */
        background: whitesmoke;
        padding: 10px; /
    }
</style>