<!-- 
	This Program contains answer to the question number 4,5,6,8,11,14
-->
<!DOCTYPE html>
<html>
<head>
	<title>Reverse Of String</title>
</head>
<body>
	<form method="post">
		<input type="text" name="string">
		<input type="submit" name="reset" value="Reset">
		<input type="submit" name="submit" value="Reverse String">
		<input type="submit" name="lowerCase" value="Check Lower Case">
		<input type="submit" name="palindrome" value="Check Palindrome">
		<input type="submit" name="removeSpace" value="Remove White Spaces">
		<br>
		<br>

		<h3>String Within a String</h3>
		<p>Enter Main String : <input type="text" name="mainString"><br></p>
		<p>String you want to find : <input type="text" name="findString"> </p>
		<input type="submit" name="stringInString" value="Check if String Contains another String">
		
		<h3>E-Mail Test</h3>
		<p>Enter e-mail address : <input type="main" name="email"><br></p>
		<input type="submit" name="emailValidity" value="Check validity of given e-mail">

	</form>
	<h1>OUTPUT ... </h1>
</body>
</html>
<?php
	function Reverse($str){
     	$len = strlen($str);
 	   	if($len == 1){
        	return $str;
    	}
    	else{
        	$len--;
	        return Reverse(substr($str,1, $len)).substr($str, 0, 1);
    	}
	}
	if (isset($_POST['reset'])) {
		$textArea = $_POST['string'];
		$textArea = "";
	}else if (isset($_POST['submit'])) {
		$str = $_POST['string'];
		// echo strrev($str);
		print_r(Reverse($str));
	}else if (isset($_POST['lowerCase'])) {
		$textArea = $_POST['string'];
		for ($i=0; $i < strlen($textArea); $i++) {
			if($textArea[$i] > 'A' && $textArea[$i] < 'Z') {
				echo "String is not Full Lower Case";
				exit(0);
			}
		}
		echo "String is full lower Case";
	}else if(isset($_POST['palindrome'])){
		$mainString = $_POST['string'];
		$revString = strrev($mainString);
		if ($mainString == $revString) {
			echo "String is Palindrome";
		}else {
			echo "String is not Palindrome";
		}
	}else if (isset($_POST['removeSpace'])) {
		$textArea = $_POST['string'];
		$n = strlen($textArea) - 1;
		for ($i=0; $i <= $n; $i++) {
			if ($textArea[$i] == " ") {
				for ($j=$i; $j < $n; $j++) { 
					$textArea[$j] = $textArea[$j+1];			
				}
				$n--;
				$i--;
			}
		}
		echo "New String : ";
		for ($i=0; $i <= $n; $i++) {
			echo $textArea[$i];
		}
	}else if (isset($_POST['stringInString'])) {
		$mainString = $_POST['mainString'];
		$findString = $_POST['findString'];
		$findStringLength = strlen($findString);
		$mainStringLength = strlen($mainString);
		for ($i=0; $i < $mainStringLength; $i = $i + $findStringLength) { 
			if(substr($mainString, $i, $findStringLength) == $findString){
				echo "Yes this String contains $findString ...";
				exit(0);
			}
		}
		echo "Yes this string does not contains $findString ...";
	}else if (isset($_POST['emailValidity'])) {
		$explodedArray = explode("@", $_POST['email']);
		$emailId = $explodedArray[0];
		$domainName = $explodedArray[1];
		if (strlen($emailId) == 0 OR strlen($domainName) == 0) {
			echo "Email is not valid";
			exit(0);
		}
		for ($i=0; $i < strlen($emailId); $i++){
			if($emailId[$i] == "@" || $emailId[$i] == " "){
				echo "Email is not valid";
				exit(0);
			}
		}
		$dot = 0;
		for ($i=0; $i < strlen($domainName); $i++){
			if($domainName[$i] == "@" || $domainName[$i] == " "){
				echo "Email is not valid";
				exit(0);
			}
			if($domainName[$i] == "."){
				$dot = 1;
			}
		}

		if($dot == 1){
			echo "Email is valid";
		}else {
			echo "Email is not valid";
		}
	}
?>