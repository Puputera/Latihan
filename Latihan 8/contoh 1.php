<?php
    $server=$_SERVER['PHP_SELF'];
?> 

<fieldset><legend>Input Skor</legend>
    <form action="<?php echo $server;?> "method="post">
        <table width="253" border="0">
            <tr>
                <td width="69">Skor</td>
                <td width="10">:</td>
                <td width="160"><input type="text" name="skor" id="textfield"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="button" id="button" value="Proses"></td>
            </tr>
        </table>
    </form>
</fieldset>

<?php
    $s=$_POST["skor"];
    If($s=="100") 
    {
        echo "Top Score";
    }
    else
 {
    echo "Not Top Score";
 }
?>