<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <base href="<?php echo base_url();?>" />
    <style type="text/css">
        .main-content{
            font-weight: bold;
        }
        .center {
            margin: auto;
            width: 60%;
            padding: 10px;
        }
    </style>
</head>
<body>
<div id="container">
    <div id="body">
        <div style="text-align:center;">
            <img src="resources/img/ocharos-logo.png" height="200" />
        </div>
        <div class="center">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td class="main-content">ชื่อแพคเก็จ</td>
                    <td>&nbsp;</td>
                    <td><?=$packageData->package_name?></td>
                </tr>
            </table>
            <h4 class="upper">รายการ</h4>
            <table style="border-style:solid;" border="1" cellpadding="10" cellspacing="0" width="600px">
                <tbody>
                <tr>
                    <th width="150">ชื่อ-นามสกุล</th>
                    <th>ราคา/หน่วย</th>
                    <th>จำนวน</th>
                    <th>ราคารวม</th>
                </tr>
                <?php
                $total = 0;
                $totalQty =0;
                foreach ($orderDetails as $item):
                    $total += $item['qty'] * $item['price'];
                    $totalQty += $item['qty'];
                    ?>
                    <tr>
                        <td><?=$item['contact']; ?></td>
                        <td><?=$item['price']; ?></td>
                        <td><?=$item['qty']; ?></td>
                        <td><?=($item['price']*$item['qty']);?></td>
                    </tr>
                <?php endforeach; ?>
                <tr class="evidence">
                    <td class="upper" colspan="2">
                        <h5>รวมทั้งหมด</h5>
                    </td>
                    <td><h5><?=$totalQty;?></h5></td>
                    <td class="upper">
                        <h5><?=$total;?> THB</h5>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
</body>
</html>