<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h3 class="title">Ma boutique</h3>
            <a href="<?php echo base_url('productcategory/addwarehouse') ?>" class="btn btn-primary btn-sm rounded">
                <?php echo $this->lang->line('Ajouter') ?>
            </a>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?php foreach ($cat as $row) { ?>
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <h2><?php echo $row['title'] ?></h2>
                        </div>
                        <div class="col-sm-4">
                            <a href="<?php echo base_url() ?>productcategory/warehouse_report?id=<?php echo $row['id'] ?>"
                               class="btn btn-info btn-sm">
                                <span class='fa fa-pie-chart'></span>
                                <h4>Voir l'historique</h4>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
