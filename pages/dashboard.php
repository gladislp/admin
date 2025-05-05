<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}
include '../includes/header.php';
include '../includes/sidebar.php';
include '../includes/db.php';
?>

<div class="main-content">
  <h1>Dashboard</h1>

  <div class="container">

<!-- BOX STATISTIK -->
<div class="stat-boxes" style="display: flex; gap: 20px;">
    <div class="box" style="background:#eee; padding:20px; flex:1;">
        <h3>Jumlah Pengguna</h3>
        <p>
            <?php
            $q = mysqli_query($conn, "SELECT COUNT(*) as total FROM pengguna");
            $d = mysqli_fetch_assoc($q);
            echo $d['total'];
            ?>
        </p>
    </div>
    <div class="box" style="background:#eee; padding:20px; flex:1;">
        <h3>Jumlah Sampah</h3>
        <p>
            <?php
            $q = mysqli_query($conn, "SELECT COUNT(*) as total FROM sampah");
            $d = mysqli_fetch_assoc($q);
            echo $d['total'];
            ?>
        </p>
    </div>
    <div class="box" style="background:#eee; padding:20px; flex:1;">
        <h3>Jumlah Poin</h3>
        <p>
            <?php
            $q = mysqli_query($conn, "SELECT SUM(poin) as total FROM poin");
            $d = mysqli_fetch_assoc($q);
            echo $d['total'];
            ?>
        </p>
    </div>
</div>

<!-- WRAPPER FLEX -->
<div style="display: flex; justify-content: space-between; gap: 20px; margin-top: 40px;">

    <!-- DIAGRAM PENGGUNA -->
    <div style="flex: 1; background: #fff; padding: 20px; border-radius: 10px;">
        <h3>Diagram Pengguna RT 1 - 5</h3>
        <canvas id="chartRT"></canvas>
    </div>

    <!-- KALENDER -->
    <div style="flex: 1; background: #fff; padding: 20px; border-radius: 10px;">
        <h3>Kalender</h3>
        <div id="calendar"></div>
    </div>

</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Moment.js -->
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js"></script>


<script>
    // Chart Pengguna per RT 1-5
    const ctx = document.getElementById('chartRT').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['RT 1', 'RT 2', 'RT 3', 'RT 4', 'RT 5'],
            datasets: [{
                label: 'Pengguna per RT',
                data: [
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        $q = mysqli_query($conn, "SELECT COUNT(*) as total FROM pengguna WHERE rt = $i");
                        $d = mysqli_fetch_assoc($q);
                        echo $d['total'];
                        if ($i < 5) echo ', ';
                    }
                    ?>
                ],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });

    // Kalender sederhana (tanggal hari ini)
    //const calendar = document.getElementById('calendar');
    //const today = new Date();
    //calendar.innerHTML = today.toDateString();

        $(document).ready(function() {
            $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
                },
            defaultView: 'month',
            editable: false,
            events: [
                    {
                title: 'Contoh Event',
                start: '2025-05-10',
                end: '2025-05-12'
                    }
                ]
            });
        });

</script>

<?php
include '../includes/footer.php';
?>
