<?php
    $server=$_SERVER['PHP_SELF'];
?>

<fieldset><legend>Input Nilai</legend>
    <form action="<?php echo $server;?>" method="post">
        <table width="336" border="0">
            <tr>
                <td width="130">Nilai</td>
                <td width="8">:</td>
                <td width="176"><input type= "text" name="nilai"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="button" id="button" value="Proses"></td>
            </tr>
        </table>
    </form>
    <?php
    $n=$_POST["nilai"];
    if($n%2==0)
    {
        echo "$n Adalah Bilangan Genap";
    }
    else
    {
        echo "$n Adalah Bilangan Ganjil";
    }
?>
</fieldset>

