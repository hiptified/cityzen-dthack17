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
    $descriptionText = $row['Description'];
    $imageLink= $row['ImageLink'];
}
echo $dbcontext->error;

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Asap|Open+Sans+Condensed:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/cityzen.css" />
<div class="bildContainer" style="background-image: url('<?php echo $imageLink ?>');">
  <div class="headerContainer">
    <div class="subjectText">
        <h1><?php echo $subjectText; ?></h1>
    </div>
    <div class="voteNowButton" id="voteNowButton">
      Jetzt abstimmen
    </div>

  </div>
</div>
<div class="aboutLink"><a href="about.php">Erfahre mehr über CityZEN</a></div>
<div class="descriptionText">
    <?php echo $descriptionText ?>
</div>

<div id="vote" class="vote">

  <?php
  $sql = "SELECT * FROM VotingOption WHERE SubjectId=".$subjectId.";";
  $data=mysqli_query($dbcontext,$sql);
  /*echo mysqli_num_rows($data);*/
 echo "<fieldset>";
  while($row=mysqli_fetch_array($data)){
      $VotingText = $row['VotingText'];
      $VotingOptionId = $row['VotingOptionId'];
      echo "<input type='radio' name='voting' value='".$VotingText."'/>".$VotingText."<br/>";
  }
echo "</fieldset>";
   ?>

<form action="thankyou.php">
    <input type="submit" id="SendButton" value="Stimme abgeben" class="sendButton"/>
    <?php echo "<input type='hidden' name='id' value='".$subjectId."'/>" ?>
</form>
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
$("#voteNowButton").click(function() {
    $('html, body').animate({
        scrollTop: $("#vote").offset().top
    }, 1000);
});

function sendButton()
{
  alert('test');
}


</script>
