<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2017.3.913/js/kendo.all.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Asap|Open+Sans+Condensed:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="styles/cityzen.css" />


<div class="bildContainerAbout" style="background-image: url('images/bonn-209505_smol.jpg');">
  <div class="overlayContainerAbout">
    <div class="subjectText">
        <img src="images/logo_big.png" style="height:200px; padding:5.2vh;"/>
        <p class="slogan">Deine Stadt, Deine Wahl</p>
    </div>
  </div>
</div>

<div class="about">
<h3>Über <img src="images/logo.png"/></h3>
<p>
  CityZEN ist eine Initiative der Stadt, um jeden einzelnem Bürger und jeder einzelnen Bürgerin mehr Mitwirkungsmöglichkeit in der Stadt zu bieten – sodass es nicht nur irgendeine Stadt ist, sondern Deine Stadt. Ob es nun die Errichtung einer neuen Parkbank, die mögliche Schließung eines Hallenbades oder das weitere Verfahren mit einem alten Gebäude, wir möchten Deine Meinung hören!
Es gibt zwei Möglichkeiten an einer Abstimmung teilzunehmen: Entweder Du bekommst einen Link zu der Frage zugesendet oder du befindest dich in unmittelbarer Nähe eines Beacons. Dann bekommst du kostenlos eine Nachricht auf dein Handy geschickt, sofern Du Deine Bluetooth-Verbindung aktiviert hast. Diese bringt Dich zu unserem Webportal und zu der Abstimmung. Deine Stimme wird anonym in eine Blockchain aufgenommen und ist damit gegen Manipulation gesichert.
</p>
</div>
<div class="footer">
  <img src="images/logo.png" class="logo"/>
<p><a href="About">Über CityZEN</a></p>
<p>
  <a href="Impressum">Impressum</a>
  <br/>
  <a href="Datenschutz">Datenschutzerklärung</a>
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
  });
  </script>
