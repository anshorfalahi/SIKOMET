<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/iconly.css">
<link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/app.css">
<link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/app-dark.css">

<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section class="row">
<div class="col-md-6 col-lg-6">
    <div class="card">
        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                <div class="stats-icon green mb-2">
                    <i class="iconly-boldCalendar"></i>
                </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Total Berita Bulan Ini</h6>
                    <h6 class="font-extrabold mb-0"> <?= $totalBerita1MediaPerBulan['jumlah_berita'] ?> </h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-6">
    <div class="card">
        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                    <div class="stats-icon red mb-2">
                        <i class="iconly-boldWork"></i>
                    </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Total Berita Tahun Ini</h6>
                    <h6 class="font-extrabold mb-0"> <?= $totalBerita1MediaPerTahun['jumlah_berita'] ?> </h6>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-12" >
        <div class="card">
            <div class="card-header">
                <h4>Statistik Berita Media 12 Bulan Terakir</h4>
            </div>
            <div class="card-body">
                <div id="berita-per-media">
                </div>
            </div>
        </div>
    </div>
</section>


<script src="<?=base_url()?>assets/static/js/components/dark.js"></script>
<script src="<?=base_url()?>assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?=base_url()?>assets/compiled/js/app.js"></script>

<!-- Need: Apexcharts -->
<script src="<?=base_url()?>assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="<?=base_url()?>assets/static/js/pages/dashboard.js"></script>
<script>
    var chart_berita = new ApexCharts(
        document.querySelector("#berita-per-media"),
        options = {
            chart: {
                height: 470,
                type: "bar",
                toolbar: {
                    show: true,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "55%",
                    endingShape: "rounded",
                },
            },
            dataLabels: {
                enabled: false,
            },
            colors: "#435ebe",
            // stroke: {
            //     show: true,
            //     width: 2,
            //     colors: ["transparent"],
            // },
            series: [
                {
                    name: "Berita",
                    data: [
                        <?php foreach ($totalBeritaMedia as $tbm) : ?>
                            <?= $tbm['jumlah_berita'] ?>,
                        <?php endforeach; ?>
                    ],
                },
            ],
            xaxis: {
                categories: [
                    <?php foreach ($totalBeritaMedia as $tbm) : ?>
                        "<?= $tbm['bulan'] ?>",
                    <?php endforeach; ?>
                ],
            },
            yaxis: {
                title: {
                    text: "Berita",
                },
            },
            fill: {
                opacity: 1,
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + " Berita";
                    },
                },
            },
        }
    );

    chart_berita.render();
</script>


<?= $this->endSection() ?>