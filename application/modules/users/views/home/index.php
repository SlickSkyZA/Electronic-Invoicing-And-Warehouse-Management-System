<script src="<?= base_url('assets/highcharts/highcharts.src.js') ?>"></script>
<script src="<?= base_url('assets/highcharts/modules/exporting.js') ?>"></script>
<div class="home-page">
    <?php if (!empty($issuedInvoices)) { ?>
        <div id="report-num-invoices"></div>
        <?php include 'application/modules/users/views/reports/reportNumInvoices.php'; ?>
    <?php } else { ?>
        <h1 class="no-invoices"><?= lang('no_reports_yet_all_time') ?></h1>
    <?php } ?>
</div> 
