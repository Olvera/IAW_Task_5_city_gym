<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CITY GYM</title>
		<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
		<meta name="description" content="IAW 5 Task - 2º ASIR">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel='stylesheet' media='screen and (min-width: 961px)' href='css/d.css'>
		<link rel='stylesheet' media='screen and (max-width: 960px)' href='css/m.css'>
		<script src="js/city_gym.js"></script>
	</head>

<body>
	<!--Logo and header-->
	<div id="homeDiv">
		<br/>
		<img src="img/city_logo.jpg" alt="Citiy Gym logo">
		<div>
			<h2><b><i>* CITY GYM *</i></b></h2>
			<h3><b><i>¡ Mens sana in corpore sano !<br/><br/>
			Centro Deportivo City Gym - Palacio de los deportes - 08002 Madrid<br/></i></b></h3>
		</div>
	</div>
	<!--Main menu-->
<div class="topnav" id="myTopnav">
	<a class="active" href="home.html"><b>Home</b></a>
	<a href="city_gym.html"><b>Join us</b></a>
	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

	<img class="pub" src="img/pub.jpg" alt="publ">
	<img id="i2" src="img/city_img2.jpg" alt="Image 2">
	<img class="pub" src="img/pub.jpg" alt="publ">
	<img id="i3" src="img/city_img3.jpg" alt="Image 3">
	<img class="pub" src="img/pub.jpg" alt="publ">
<!--Main menu-->
<main>
	<div id="results">
		<!--PHP code-->
		<?php 
		//Initializes global variable where add and store the amounts of the options selected
		$total=0;
			//Gets the text of the text input fields
			echo "<table><tr><th colspan='3'><br/>Welcome, ".$_POST['fnom']." ".$_POST['snom'].".&ensp;Ready to join us?<br/><br/></th></tr>";
			//Gets the selection of the radio input butons
			echo "<tr><td>&emsp;<b>Your selected level: </b><br/></td><td>";
			if (isset($_POST['level'])){	//Checks if some options is selected
				echo "&emsp;".$_POST['level']."<br/></td><td style='text-align:right'>";//Prints the option
				switch ($_POST['level'])	//Choose the amount of the selected option
					{
						case 'Beginner':
							echo "&emsp;<b>".$_POST['amount'][0]."</b>&emsp;€/month&emsp;<br/>";
							$total+=$_POST['amount'][0];	//Adds amount
							break;
						case 'Fitness':
							echo "&emsp;<b>".$_POST['amount'][1]."</b>&emsp;€/month&emsp;<br/>";
							$total+=$_POST['amount'][1];
							break;
						case 'Advanced':
							echo "&emsp;<b>".$_POST['amount'][2]."</b>&emsp;€/month&emsp;<br/>";
							$total+=$_POST['amount'][2];
							break;
						case 'Pro':
							echo "&emsp;<b>".$_POST['amount'][3]."</b>&emsp;€/month&emsp;<br/>";
							$total+=$_POST['amount'][3];
							break;

						default:
							# code...
							break;
					}
			}
			//If no option selected, shows that it's no any selected an 0€ of amount
			else echo "&emsp;No level selected.&emsp;</td><td style='text-align:right'>&emsp;<b>0</b>&emsp;€/month&emsp;</td></tr>";
			//Checks and gets the seleccion of the checkbox input butons and prints thoose that are selected
			echo "<tr><td>&emsp;<b>Your selected services:  </b></td><td>";
			if (isset($_POST['sel1']))
			echo "&emsp;".$_POST['sel1']. "&emsp;<br>";
			if (isset($_POST['sel2']))
			echo "&emsp;".$_POST['sel2']. "&emsp;<br>";
			if (isset($_POST['sel3']))
			echo "&emsp;".$_POST['sel3']. "&emsp;<br>";
			//If no option selected, shows that it's no any selected
			if (!isset($_POST['sel1'])&&!isset($_POST['sel2'])&&!isset($_POST['sel3'])) {
				echo"&emsp;No service selected.&emsp;";
			}
			//Checks and gets the amount of the selected checkbox options
			echo "</td><td style='text-align:right'>";
			if (isset($_POST['sel1'])){
			echo "<b>".$_POST['pri1']. "</b>&emsp;€/month&emsp;<br>";
			$total+=$_POST['pri1'];	//Adds amount
			}
			if (isset($_POST['sel2'])){
			echo "<b>".$_POST['pri2']. "</b>&emsp;€/month&emsp;<br>";
			$total+=$_POST['pri2'];
			}
			if (isset($_POST['sel3'])){
			echo "<b>".$_POST['pri3']. "</b>&emsp;€/month&emsp;<br>";
			$total+=$_POST['pri3'];
			}
			//If no any selected, shows 0€ of amount
			if (!isset($_POST['sel1'])&&!isset($_POST['sel2'])&&!isset($_POST['sel3'])) {
				echo"&emsp;<b>0</b>&emsp;€/month&emsp;";
			}
			echo "</td></tr>";
			//Checks and gets the seleccion of the multiple select and prints thoose that are selected
			echo "<tr><td>&emsp;<b>Selected trainning classes:</b>&emsp;</td><td>";
			if (isset($_POST['clas']))
				{
				for ($i=0;$i<count($_POST['clas']);$i++)
					{
					echo "&emsp;".$_POST['clas'][$i]."&emsp;<br/>";
				}
			echo "</td>";
			}
			elseif (!isset($_POST['clas']))	//If no option selected, shows that it's no any selected

				{ 
				echo "&emsp;No class selected.&emsp;</td>";
			}
			//Checks and gets the amount of the seleccion and prints each amount
			echo "<td style='text-align:right'>";
			if (isset($_POST['clas']))
				{
				for ($i=0;$i<count($_POST['clas']);$i++)
				{
					switch ($_POST['clas'][$i])
					{
						case 'Spinning':
							echo "&emsp;<b>".$_POST['pr'][0]."</b>&emsp;€/month&emsp;<br/>";
							$total+=$_POST['pr'][0];	//Adds amount
							break;
						case 'Cardio dance':
							echo "&emsp;<b>".$_POST['pr'][1]."</b>&emsp;€/month&emsp;<br/>";
							$total+=$_POST['pr'][1];
							break;
						case 'Strength workout':
							echo "&emsp;<b>".$_POST['pr'][2]."</b>&emsp;€/month&emsp;<br/>";
							$total+=$_POST['pr'][2];
							break;
						case 'Competition training':
							echo "&emsp;<b>".$_POST['pr'][3]."</b>&emsp;€/month&emsp;<br/>";
							$total+=$_POST['pr'][3];
							break;

						default:
							# code...
							break;
					}
				}
			}
			//If no any selected, shows 0€ of amount
			if (!isset($_POST['clas']))
				{ 
				echo "&emsp;<b>0</b>&emsp;€/month&emsp;<br/>";
			}
			//Presents the name and the total amount of the customer choice
			echo "</td></tr><br/>";
			echo "<br/><tr><th colspan='2'><br/>Total amount of <i>".$_POST['fnom']." ".$_POST['snom']."</i> enrollment:<br/><br/></th><td style=text-align:right>&emsp;<b>&emsp;".$total."</b>&emsp;€/month&emsp;</td></tr><br/></table><br/><br/>";
		?>
		<!--Submit buton to send the collected data. Actually, to nowhere, just open the home page-->
		<input type="submit" id="button" onclick="location.href='home.html'"value="Next step"><br/>
	</div>
</main>

<br/><br/><br/><br/><br/>
<!--Authoring, date an contact-->
<footer>
	<address>
		<p>Created by: Fco. Javier Olvera Martínez - <small>February 2018</small></p>
		<p>2º ASIX - IAW - UT 5</p>
		<a href="mailto:f.j.olvera@gmail.com">Contact email</a>
	</address>
</footer>

<p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="¡CSS Válido!" />
    </a>
</p>
</body>
</html>
