<?php
session_start();
require("dbconnect.php");
$sql = "select * from lottery_list ;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
$rs=mysqli_fetch_assoc($result)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lottery</title>
</head>
<body>
<h1>下注表單</h1>
<form method="post" action="bettingControl.php">
    <input name="period" type="hidden" id="period" value="<?php echo $rs['period']?>"/> <br>

    本期下注期間 : <?php echo $rs['startTime'], " ~ ", $rs['endTime'] ?> </br>

    本期開獎時間 : <?php echo $rs['showDate'] ?></br>

    目前累積獎金 : <?php echo $rs['bonus'] ?></br>

    下注號碼 : 
            <select name="num" id="num"><option>請選擇你要的號碼</option>
            <?php 
            for ($i=1; $i<44; $i++)
                echo '<option value ="', $i, '">', $i, '</option>';
            ?>
            </select>
            </br>

    下注金額 : <input name="price" type="text" id="price" /></br>

    請輸入你的金鑰 : <input name="key" type="message" id="key" /></br>

    <input type="submit" name="Submit" value="確認下注" />
</form>
</tr>
</table>
</body>
</html>
