 <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a
                    href="https://plainadmin.com/"
                    rel="nofollow"
                    target="_blank"
                  >
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div
                class="terms d-flex justify-content-center justify-content-md-end"
              >
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ============ Theme Option Start ============= -->
    </div>
    <!-- ============ Theme Option End ============= -->

    <?php $abs = array();?>
                  <?php $total = array();?>
                  <?php foreach($absen_masuk as $msk) : ?>
                    
                    <?php echo $msk->nip ?>
                    <?php $abs[] = $msk->nip; ?>
                    <?php $total[] = $msk->total; ?>
                  <?php endforeach; ?>

                  <?php echo $total[1] ?>

    <!-- ========= All Javascript files linkup ======== -->
    <script src="<?php echo base_url('assets/dist')?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/Chart.min.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/apexcharts.min.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/dynamic-pie-chart.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/moment.min.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/fullcalendar.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/jvectormap.min.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/world-merc.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/polyfill.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/quill.min.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/datatable.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/Sortable.min.js"></script>
    <script src="<?php echo base_url('assets/dist')?>/js/main.js"></script>

    <script>
      // =========== chart one start
      var ctx1 = document.getElementById("Chart1").getContext("2d");
      var chart1 = new Chart(ctx1, {
        // The type of chart we want to create
        type: "bar", // also try bar or other graph types
        // The data for our dataset
        data: {
          labels: [
            "<?php echo $abs[0]?>",
            "<?php echo $abs[1]?>",
            "<?php echo $abs[2]?>",
            "<?php echo $abs[3]?>",
            "<?php echo $abs[4]?>",

          ],
          // Information about the dataset
          datasets: [
            {
              label: "",
              backgroundColor: "#4A6CF7",
              barThickness: 6,
              maxBarThickness: 8,
              data: [
                <?php echo $total[0]?>, <?php echo $total[1]?>, <?php echo $total[2]?>, <?php echo $total[3]?>, <?php echo $total[4]?>, 
              ],
              pointBackgroundColor: "#F3F6F8",
              pointHoverBackgroundColor: "#5243AA",
              pointBorderColor: "#F3F6F8",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 5,
              pointBorderWidth: 5,
              pointRadius: 8,
              pointHoverRadius: 8,
            },
          ],
        },
        // Configuration options
        options: {
          borderColor: "#F3F6F8",
          borderWidth: 15,
          backgroundColor: "#F3F6F8",
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "rgba(104, 110, 255, .0)",
                };
              },
            },
            intersect: false,
            backgroundColor: "#F3F6F8",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 10,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 10,
                  min: 0,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  display: false,
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart one end

      // =========== chart two start
      var ctx2 = document.getElementById("Chart2").getContext("2d");
      var chart2 = new Chart(ctx2, {
        // The type of chart we want to create
        type: "bar", // also try bar or other graph types
        // The data for our dataset
        data: {
          labels: [
            "Jan",
            "Fab",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          // Information about the dataset
          datasets: [
            {
              label: "",
              backgroundColor: "#4A6CF7",
              barThickness: 6,
              maxBarThickness: 8,
              data: [
                600, 700, 1000, 700, 650, 800, 690, 740, 720, 1120, 876, 900,
              ],
              pointBackgroundColor: "#F3F6F8",
              pointHoverBackgroundColor: "#5243AA",
              pointBorderColor: "#F3F6F8",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 5,
              pointBorderWidth: 5,
              pointRadius: 8,
              pointHoverRadius: 8,
            },
          ],
        },
        // Configuration options
        options: {
          borderColor: "#F3F6F8",
          borderWidth: 15,
          backgroundColor: "#F3F6F8",
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "rgba(104, 110, 255, .0)",
                };
              },
            },
            intersect: false,
            backgroundColor: "#F3F6F8",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 10,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 1200,
                  min: 0,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  display: false,
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart two end

      // =========== chart three start
      var ctx3 = document.getElementById("Chart3").getContext("2d");
      var chart3 = new Chart(ctx3, {
        // The type of chart we want to create
        type: "line", // also try bar or other graph types

        // The data for our dataset
        data: {
          labels: [
            "Jan",
            "Fab",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          // Information about the dataset
          datasets: [
            {
              label: "Revenue",
              backgroundColor: "transparent",
              borderColor: "#5243AA",
              data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#5243AA",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
            },
            {
              label: "Profit",
              backgroundColor: "transparent",
              borderColor: "#686EFF",
              data: [
                120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
              ],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#686EFF",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
            },
            {
              label: "Order",
              backgroundColor: "transparent",
              borderColor: "#FF8730",
              data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#FF8730",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
            },
          ],
        },

        // Configuration options
        options: {
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "rgba(104, 110, 255, 1)",
                };
              },
            },
            intersect: false,
            backgroundColor: "#fbfbfb",
            titleFontColor: "#8F92A1",
            titleFontSize: 16,
            titleFontFamily: "Inter",
            titleFontStyle: "400",
            bodyFontColor: "#171717",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 15,
            borderColor: "rgba(143, 146, 161, .1)",
            borderWidth: 1,
            title: false,
          },

          title: {
            display: false,
          },

          layout: {
            padding: {
              top: 0,
            },
          },

          legend: false,

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 300,
                  min: 50,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart three end

      // ================== chart four start
      var ctx4 = document.getElementById("Chart4").getContext("2d");
      var chart4 = new Chart(ctx4, {
        // The type of chart we want to create
        type: "bar", // also try bar or other graph types
        // The data for our dataset
        data: {
          labels: ["Jan", "Fab", "Mar", "Apr", "May", "Jun"],
          // Information about the dataset
          datasets: [
            {
              label: "",
              backgroundColor: "#4A6CF7",
              barThickness: "flex",
              maxBarThickness: 8,
              data: [600, 700, 1000, 700, 650, 800],
              pointBackgroundColor: "#F3F6F8",
              pointHoverBackgroundColor: "#5243AA",
              pointBorderColor: "#F3F6F8",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 5,
              pointBorderWidth: 5,
              pointRadius: 8,
              pointHoverRadius: 8,
            },
            {
              label: "",
              backgroundColor: "#EB5757",
              barThickness: "flex",
              maxBarThickness: 8,
              data: [690, 740, 720, 1120, 876, 900],
              pointBackgroundColor: "#F3F6F8",
              pointHoverBackgroundColor: "#5243AA",
              pointBorderColor: "#F3F6F8",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 5,
              pointBorderWidth: 5,
              pointRadius: 8,
              pointHoverRadius: 8,
            },
          ],
        },
        // Configuration options
        options: {
          borderColor: "#F3F6F8",
          borderWidth: 15,
          backgroundColor: "#F3F6F8",
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "rgba(104, 110, 255, .0)",
                };
              },
            },
            intersect: true,
            backgroundColor: "#F3F6F8",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: true,
            xPadding: 30,
            yPadding: 10,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: true,
          },
          legend: {
            display: true,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: true,
                  drawTicks: false,
                  drawBorder: true,
                },
                ticks: {
                  padding: 35,
                  max: 1200,
                  min: 0,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  display: true,
                  drawBorder: true,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart four end

      // ================== chart polarChart1 start
      var ctxRadarChart1 = document
        .getElementById("radarChart1")
        .getContext("2d");
      var radarChart1 = new Chart(ctxRadarChart1, {
        // The type of chart we want to create
        type: "radar", // also try bar or other graph types
        // The data for our dataset
        data: {
          labels: ["Mon", "Thu", "Wed", "Tus", "Fri", "Sta"],
          // Information about the dataset
          datasets: [
            {
              label: "Level 1",
              backgroundColor: "rgba(235, 87, 87, .3)",
              pointBorderColor: "rgba(235, 87, 87, 1)",
              pointBackgroundColor: "rgba(235, 87, 87, 1)",
              borderColor: "rgba(235, 87, 87, 1)",
              pointRadius: 4,
              borderWidth: 2,
              data: [480, 300, 420, 340, 380, 290],
            },
            {
              label: "Level 2",
              backgroundColor: "rgba(47, 128, 237, .3)",
              pointBorderColor: "rgba(47, 128, 237, 1)",
              pointBackgroundColor: "rgba(47, 128, 237, 1)",
              borderColor: "rgba(47, 128, 237, 1)",
              pointRadius: 4,
              borderWidth: 2,
              data: [200, 450, 330, 400, 270, 370],
            },
          ],
        },
        // Configuration options
        options: {
          borderColor: "#F3F6F8",
          borderWidth: 15,
          backgroundColor: "#F3F6F8",
          tooltips: {
            intersect: false,
            backgroundColor: "#F3F6F8",
            titleFontFamily: "Inter",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontFamily: "Inter",
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 10,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            ],
          },
        },
      });
      // =========== chart polarChart1 end

      // ================== chart polarChart1 start
      const ctxPieChart1 = document
        .getElementById("pieChart1")
        .getContext("2d");
      const pieChart1 = new Chart(ctxPieChart1, {
        // The type of chart we want to create
        type: "doughnut",
        // The data for our dataset
        data: {
          labels: ["Speed", "Reliability", "Safety", "Comport"],
          // Information about the dataset
          datasets: [
            {
              data: [10, 20, 25, 20],
              backgroundColor: ["#EB5757", "#F2C94C", "#219653", "#4A6CF7"],
            },
          ],
        },
        // Configuration options
        options: {
          cutoutPercentage: 60,
          borderColor: "#F3F6F8",
          borderWidth: 15,
          backgroundColor: "#F3F6F8",
          tooltips: {
            backgroundColor: "#F3F6F8",
            titleFontFamily: "Inter",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontFamily: "Inter",
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            bodyAlign: "center",
            titleAlign: "center",
            xPadding: 15,
            yPadding: 12,
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            ],
          },
        },
      });
      // =========== chart polarChart1 end

      // ================== chart polarChart1 start
      const ctxPolarChart1 = document
        .getElementById("polarChart1")
        .getContext("2d");
      const polarChart1 = new Chart(ctxPolarChart1, {
        // The type of chart we want to create
        type: "polarArea",
        // The data for our dataset
        data: {
          labels: ["Speed", "Reliability", "Safety", "Comport"],
          // Information about the dataset
          datasets: [
            {
              data: [15, 20, 25, 20],
              backgroundColor: ["#f2994a", "#d50100", "#4a6cf7", "#f7c800"],
            },
          ],
        },
        // Configuration options
        options: {
          tooltips: {
            intersect: false,
            backgroundColor: "#F3F6F8",
            bodyFontFamily: "Inter",
            titleFontFamily: "Inter",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            ],
          },
        },
      });
      // =========== chart polarChart1 end

      //============ doughnutChart1 start
      const doughnutChart1 = new ApexCharts(
        document.querySelector("#doughnutChart1"),
        (options = {
          series: [83, 67, 55, 44],
          chart: {
            height: 350,
            type: "radialBar",
            fontFamily: "Inter",
          },

          plotOptions: {
            radialBar: {
              dataLabels: {
                name: {
                  fontSize: "22px",
                },
                value: {
                  fontSize: "16px",
                },
                total: {
                  show: true,
                  label: "Total",
                  formatter: function (w) {
                    return 249;
                  },
                },
              },
              hollow: {
                size: "40%",
              },
              track: {
                strokeWidth: "100%",
                margin: 10,
              },
            },
          },
          stroke: {
            lineCap: "round",
          },
          labels: ["Desktop", "Tablet", "Mobile", "Others"],
          colors: ["#4a6cf7", "#f2994a", "#d50100", "#f7c800"],
        })
      );
      doughnutChart1.render();
      //============ doughnutChart1 end
    </script>
  </body>

<!-- Mirrored from demo.plainadmin.com/chart-js.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:19:39 GMT -->
</html>
