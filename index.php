<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-9">
    <title>Dashboard</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="asset/styles.css">
  </head>
  <body>
    <div class="container-fluid">
      <!-- START header -->
      <div class="row">
        <div class="col-md-9 text-left header">
          WEEKLY DASHBOARD
        </div>
        <div class="hidden-xs col-md-3 text left header header--nav">
          Received letter for award for Batang Lupar Project
        </div>
      </div>
      <!-- END header -->
      <!-- START body main -->
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-12 box">
              <div class="row">
                <div class="col-md-2 box__title box__title--orange">

                </div>
                <div class="col-md-10 box__title box__title--placeholder"></div>
              </div>
              <div class="row">
                <div class="col-md-3 cell">
                  <span>LOCAL STOCK</span>
                  <canvas id="local_stock" width="243" height="172"></canvas>
                </div>
                <div class="col-md-3 cell">
                  <span>IMPORTED STOCK</span>
                    <canvas id="imported_stock" width="243" height="172"></canvas>
                </div>
                <div class="col-md-6 cell">
                  <span>IMPORTED RICE</span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 box">
              <div class="row">
                <div class="col-md-2 box__title box__title--green">
                  SALES
                </div>
                <div class="col-md-10 box__title box__title--placeholder">YTD Total Sales: Slightly below plan due to unpredictable weather</div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  table
                </div>
                <div class="col-md-6">
                  table
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 box">
              <div class="row">
                <div class="col-md-2 box__title box__title--indigo">
                  PADDY PROCUREMENT
                </div>
                <div class="col-md-10 box__title box__title--placeholder">Private millers has started competing actively in the market due to the implementation of actual grading pemutuan sebenar</div>
              </div>
              <div class="row">
                <div class="col-md-3 cell">
                  <span>MARKET SHARE</span>
                  <canvas id="market_share" width="243" height="172"></canvas>
                </div>
                <div class="col-md-3 cell">
                  graph
                </div>
                <div class="col-md-6 cell">
                  table
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 box">
              <div class="row">
                <div class="col-md-2 box__title box__title--blue">
                  RICE STOCK POSITION
                </div>
                <div class="col-md-10 box__title box__title--placeholder">Trading stock (import + local) turnover is averaging at xx months [xx1K/one month sales (xxK MT)], is higher than the ideal position of x month</div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  table
                </div>
                <div class="col-md-6">
                  table
                </div>
              </div>
            </div>
          </div>
        </div>


      <!-- END body main -->
      <!-- START body nav -->
        <div class="hidden-xs col-md-3">
          <div class="row">
            <div class="col-md-12 minibox">
              <div class="row">
                <div class="col-md-12 box__title box__title--darkorange">
                  OPERATION KEY HIGHLIGHTS
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  table
                </div>
                <div class="col-md-6">
                  table
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 minibox">
              <div class="row">
                <div class="col-md-12 box__title box__title--darkorange">
                  REPORTABLE EVENTS
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  table
                </div>
                <div class="col-md-6">
                  table
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 minibox">
              <div class="row">
                <div class="col-md-12 box__title box__title--darkorange">
                  STAFF MATTERS
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  table
                </div>
                <div class="col-md-6">
                  table
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 minibox">
              <div class="row">
                <div class="col-md-12 box__title box__title--darkorange">
                  GOVERNMENT MEETING
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  table
                </div>
                <div class="col-md-6">
                  table
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 minibox">
              <div class="row">
                <div class="col-md-12 box__title box__title--darkorange">
                  GOVERNMENT OWING IN RM (Million)
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  table
                </div>
                <div class="col-md-6">
                  table
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 minibox">
              <div class="row">
                <div class="col-md-12 box__title box__title--darkorange">
                  FOREX
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  table
                </div>
                <div class="col-md-6">
                  table
                </div>
              </div>
            </div>
          </div>
        </div>


      <!-- END body nav -->
      </div>
    </div>
    <script src="node_modules/jquery/dist/jquery.js" charset="utf-9"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.js" charset="utf-9"></script>
    <script src="node_modules/chart.js/dist/Chart.js" charset="utf-8"></script>
    <script src="asset/chart.js" charset="utf-8"></script>
  </body>
</html>
