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
                  <table class="table-fancy">
                    <tr class="table-fancy__cell--blueBG">
                      <th class="table-fancy__cell--blueBG table-fancy__cell--whiteBG">Average Selling Price RM(K)/MT</th>
                      <th>2.15</th>
                      <th>3.8-4.0</th>
                      <th>3.75</th>
                      <th>4.0-5.8</th>
                      <th>3.7-6.0</th>
                      <th class="table-fancy__cell--darkBrownBG" style="border-bottom: 0;"></th>
                    </tr>
                    <tr class="table-fancy__cell--brownFont">
                      <th></th>
                      <th>White Rice</th>
                      <th>Fragrance</th>
                      <th>Glutinious</th>
                      <th>Basmati</th>
                      <th>Others</th>
                      <th class="table-fancy__cell--darkBrownBG" style="border-top:0;">Total</th>
                    </tr>
                    <tr class="table-fancy__cell--greyBG">
                      <td class="table-fancy__cell--whiteBG">Original Stock</td>
                      <td>170</td>
                      <td>17</td>
                      <td>4</td>
                      <td>9</td>
                      <td>2</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">278</td>
                    </tr>
                    <tr class="table-fancy__cell--greyBG">
                      <td class="table-fancy__cell--whiteBG">Received</td>
                      <td>47</td>
                      <td>6</td>
                      <td>2</td>
                      <td>1</td>
                      <td>2</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">22</td>
                    </tr>
                    <tr class="table-fancy__cell--greyBG">
                      <td class="table-fancy__cell--whiteBG">Actual Sales</td>
                      <td>25</td>
                      <td>13</td>
                      <td>2</td>
                      <td>1</td>
                      <td>1</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">49</td>
                    </tr>
                    <tr class="table-fancy__cell--redBG">
                      <td class="table-fancy__cell--whiteBG">Current Stock</td>
                      <td>192</td>
                      <td>10</td>
                      <td>5</td>
                      <td>9</td>
                      <td>3</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">309</td>
                    </tr>
                  </table>
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
                <div class="col-md-6 cell">
                  <span>OVERALL</span>
                  
                </div>
                <div class="col-md-6 cell">
                  <span>LOCK-IN</span>
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
                  <span>MILLING</span>
                  <table class="table-simple">
                    <tr>
                      <th></th>
                      <th>R1</th>
                      <th>R2</th>
                      <th>R3</th>
                      <th>R4</th>
                      <th>TOTAL</th>
                    </tr>
                    <tr>
                      <td>Paddy Milled</td>
                      <td>6</td>
                      <td>4</td>
                      <td>4</td>
                      <td>4</td>
                      <td>17</td>
                    </tr>
                    <tr>
                      <td>Paddy Milled</td>
                      <td>4</td>
                      <td>2</td>
                      <td>3</td>
                      <td>2</td>
                      <td>11</td>
                    </tr>
                    <tr>
                      <td>GRR (%)</td>
                      <td>66</td>
                      <td>65</td>
                      <td>63</td>
                      <td>67</td>
                      <td>65</td>
                    </tr>
                    <tr>
                      <td>SUMK Milled</td>
                      <td>7</td>
                      <td>2</td>
                      <td>-</td>
                      <td>2</td>
                      <td>11</td>
                    </tr>
                  </table>
                </div>
                <div class="col-md-6 cell">
                  <span>IMPORT RICE PROCUREMENT</span>
                  <table class="table-fancy">
                    <tr class="table-fancy__cell--blueBG">
                      <th class="table-fancy__cell--blueBG table-fancy__cell--whiteBG">Plan Import 2016</th>
                      <th>369</th>
                      <th>65</th>
                      <th>15</th>
                      <th>12</th>
                      <th>18</th>
                      <th class="table-fancy__cell--brownFont table-fancy__cell--brownBG">479</th>
                    </tr>
                    <tr class="table-fancy__cell--brownFont">
                      <th></th>
                      <th>White Rice</th>
                      <th>Fragrance</th>
                      <th>Glutinious</th>
                      <th>Basmati</th>
                      <th>Others</th>
                      <th class="table-fancy__cell--darkBrownBG" style="border-top:0;">Total</th>
                    </tr>
                    <tr class="table-fancy__cell--greyBG">
                      <td class="table-fancy__cell--whiteBG">Contracted 2015</td>
                      <td>129</td>
                      <td>9</td>
                      <td>0</td>
                      <td>2</td>
                      <td>1</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">137</td>
                    </tr>
                    <tr class="table-fancy__cell--greyBG">
                      <td class="table-fancy__cell--whiteBG">Contracted 2016</td>
                      <td>11</td>
                      <td>8</td>
                      <td>0</td>
                      <td>1</td>
                      <td>2</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">22</td>
                    </tr>
                    <tr class="table-fancy__cell--greyBG">
                      <td class="table-fancy__cell--whiteBG">Received</td>
                      <td>47</td>
                      <td>6</td>
                      <td>2</td>
                      <td>1</td>
                      <td>2</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">57</td>
                    </tr>
                    <tr class="table-fancy__cell--redBG">
                      <td class="table-fancy__cell--whiteBG">Balance To Buy</td>
                      <td>233</td>
                      <td>48</td>
                      <td>14</td>
                      <td>3</td>
                      <td>5</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">304</td>
                    </tr>
                  </table>
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
                <div class="col-md-6 cell">
                  <span>TOTAL RICE STOCK POSITION</span>
                  <table class="table-fancy">
                    <tr class="table-fancy__cell--blueBG">
                      <th class="table-fancy__cell--blueBG table-fancy__cell--whiteBG">Current Stock</th>
                      <th>91</th>
                      <th>113</th>
                      <th>51</th>
                      <th>27</th>
                      <th>10</th>
                      <th>16</th>
                      <th class="table-fancy__cell--brownFont table-fancy__cell--brownBG">309</th>
                    </tr>
                    <tr>
                      <th></th>
                      <th colspan="3" style="text-decoration:underline;">IWR</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                    <tr class="table-fancy__cell--brownFont">
                      <th></th>
                      <th>Local Rice</th>
                      <th>Peninsular</th>
                      <th>Sabah</th>
                      <th>Sarawak</th>
                      <th>Fragrance</th>
                      <th>Others</th>
                      <th class="table-fancy__cell--darkBrownBG" style="border-top:0;">Total</th>
                    </tr>
                    <tr class="table-fancy__cell--greyBG">
                      <td class="table-fancy__cell--whiteBG">YTD Stockpile</td>
                      <td>0</td>
                      <td>76</td>
                      <td>26</td>
                      <td>17</td>
                      <td>0</td>
                      <td>0</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">118</td>
                    </tr>
                    <tr class="table-fancy__cell--greyBG">
                      <td class="table-fancy__cell--whiteBG">Trading Stock</td>
                      <td>91</td>
                      <td>38</td>
                      <td>25</td>
                      <td>10</td>
                      <td>10</td>
                      <td>16</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">191</td>
                    </tr>
                    <tr class="table-fancy__cell--redBG">
                      <td class="table-fancy__cell--whiteBG">Stock Turnover</td>
                      <td>2.5</td>
                      <td>2.4</td>
                      <td>2.8</td>
                      <td>1.7</td>
                      <td>1.7</td>
                      <td>4.0</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">1.6</td>
                    </tr>
                  </table>

                </div>
                <div class="col-md-6 cell">
                  <span>IWR STOCK AGING</span>
                  <table class="table-fancy">
                    <tr class="table-fancy__cell--brownFont">
                      <th></th>
                      <th>Peninsular</th>
                      <th>Sabah</th>
                      <th>Sarawak</th>
                      <th>TOTAL</th>
                      <th class="table-fancy__cell--darkBrownBG" style="border-top:0;">% Over Total IWR Stock</th>
                    </tr>
                    <tr class="table-fancy__cell--greyBG">
                      <td class="table-fancy__cell--whiteBG">&#60; 6 Months</td>
                      <td>93.0</td>
                      <td>79.0</td>
                      <td>46.0</td>
                      <td>218.0</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">114.0%</td>
                    </tr>
                    <tr class="table-fancy__cell--greyBG">
                      <td class="table-fancy__cell--whiteBG">7-8 Months</td>
                      <td>17.0</td>
                      <td>23.0</td>
                      <td>4.0</td>
                      <td>44.0</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">23.0%</td>
                    </tr>
                    <tr class="table-fancy__cell--greyBG">
                      <td class="table-fancy__cell--whiteBG">9-12 Months</td>
                      <td>5.0</td>
                      <td>1.0</td>
                      <td>0.0</td>
                      <td>6.0</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">3.0%</td>
                    </tr>
                    <tr class="table-fancy__cell--redBG">
                      <td class="table-fancy__cell--whiteBG">&#62; 12 Months</td>
                      <td>2.9</td>
                      <td>0.2</td>
                      <td>0.0</td>
                      <td>3.1</td>
                      <td class="table-fancy__cell--brownBG table-fancy__cell--brownFont">2.0%</td>
                    </tr>
                  </table>
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
