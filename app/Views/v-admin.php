<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">

                <p>Info Kampus</p>
              </div>
              <div class="icon">
              <i class="fas fa-boxes"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">

                <p>Info PMB</p>
              </div>
              <div class="icon">
                <i class="fas fa-th-list"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">

                <p>Kegiatan Mahasiswa</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More Info<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


        


          <div class="col-md-4">
    <!-- Info Boxes Style 2 -->
    <div class="info-box mb-3 bg-indigo">
      <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Jumlah Mahasiswa pertahun</span>
        <span class="info-box-number"></span>
</div>
</div>
</div>



<div class="col-md-12">
    <canvas id="myChart" width="100" height="35px"></canvas>
</div>

<script>
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(225, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(225, 159, 64, 0.2)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
</script>
         