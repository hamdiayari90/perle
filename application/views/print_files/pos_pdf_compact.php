<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Print Invoice #<?php echo $invoice['tid'] ?></title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-size: 10pt;
            background-color: #fff;
        }

        #products {
            width: 20%;
        }

        #products tr td {
            font-size: 10pt;
        }

        #printbox {
            width: 10px;
            height: 20px;
            margin: 5pt;
            padding: 5px;
            text-align: center;
        }

        .inv_info tr td {
            padding-right: 10pt;
        }

        .product_row {
            margin: 15pt;
        }

        .stamp {
            margin: 2pt;
            padding: 3pt;
            border: 3pt solid #111;
            text-align: center;
            font-size: 2pt;
            color
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body dir="<?= LTR ?>" >
<h3 id="logo" class="text-center"><br><img style="max-height:40px;" src='<?php $loc = location($invoice['loc']);
    echo base_url() . 'userfiles/company/' . $loc['logo'];
    ?>' alt='Logo'></h3>
<div id='printbox'>


<hr>

    <?php
        $this->pheight = 0;
        foreach ($products as $row) {
            $this->pheight = $this->pheight + 8;
            echo '
    <table  style="    width: 300px; height: 70px;" border=1 class="inv_info">
            
    <tr>
    <td ><strong>Nom produit</strong></td>
     <td><strong>qty</strong></td>
</tr>
<tr>
<td >' . $row['product'] . '</td>
 <td>' . +$row['qty'] . '</td>
</tr>

        </table>
        <hr>
        ';
        } ?>
    
    
</body>
</html>
