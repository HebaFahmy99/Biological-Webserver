
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="css/functions.css">
    <title>Document</title>
</head>
<body>  
    
<?php
 // $k = $_POST["ksize"]; 
 
$option1 = $_POST["select_operation1"]; 
$option2 = $_POST["select_operation2"];

//Complement VS. Reverse Complement
if($option1 == "Complement"){
    $seq1 = $_POST["SequenceInput"]; 
    $result = complement($seq1); 
    $titleVar = "Complement ";
}  
elseif($option1 == "Reverse Complement"){
    $seq1 = $_POST["SequenceInput"];
    $result = reverseComplement($seq1);
    $titleVar = "Reverse Complement "; 
} 

//Central Dogma Functions 
if($option2 == "Translation"){
    $seq2 = $_POST["SequenceInput2"];
    $result= Translation($seq2); 
    $titleVar = "Translation";   
}
elseif($option2 == "Transcription"){
    $seq2 = $_POST["SequenceInput2"];
    $result= transcription($seq2);
    $titleVar = "Transcribe "; 
} 
elseif($option2 == "Reverse Transcription"){
    $seq2 = $_POST["SequenceInput2"];
    $result = reverseTranscription($seq2);
   $titleVar ="Reverse Transcription ";
}
        


function complement($seq)
    {
        $length = strlen($seq);
        $comp = "";
        for ($i = 0; $i < $length; $i++) {
            if ($seq[$i] == "A") {
                $comp = $comp . "T";
            } elseif ($seq[$i] == "T") {
                $comp = $comp . "A";
            } elseif ($seq[$i] == "C") {
                $comp = $comp . "G";
            } elseif ($seq[$i] == "G") {
                $comp = $comp . "C";
            } else {
                $comp = $comp . "N";
            }
        }
        return $comp;
    } 
function reverseComplement($seq)
{
    $comp = complement($seq);
    $revComp = strrev($comp);

    return $revComp;
}
      
function transcription($seq)
{
    $length = strlen($seq);
    $trans = "";
    for ($i = 0; $i < $length; $i++) {
        if ($seq[$i] == "T") {
            $trans = $trans . "U";
        } else {
            $trans = $trans . $seq[$i];
        }
    }
    return $trans;
}

function Translation($seq)
{
    $transcribed = transcription($seq);
    $length = strlen($transcribed);
    $protein = "";
    for ($i = 0; $i < $length; $i = $i + 3) {
        if ($i == $length - 1 || $i == $length - 2) {
            break;
        } else {
            $str = $transcribed[$i] . $transcribed[$i + 1] . $transcribed[$i + 2];
            if ($str == "UUU" || $str == "UUC") {
                $protein = $protein . "F";
            } else if ($str == "UUA" || $str == "UUG" || $str == "CUU" || $str == "CUC" || $str == "CUA" || $str == "CUG") {
                $protein = $protein . "L";
            } else if ($str == "AUU" || $str == "AUC" || $str == "AUA") {
                $protein = $protein . "I";
            } else if ($str == "AUG") {
                $protein = $protein . "M";
            } else if ($str == "GUU" || $str == "GUC" || $str == "GUA" || $str == "GUG") {
                $protein = $protein . "V";
            } else if ($str == "UCU" || $str == "UCC" || $str == "UCA" || $str == "UCG" || $str == "AGU" || $str == "AGC") {
                $protein = $protein . "S";
            } else if ($str == "CCU" || $str == "CCC" || $str == "CCA" || $str == "CCG") {
                $protein = $protein . "P";
            } else if ($str == "ACU" || $str == "ACC" || $str == "ACA" || $str == "ACG") {
                $protein = $protein . "T";
            } else if ($str == "GCU" || $str == "GCC" || $str == "GCA" || $str == "GCG") {
                $protein = $protein . "A";
            } else if ($str == "UAU" || $str == "UAC") {
                $protein = $protein . "Y";
            } else if ($str == "UAA" || $str == "UAC" || $str == "UGA") {
                $protein = $protein . "*";
            } else if ($str == "CAU" || $str == "CAC") {
                $protein = $protein . "H";
            } else if ($str == "CAA" || $str == "CAG") {
                $protein = $protein . "Q";
            } else if ($str == "AAU" || $str == "AAC") {
                $protein = $protein . "N";
            } else if ($str == "AAG" || $str == "AAA") {
                $protein = $protein . "K";
            } else if ($str == "GAU" || $str == "GAC") {
                $protein = $protein . "D";
            } else if ($str == "GAA" || $str == "GAG") {
                $protein = $protein . "E";
            } else if ($str == "UGU" || $str == "UGC") {
                $protein = $protein . "C";
            } else if ($str == "UGG") {
                $protein = $protein . "W";
            } else if ($str == "CGU" || $str == "CGC" || $str == "CGA" || $str == "CGG" || $str == "AGA" || $str == "AGG") {
                $protein = $protein . "R";
            } else if ($str == "GGU" || $str == "GGC" || $str == "GGA" || $str == "GGG") {
                $protein = $protein . "G";
            }
        }
    }
    return $protein;
} 

function reverseTranscription($rna)
{
    $length = strlen($rna);
    $revTrans = "";
    for ($i = 0; $i < $length; $i++) {
        if ($rna[$i] == "U") {
            $revTrans = $revTrans . "T";
        } else {
            $revTrans = $revTrans . $rna[$i];
        }
    }
    return $revTrans;
}


?>   
<div class="form-content">
        <div class="formHeader"> 
            <img src="images/gc2.jpg" alt=""> 
            <div class="headerContent"> 
                <h2>Results</h2> 
            </div>
        </div>  
        <div class="form-body"> 
            <div class="resultSection"> 
                <fieldset> 
                    <legend>Result</legend> 
                    <?php   
                        if((empty($option1)||empty($seq1)) && (empty($option2)||empty($seq2)))
                        {
                            echo '<div class="error">Fields are required!</div>';
                        }  
                        else{ 
                            echo $titleVar; 
                            echo ":  ";
                            echo $result; 
                        }

                    ?> 
                    
                </fieldset>
            </div> 
            <button id="back"><a href="functions.php">Back to functions</a></button>
        </div>
</div>   






</body>
</html>