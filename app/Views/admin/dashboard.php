<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/iconly.css">
<link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/app.css">
<link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/app-dark.css">

<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section class="row"> 
<div class="col-6 col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content ">
                <div class="stats-icon purple mb-2">
                    <i class="iconly-boldProfile"></i>
                    </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Total Media</h6>
                    <h6 class="font-extrabold mb-0"><?= $totalMedia ?></h6>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="col-6 col-lg-3 col-md-6">
    <div class="card"> 
        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                    <div class="stats-icon blue mb-2">
                    <i class="iconly-boldShow"></i>
                    </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Total Media Aktif</h6>
                    <h6 class="font-extrabold mb-0"><?= $totalMediaAktif ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-6 col-lg-3 col-md-6">
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
                    <h6 class="font-extrabold mb-0"><?= $totalBeritaPerBulan ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-6 col-lg-3 col-md-6">
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
                    <h6 class="font-extrabold mb-0"><?= $totalBeritaPerTahun ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-12" >
        <div class="card">
            <div class="card-header">
                <h4>Statistik Berita Per Media Bulan <?= date("F Y") ?></h4>
            </div>
            <div class="card-body">
                <div id="berita-per-media">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12" >
        <div class="card">
            <div class="card-header">
                <h4>Target Berita Per Media Per Bulan</h4>
            </div>
            <div class="card-body">
                <div id="target-berita-per-media">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12" >
        <div class="card">
            <div class="card-header">
                <h4>Toatal Berita Media Per Tahun <?= date("Y") ?></h4>
            </div>
            <div class="card-body">
                <div id="total-berita-per-tahun">
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
                height: 250,
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
                        <?php foreach ($beritaPerMedia as $bpm) : ?>
                            <?= $bpm['jumlah_berita'] ?>,
                        <?php endforeach; ?>
                    ],
                },
            ],
            xaxis: {
                categories: [
                    <?php foreach ($beritaPerMedia as $bpm) : ?>
                        "<?= $bpm['nama_media'] ?>",
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
<script>
  var chart_targets = new ApexCharts(
        document.querySelector("#target-berita-per-media"),
        options = {
            chart: {
                height: 250,
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
                        //ambil angka saja dari minimal_berita
                        <?php foreach ($targetBeritaMedia as $tbm) : ?>
                            <?= $ankanja = preg_replace('/[^0-9]/', '', $tbm['minimal_berita']) ?>,
                        <?php endforeach; ?>
                    ],
                },
            ],
            xaxis: {
                categories: [
                    <?php foreach ($targetBeritaMedia as $tbm) : ?>
                        "<?= $tbm['nama_media'] ?>",
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

    chart_targets.render();
</script>
<script>
    var chart_total_berita = new ApexCharts(
        document.querySelector("#total-berita-per-tahun"),
        options = {
            chart: {
                height: 250,
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
                        <?php foreach ($totalBeritaMediaPerTahun as $tbmpt) : ?>
                            <?= $tbmpt['jumlah_berita'] ?>,
                        <?php endforeach; ?>
                    ],
                },
            ],
            xaxis: {
                categories: [
                    <?php foreach ($totalBeritaMediaPerTahun as $tbmpt) : ?>
                        "<?= $tbmpt['nama_media'] ?>",
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

    chart_total_berita.render();
</script>

<?= $this->endSection() ?>