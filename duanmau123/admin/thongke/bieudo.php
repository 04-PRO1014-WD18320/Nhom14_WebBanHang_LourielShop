

<script src="https://www.gstatic.com/charts/loader.js"></script>

<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

<script>
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        // Tạo một mảng dữ liệu
        var data = google.visualization.arrayToDataTable([
        ['Danh mục', 'Số lượng sản phẩm'],
        <?php
            $tongdm = count($listthongke);
            $i = 0; // Bắt đầu chỉ mục tại 0
            foreach ($listthongke as $thongke) {
                extract($thongke);
                if($i==$tongdm) $dauphay = "" ; else $dauphay=",";
                echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] ."]" .$dauphay;
                $i++;
            }
        ?>

    ]);




        // Cài đặt tùy chọn
        var options = {
            title: 'Thống kê sản phẩm theo danh mục'
        };

        // Vẽ biểu đồ
        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script>
