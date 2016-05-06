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
                    <h4 class="upper">ข้อมูลติดต่อ</h4>
                    <table cellpadding="10" cellspacing="10">
                        <tr>
                            <td class="main-content">รหัสการสั่งซื้อ</td>
                            <td><?=str_pad($contactData->order_id,5,"0",STR_PAD_LEFT);?></td>
                        </tr>
                        <tr>
                            <td class="main-content">ชื่อ-นามสกุล</td>
                            <td><?=$contactData->contact;?></td>
                        </tr>
                        <tr>
                            <td class="main-content">เบอร์ติดต่อ</td>
                            <td><?=$contactData->phone;?></td>
                        </tr>
                        <tr>
                            <td class="main-content">สถานะ</td>
                            <td><?=$contactData->status;?></td>
                        </tr>
                    </table>
                    <h4 class="upper">แพคเก็จที่สั่งซื้อ</h4>
                    <table border="1" cellpadding="10" cellspacing="0">
                        <tbody>
                        <tr>
                            <td>แพคเก็จ</td>
                            <td>จำนวน</td>
                            <td>ราคา/หน่วย</td>
                            <td>ราคารวม</td>
                        </tr>
                        <?php
                        $total = 0;
                        foreach ($orderDetails as $item):
                            $total += $item['qty'] * $item['price'];
                            ?>
                            <tr>
                                <td><?=$item['package_name']; ?></td>
                                <td><?=$item['qty']; ?></td>
                                <td><?=$item['price']; ?></td>
                                <td>
                                    <h5 class="upper"><?=($item['price']*$item['qty']);?></h5>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr class="evidence">
                            <td class="upper" colspan="3">
                                <h5>รวมทั้งหมด</h5>
                            </td>
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