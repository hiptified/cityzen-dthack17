<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2017.3.913/js/kendo.all.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Asap|Open+Sans+Condensed:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="styles/cityzen.css" />

<?php
$servername = "localhost";
$username = "bhesse_db3";
$password = "#DThack17";
$databasename= "bhesse_db3";

$dbcontext = mysqli_connect($servername, $username, $password, $databasename);
if ($mysqli->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}

$subjectId = $_GET['id'];
$sql = "SELECT * FROM Subject WHERE SubjectId=".$subjectId.";";
$data=mysqli_query($dbcontext,$sql);
/*echo mysqli_num_rows($data);*/

while($row=mysqli_fetch_array($data)){
    $subjectText = $row['Subject'];
    $imageLink= $row['ImageLink'];
}
echo $dbcontext->error;
?>




<div class="bildContainer" style="background-image: url('<?php echo $imageLink ?>');">
  <div class="headerContainer">
    <div class="subjectText">
        <h1>Vielen Dank für Deine Stimme!</h1>
        <div class="showResultsButton" id="showResultsButton">
          Ergebnisse anzeigen
        </div>
    </div>
  </div>
</div>

<div id="results" class="results">
  <div id="chart"></div>


</div>
<div class="footer">
  <img src="images/logo.png" class="logo"/>
<p><a href="about.php">Über CityZEN</a></p>
<p>
  <a href="#">Impressum</a>
  <br/>
  <a href="#">Datenschutzerklärung</a>
</p>
<div class="copyright">&copy; 2017 Team CityZEN</div>
</div>



<script type="text/javascript">
function createChart() {
  var chartData = [ {
                "group": "Stimmen",
                "value": 76,
                "userColor": "#20bf55"
            }, {
                "group": "Stimmen",
                "value": 23,
                "userColor": "#0b4f6c"
            }, {
                "group": "Stimmen",
                "value": 6,
                "userColor": "#01babf"
            }];


	            $("#chart").kendoChart({
                dataSource: {
                    data: chartData
                },

                chartArea: {
                    width: 700,
                    height: 900
                },
	                title: {
	                    text: "Diese Fläche ist frei. \nSoll hier eine Parkbank stehen?",
                        font: "3vh 'Open Sans Condensed',Helvetica,sans-serif",
	                },
	                legend: {
	                    visible: false
	                },
	                seriesDefaults: {
	                    type: "bar",
                      labels: {
                       visible: true,
                       background: "transparent",
                       format: "{0}%",
                       font: "2vh Asap, Helvetica, sans-serif",
                       spacing:0
                    }
	                },
	                series: [{
                      field: "value",
                      categorieField: "group",
                      colorField: "userColor",
                      labels: {
                        font: "2vh Asap,Helvetica,sans-serif",
                      }

	                    /*name: "Stimmen",
	                    data: [71, 23, 6]*/
	                }],
	                valueAxis: {
	                    max: 100,
                      visible:false,
	                    line: {
	                        visible: false
	                    },
	                    minorGridLines: {
	                        visible: false
	                    },
                      majorGridLines: {
                        visible:false
                      },
	                    labels: {
	                         format: "{0}%",
                           font: "2vh Asap,Helvetica,sans-serif"
	                    }
	                },
	                categoryAxis: {
	                    categories: ["Ja","Nein","Keine Meinung"],
	                    majorGridLines: {
	                        visible: false
	                    },
                      minorGridLines: {
                        visible:false
                      },
                      labels: {
                        font: "2vh Asap,Helvetica,sans-serif"
                      }

	                },
	                tooltip: {
	                    visible: false,
	                    template: "#= series.name #: #= value #"
	                }

	            });
	        }

          createChart();

  </script>

  <script type="text/javascript">
  $("#showResultsButton").click(function() {
      $('html, body').animate({
          scrollTop: $("#results").offset().top
      }, 1000);
      window.setTimeout(refreshChart , 1000 );
  });
  function refreshChart() {

  $('#chart').data().kendoChart.refresh();
}
  </script>
