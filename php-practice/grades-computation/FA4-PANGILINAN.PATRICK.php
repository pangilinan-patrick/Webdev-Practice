<!DOCTYPE html>
<html>
	<head>
		<title>FA 4 - Pangilinan, Patrick</title>
		<link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<!-- Body -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<body>
		<form method="POST" action="FA4-PANGILINAN.PATRICK.php">
		<table>
					<script>
						$(document).ready(function () { 
						    var cookies = document.cookie.split(";")
						    var cookiePair = cookies[0].split("=");
						    
							createCookie("midG", computeMidG(), "2");
							createCookie("standMT", computeStandingMT(), "2");
							createCookie("mtpercent", computeMTPercent(), "2");
						    createCookie("averageQ", computeAverageQ(), "2");
						    createCookie("average", computeAverage(), "2"); 
						}); 

						$(document).ready(function () { 
						    var cookies = document.cookie.split(";")
						    var cookiePair = cookies[0].split("=");
						    
							createCookie("meFPer", computeFPer(), "2");
						    createCookie("standF", computeStandF(), "2");
						    createCookie("fGrade", computeFGrade(), "2");
						    createCookie("fCourseGrade", computeFCourseGrade(), "2");
						    createCookie("averageF", computeAveF(), "2"); 
						    createCookie("averageQF", computeAveQF(), "2");
						}); 
							

						// Function to create the cookie 
						function createCookie(name, value, days) { 
						    var expires; 

						    if (days) { 
						        var date = new Date(); 
						        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
						        expires = "; expires=" + date.toGMTString(); 
						    } 

						    else { 
						        expires = ""; 
						    } 

						    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/"; 
						} 
					</script>

					<?php 
						if(!empty($_POST))  
					    {

					    	$sNumber = $_POST['studentNumber'];  
					        $sCode = $_POST['studentCode'];  

					        $x1 = $_POST['X1'];  
					        $x2 = $_POST['X2'];  
					        $x3 = $_POST['X3'];
							$ave = isset($_COOKIE['average'])? $_COOKIE['average']:'error please try again';

					        $q1 = $_POST['Q1'];  
					        $q2 = $_POST['Q2'];  
					        $q3 = $_POST['Q3'];
					        $aveQ = isset($_COOKIE['averageQ'])? $_COOKIE['averageQ']:'error please try again';

					        $meMT = $_POST['majorExamMT'];
					        $meMTPercent = isset($_COOKIE['mtpercent'])? $_COOKIE['mtpercent']:'error please try again';

					        $aGMT = $_POST['attendanceGradeMT'];  
					        $vABMT = $_POST['valuesAndBehaviorMT'];
					        $standingMT = isset($_COOKIE['standMT'])? $_COOKIE['standMT']:'error please try again';

					        $midtermGrade = isset($_COOKIE['midG'])? $_COOKIE['midG']:'error please try again';

							$x1f = $_POST['X1F'];  
					        $x2f = $_POST['X2F'];  
					        $x3f = $_POST['X3F'];  
					        $avef = isset($_COOKIE['averageF'])? $_COOKIE['averageF']:'error please try again';

					        $q1f = $_POST['Q1F'];  
					        $q2f = $_POST['Q2F'];  
					        $q3f = $_POST['Q3F'];
					        $aveQF = isset($_COOKIE['averageQF'])? $_COOKIE['averageQF']:'error please try again';

					        $meF = $_POST['majorExamF'];
					        $meFPercent = isset($_COOKIE['meFPer'])? $_COOKIE['meFPer']:'error please try again';

					        $aGFin = $_POST['attendanceGradeFin'];  
					        $vABFin = $_POST['valuesAndBehaviorFin'];
					        $standingF = isset($_COOKIE['standF'])? $_COOKIE['standF']:'error please try again';

					        $finalGrade = isset($_COOKIE['fGrade'])? $_COOKIE['fGrade']:'error please try again';

					        $finalCourseGrade = isset($_COOKIE['fCourseGrade'])? $_COOKIE['fCourseGrade']:'error please try again';
					    }

					    else {
					    	$ave = '0';
					    	$aveQ = '0';

					    	$sNumber = '';
					    	$sCode = '';

					    	$x1 ='';
					    	$x2 ='';
					    	$x3 ='';

					    	$q1 ='';
					    	$q2 ='';
					    	$q3 ='';

					    	$aGMT ='';
					    	$vABMT = '';

					    	$standingMT = '0';
					    	$meMTPercent = '0';
					    	$midtermGrade = '0';
					    	$meMT ='';

					    	$avef = '0';
					    	$aveQF = '0';

					    	$x1f ='';
					    	$x2f ='';
					    	$x3f ='';

					    	$q1f ='';
					    	$q2f ='';
					    	$q3f ='';

					    	$aGFin ='';
					    	$vABFin = '';

					    	$standingF = '0';
					    	$meFPercent = '0';
					    	$finalGrade = '0';
					    	$finalCourseGrade='0';
					    	$meF ='';
					    }
					?>

					<script>
						function computeAverage() {
							var ave = (<?php echo $x1; ?> + <?php echo $x2; ?> + <?php echo $x3; ?>) / 3;
							return ave;
						}

						function computeMTPercent() {
							var mtPercent = ((<?php echo $meMT; ?>) / 100) * 50 + 50;
							return mtPercent;
						}

						function computeAverageQ() {
							var aveQ = (<?php echo $q1; ?> + <?php echo $q2; ?> + <?php echo $q3; ?>) / 3;
							return aveQ;
						}

						function computeStandingMT() {
							var standingMT = (<?php echo $aGMT; ?>* .10) + (<?php echo $vABMT; ?> *.10) + (<?php echo $ave; ?>* .80);
							return standingMT;
						}

						function computeMidG() {
							var midG = ((<?php echo $standingMT; ?>) / 3) + ((<?php echo $aveQ; ?>) / 3) + ((<?php echo $meMTPercent; ?>) / 3);
							return midG;
						}
					</script>

					<script>
						function computeFPer() {
							var Fper = ((<?php echo $meFPercent; ?>) / 100) * 50 + 50;
							return Fper;
						}

						function computeStandF() {
							var standingF = (<?php echo $aGFin; ?>* .10) + (<?php echo $vABFin; ?> *.10) + (<?php echo $avef; ?>* .80);
							return standingF;
						}

						function computeFGrade() {
							var fGrade = ((<?php echo $standingF; ?>) / 3) + ((<?php echo $aveQF; ?>) / 3) + ((<?php echo $meFPercent; ?>) / 3);
							return fGrade;
						}

						function computeFCourseGrade {
							var FCourseGrade = ((<?php echo $midtermGrade; ?>) / 3) + ((<?php echo $finalGrade; ?> * 2) / 3);

							return FCourseGrade;
						}

						function computeAveF() {
							var aveF = (<?php echo $x1f; ?> + <?php echo $x2f; ?> + <?php echo $x3f; ?>) / 3;
							return aveF;
						}

						function computeAveQF() {
							var aveQF = (<?php echo $q1f; ?> + <?php echo $q2f; ?> + <?php echo $q3f; ?>) / 3;
							return aveQF;
						}
					</script>
			<tr>
				<td colspan="2">
    					Student Number: <input type="text" name="studentNumber" value="<?=$sNumber?>" required/><br/>
    					Subject Code: <input type="text" name="studentCode" value="<?=$sCode?>" required/>
				</td>
			</tr>

			<tr>
				<td>
					Midterm Details<br/>
    					Attendance Grade: <input type="text" name="attendanceGradeMT" value="<?=$aGMT?>" required/><br/>
    					Values and behavior: <input type="text" name="valuesAndBehaviorMT" value="<?=$vABMT?>" required/><br/>

					Exercises<br/>
					X1:&nbsp;X2:&nbsp;X3:&nbsp;&nbsp;&nbsp;Average:<br/>
					<input class="xqinput" type="text" name="X1" value="<?=$x1?>" required/>&nbsp;&nbsp;<input class="xqinput" type="text" name="X2" value="<?=$x2?>" required/>&nbsp;&nbsp;<input class="xqinput" type="text" name="X3" value="<?=$x3?>" required/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<input class="xqinput" type="text" name="averageExeMT" value="<?php echo $ave; ?>" readonly/><br/><br/>

					Quizzes<br/>
					Q1:&nbsp;Q2:&nbsp;Q3:&nbsp;&nbsp;&nbsp;Average:<br/>
					<input class="xqinput" type="text" name="Q1" value="<?=$q1?>" required/>&nbsp;&nbsp;<input class="xqinput" type="text" name="Q2" value="<?=$q2?>" required/>&nbsp;&nbsp;<input class="xqinput" type="text" name="Q3" value="<?=$q3?>" required/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<input class="xqinput" type="text" name="averageQuizMT" value="<?php echo $aveQ; ?>" readonly/><br/><br/>

					Class Standing&nbsp;<input class="xqinput" type="text" name="classStandingMT" value="<?php echo $standingMT; ?>" readonly/><br/><br/>
					Major Exam: <input class="xqinput" type="text" name="majorExamMT" value="<?=$meMT?>" required/>&nbsp;&nbsp;&nbsp;% of major exam:<input class="xqinput" type="text" name="percentMT" value="<?php echo $meMTPercent;?>" readonly/><br/><br/>

					Midterm grade&nbsp;&nbsp;<input class="xqinput" type="text" name="midtermGrade" value="<?=$midtermGrade?>" readonly/>
				</td>

				<td>
					FinalDetails<br/>
    					Attendance Grade: <input type="text" name="attendanceGradeFin" value="<?=$aGFin?>" required/><br/>
    					Values and behavior: <input type="text" name="valuesAndBehaviorFin" value="<?=$vABFin?>" required/><br/>

					Exercises<br/>
					X1:&nbsp;X2:&nbsp;X3:&nbsp;&nbsp;&nbsp;Average:<br/>
					<input class="xqinput" type="text" name="X1F" value="<?=$x1f?>" required/>&nbsp;&nbsp;<input class="xqinput" type="text" name="X2F" value="<?=$x2f?>" required/>&nbsp;&nbsp;<input class="xqinput" type="text" name="X3F" value="<?=$x3f?>" required/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<input class="xqinput" type="text" name="averageExeF" value="<?php echo $avef; ?>" readonly/><br/><br/>

					Quizzes<br/>
					Q1:&nbsp;Q2:&nbsp;Q3:&nbsp;&nbsp;&nbsp;Average:<br/>
					<input class="xqinput" type="text" name="Q1F" value="<?=$q1f?>" required/>&nbsp;&nbsp;<input class="xqinput" type="text" name="Q2F" value="<?=$q2f?>" required/>&nbsp;&nbsp;<input class="xqinput" type="text" name="Q3F" value="<?=$q3f?>" required/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<input class="xqinput" type="text" name="averageQuizFin" value="<?php echo $aveQF; ?>" readonly/><br/><br/>

					Class Standing&nbsp;<input class="xqinput" type="text" name="classStandingF" value="<?php echo $standingF; ?>" readonly/><br/><br/>
					Major Exam: <input class="xqinput" type="text" name="majorExamF" value="<?=$meF?>" required/>&nbsp;&nbsp;&nbsp;% of major exam:<input class="xqinput" type="text" name="percentF" value="<?php echo $meFPercent;?>" readonly/><br/><br/>

					Final grade&nbsp;&nbsp;<input class="xqinput" type="text" name="finalGrade" value="<?=$finalGrade?>" readonly/>
				</td>
			</tr>

			<tr>
				<td align="center" colspan="2">
					Final Course Grade:<input class="xqinput" type="text" name="finalCourseGrade" value="<?=$finalCourseGrade?>" readonly/><br/>
					<button type="submit" name="compute">Compute</button>
				</td>
			</tr>
		</table>
		</form>
	</body>
	
</html>