<table cellpadding="20" style="width: 100%">

    <tr>
        <td style="border: 1px solid; width: 25%">
          <p><img src="https://perleplus.tech/userfiles/theme/logo-header.png" alt="" width="100" height="100" align="center"/></p>
<p>&nbsp;</p>
          <strong>Code produit :</strong><br><strong><?= $lab['product_code'] ?></strong><br><br>
          <strong>Qte:</strong><br><strong><?= $lab['qty'] ?></strong><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; PRIX:<?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
                <strong>Date:</strong><br><strong><?= $lab['invoicedate'] ?></strong><br><br>
        </td>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
    </tr>

    <tr>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
    </tr>

    <tr>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
        <td style="border: 1px solid; width: 33.333%">
            <strong><?= $lab['product_name'] ?></strong><br><?= $lab['product_code'] ?><br><br>
            <barcode code="<?= $lab['barcode'] ?>" text="1" class="barcode" height=".6"/>
            </barcode><br><br>

            <?php
            if ($lab['expiry']) echo $this->lang->line('Expiry Date') . ' ' . dateformat($lab['expiry']) . '<br><br>';
            ?>
            <h3> &nbsp; &nbsp;
                &nbsp; <?= amountExchange($lab['product_price'], 0, $this->aauth->get_user()->loc) ?></h3>
        </td>
    </tr>

</table>