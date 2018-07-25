# f.

<?php
$a = 288;
$b = 1;
$c = 2;

for ($i = 1; $i <= 31; $i++) {
	
	
	echo "$a 2R0";echo $b; echo "C0"; echo $c; echo"C</br>";
	echo "Screen 2 Row $b Col $c Color</br>";
	echo "-1 0 0 0</br>";
	echo "10 0 0 0</br>";
	echo "60 1 1 2</br>";
	echo "=MHASCC|A2CELLS!R0"; echo $b; echo"C0"; echo $c; echo "C</br>";
	echo "0 1 0 1 4</br>";
	echo "0 0 0 0 0 0 0 0 0 0</br></br>";
	
	echo "Unused</br></br>";
	
	echo "Unused</br></br>";

	$a++;
	
	echo "$a 2R0";echo $b; echo "C0"; echo $c; echo"T</br>";
	echo "Screen 2 Row $b Col $c Text</br>";
	echo "-1 0 0 0</br>";
	echo "10 0 0 0</br>";
	echo "60 1 3 2</br>";
	echo "=MHASCC|A2CELLS!R0"; echo $b; echo"C0"; echo $c; echo "T</br>";
	echo "0 1 0 1 4</br>";
	echo "0 0 0 0 0 0 0 0 0 0</br></br>";
	
	echo "Unused</br></br>";
	
	echo "Unused</br></br>";

	$a++;
	
	$c++;
	if ($c > 8) {
		$b++;
		$c = 1;
	}
		
}
echo $i;
