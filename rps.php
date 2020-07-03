

<?php

echo "<h1> ROCK - PAPER - SCISSORS </h1>";

$p11=$p12=$p13=$p14=$p21=$p22=$p23=$p24=$p31=$p32=$p33=$p34=$p41=$p42=$p43=$p44="";
//this code is used to store the values and key of the $RPS array
$RPS = ['SCISSORS' => 'PAPER', 'PAPER' => 'ROCK','ROCK' => 'SCISSORS'];

//this code is used for running the loop 50 times 
for($i=1;$i<51;$i++)
{
	echo "<h4>$i Iteration</h4>"; // count the number of time the loop runs
	
$player1  = array_rand($RPS); //this code is used to generate random values from $RPS array for player 1 
$player2 = array_rand($RPS);//this code is used to generate random values from $RPS array for player 2
$player3 = array_rand($RPS);//this code is used to generate random values from $RPS array for player 3
$player4 = array_rand($RPS);//this code is used to generate random values from $RPS array for player 4

//this code is used to print the table of random choices made by Players
echo "<br><table border=1>
<tr><th>Player1</th> <th>Player2</th> <th>Player3</th> <th>Player4</th></tr>
<tr><th>$player1</th> <th>$player2</th> <th>$player3</th> <th>$player4</th></tr></table>"; 


 //comparison conditions
 //for player 1
if ($player1 == $player1)		
{
	$p11= "-";
}
	
if ($RPS[$player1] === $player2 )	
{  	
	$p12= "1";	
}

else
{
	$p12="0";
}

if ($player1 == $player2)		  
{
	$p12="0";
}

if ($RPS[$player1] === $player3 )
{	 
	$p13= "1";
}
else
{
	$p13="0";
}

if ($player1 == $player3)
{	
	$p13="0";
}

if  ($RPS[$player1] === $player4 )
{	
	$p14= "1";
}

else
{
	$p14="0";
}

if ($player1 == $player4)
{
	$p14= "0";
}

//this code is for random result table  
echo"<table border=1> <tr> <th>Totals</th> <th></th> <th colspan=4>Against</th> </tr>
<tr> <th></th> <th></th> <th>Player1</th> <th>Player2</th> <th>Player3</th> <th>Player4</th> </tr>
<tr> <th rowspan=4>Player Wins</th> <th>Player 1</th> <th>$p11</th><th>$p12</th> <th>$p13</th> <th> $p14</th></tr>";

//conditions for player2 
if ($RPS[$player2] === $player1 )
{	
	$p21= "1";
}
else
{
	$p21="0";
}

if ($player2 == $player1)
{	
	$p21= "0";
}


if ($player2 == $player2)		
{	
	$p22= "-";
}

if ($RPS[$player2] === $player3 )
{	
	$p23= "1";
}
else
{
	$p23="0";
}

if ($player2 == $player3)
{	
	$p23= "0";
}	

if ($RPS[$player2] === $player4 )
{	
	$p24= "1";
}
else
{
	$p24="0";
}

if ($player2 == $player4)
{	
	$p24= "0";
}

//row 2 player 2
echo "<th>Player 2</th> <th>$p21</th><th>$p22</th> <th>$p23</th> <th> $p24</th></tr>";


	
////conditions for player3
if ($RPS[$player3] === $player1 )
{ 	
	$p31= "1";
}
else
{
	$p31="0";
}	
	
if  ($player3 == $player1)
{	
	$p31= "0";
}
 
if ($RPS[$player3] === $player2 )
{	
	$p32= "1";
}
else
{
	$p32="0";
}
	
if ($player3 == $player2)
{	
	$p32= "0";
}

if ($player3 == $player3)		
{	
	$p33= "-";
}

 if ($RPS[$player3] === $player4 )
{	
	$p34= "1";
}
else
{
	$p34="0";
}	


if ($player3 == $player4)
{	
	$p34= "0";
}

//row 3 for player 3
echo "<th>Player 3</th> <th>$p31</th><th>$p32</th> <th>$p33</th> <th> $p34</th></tr>";


//conditions for player4

if ($RPS[$player4] === $player1 )
{	
	$p41= "1";
}

else
{
	$p41="0";
}

if ($player4 === $player1)
{	
	$p41= "0";
}
 

if ($RPS[$player4] === $player2 )
{	
	$p42= "1";
}

else
{
	$p42="0";
}

if ($player4 == $player2)
{
	$p42= "0";
}
 

 if ($RPS[$player4] === $player3 )
{	
	$p43= "1";
}

else
{
	$p43="0";
}

if ($player4 == $player3)
{	
	$p43= "0";
}

if ($player4 == $player4)		
{
	$p44= "-";
}

//row 4 for player 4
echo "<th>Player 4</th> <th>$p41</th><th>$p42</th> <th>$p43</th> <th> $p44</th></tr>
</table><hr>";



}


?>