<header class="panel-heading">
    สรุปยอด
</header>
<div class="panel-body">
    <div class="col-lg-10">
        <canvas id="doughnut" height="300" width="400"></canvas>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.js"></script>
<script>
    var data = {
        labels: <?php echo json_encode($label) ?>,
        datasets: [
            {
                data: <?php echo json_encode($data) ?>,
                backgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ],
                hoverBackgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ]
            }]
    };
    var ctx = document.getElementById("doughnut").getContext("2d");
    var myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: data
    });

</script>