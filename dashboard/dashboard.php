<?php
    include "header.php";
 ?>

      <!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">

            <!-- Pie Chart-->
            <div class="col-lg-6 ">
              <div class="card project-progress">
                <h2 class="display h4">Total Book Reports</h2>

                <div class="pie-chart">
                  <canvas id="pieChart" width="300" height="300"> </canvas>
                </div>
              </div>
            </div>


            <!-- Line Chart -->
            <div class="col-lg-6  flex-lg-last flex-md-first align-self-baseline">
              <div class="card sales-report">
                <h2 class="display h4">Yearly Book Reports</h2>
                <p>Yearly report of Issued Books vs New Arrivals</p>
                <div class="line-chart">
                  <canvas id="lineCahrt"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Statistics Section-->
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-4">
              <!-- Income-->
              <div class="card income text-center">
                <div class="icon"><i class="icon-line-chart"></i></div>
                <div class="number">1418</div><strong class="text-primary">New Book Arrivals</strong>

              </div>
            </div>
            <div class="col-lg-4">
              <!-- Monthly Usage-->
              <div class="card data-usage">
                <h2 class="display h4">Monthly Issue</h2>
                <div class="row d-flex align-items-center">
                  <div class="col-sm-6">
                    <div id="progress-circle" class="d-flex align-items-center justify-content-center"></div>
                  </div>
                  <div class="col-sm-6"><span>Books are issued This Month</span></div>
                </div>

              </div>
            </div>
            <div class="col-lg-4">
              <!-- User Actibity-->
              <div class="card user-activity">
                <h2 class="display h4">Student Activity</h2>
                <div class="number">210</div>
                <h3 class="h4 display">Registered Users</h3>
                <div class="progress">
                  <div role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar bg-primary"></div>
                </div>
                <div class="page-statistics d-flex justify-content-between">
                  <div class="page-statistics-left"><span>This Year Registered</span><strong>2300</strong></div>
                  <div class="page-statistics-right"><span>This Month Registered</span><strong>43.4%</strong></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

     <?php 
         include "footer.php";
        ?>