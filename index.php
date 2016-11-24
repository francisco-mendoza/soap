<!DOCTYPE html>
<html>
<head>
    <title>WSDL a PHP</title>

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="lib/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/google/code-prettify/master/styles/sons-of-obsidian.css">

    <!--JS-->
    <script src="lib/Bootstrap/js/bootstrap.min.js" defer="defer"></script>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer="defer"></script>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/src/lang-css.js" defer="defer"></script>

    <style>.operative { font-weight: bold; border:1px solid yellow }</style>


</head>
<body onload="prettyPrint()">
    <?php
    if (isset($_POST['url']))
    {
     $url = $_POST['url'];
     $sname = $_POST['sname'];
    }
    else
    {
     $url='';
     $sname = '';
    }
    ?>
    <h2>Genera clases PHP desde un WSDL</h2>
    <p> Ejemplo. http://footballpool.dataaccess.eu/data/info.wso?wsdl</p>

    <form action="index.php" method="post">
        <p>Url: <input type="text" name="url" size="60" value="<?php echo $url ?>" /></p>
        <p>Class Name: <input type="text" name="sname" size="60" value="<?php echo $sname ?>" /></p>
        <input type="submit" name="generatebtn" value="Generate Code" />
    </form>


    <?php if (isset($_POST['generatebtn'])){?>

<!--            <textarea rows="10" cols="80" name="code">-->
<!--                --><?php
//                include 'EasyWsdl2PHP.php';
//                echo EasyWsdl2PHP::generate(trim($url),$sname);
//                ?>
<!--            </textarea>-->

        <pre class="prettyprint" name="code" style="overflow-y:auto;max-height: 400px">
            <?php
            include 'EasyWsdl2PHP.php';
            echo EasyWsdl2PHP::generate(trim($url),$sname);
            ?>
        </pre>

   <p>Generado por: <a target="_blank" href="http://framesoft.cl">http://www.framesoft.cl</a></p>
    <?php }?>
</body>
</html>