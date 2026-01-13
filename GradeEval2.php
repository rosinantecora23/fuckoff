<!DOCTYPE html>
<html>
	<head>
		<title>Grade Evaluation2</title>
	</head>
	<body>
		
		<?php
			$name = $program = $stnum = $grade = "";
			$name = $_POST["name"];
			$program = $_POST["program"];
			$stnum = $_POST["stnum"];
			$grade = $_POST["grade"];
			$remarks = "";
			$pointBase = 0;
			$imageName = "smile.jpg";
			$imageName1 = "sad.jpg";
			
			
			
			if($grade >= 98 && $grade <= 100){
				$remarks = "Excellent";
				$pointBase = 1.0;
			}
			else if($grade >= 95 && $grade <= 97){
				$remarks = "Perfect";
				$pointBase = 1.5;
			}
			else if($grade >= 90 && $grade <= 94){
				$remarks = "Very Good";
				$pointBase = 1.75;
			}
			else if($grade >= 85 && $grade <= 89){
				$remarks = "Good";
				$pointBase = 2.0;
			}
			else if($grade >= 75 && $grade <= 84){
				$remarks = "Passed";
				$pointBase = 3.0;
			}
			else if($grade >=50  && $grade <= 74){
				$remarks = "Failed";
				$pointBase = 5.0;
			}
			else if($grade >= 0 && $grade <= 49){
				$remarks = "Grade Undefine";
			}
			
			echo "Hi, $name with number $stnum of $program. Your Grade is $grade equivalent to $pointBase";
			echo "<br>";
			if($grade >= 75 && $grade <= 100){
				echo "<img src='$imageName' style='width:300px;height:200px;'>";
			}
			else{
				echo "<img src='$imageName1' style='width:300px;height:200px;'>";
			}
			
			
				
			
		?> 
			

	</body>
</html>
