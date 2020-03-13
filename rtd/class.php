    <?php
    include 'index.php'; 
    ?> 
    <html>
    <title>Roman Numeral To Decimal in PHP</title>
    <body>
    <?php
    error_reporting(0);
    $input_A = $_POST['inputFirst'];
    $input_B= $_POST['inputSecond'];
    if(isset($_POST['ClearButton'])){
    $input_A="";
    $input_B="";

    $display_result="";
    }
    ?>
    <br>
    <h3>Roman Numeral To Decimal in PHP </h3>
    <form action="" method="post">
    Enter Roman Numeral
    <input type="text" name="inputFirst"
    value="<?php echo $input_A; ?>" size="5" autofocus required/>
    <br><br>
    <input type="submit" name="SubmitButton" value="Ok"/>
    &nbsp;&nbsp;&nbsp;
    <input type="submit" name="ClearButton" value="Clear"/>
    </form>
    <?php

    $value =new Roman();
    if(isset($_POST['SubmitButton']))
    {
    $original = $input_A;
    $rows= $value->roman_convert($original);

    echo "<br>";
    $display_result = "The Decimal equivalent of " .$original. " is "
    .$rows.".";
    echo $display_result;
    echo "<br>";
    }
    ?>

    <h3> Decimal To Roman Numeral in PHP </h3>
    <form action="" method="post">
    Enter  Decimal number
    <input type="text" name="inputSecond"
    value="<?php echo $input_B; ?>" size="5" autofocus required/>
    <br><br>
    <input type="submit" name="SubmitButton1" value="Ok"/>
    &nbsp;&nbsp;&nbsp;
    <input type="submit" name="ClearButton" value="Clear"/>
    </form>
    <?php

    $value =new Roman();
    if(isset($_POST['SubmitButton1']))
    {
    $original = $input_B;
    $row= $value->decimal_convert($original);

    echo "<br>";
    $display_result = "The roman equivalent of " .$original. " is "
    .$row.".";
    echo $display_result;
    echo "<br>";
    }
    ?>
    </body>
    </html>

		