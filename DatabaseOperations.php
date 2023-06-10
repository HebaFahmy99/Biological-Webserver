<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/DB.css">

    <title>Record Results</title>
</head>
<body>
<div class='container'>  
    <div class='parentCard2'>
<?php 

function InsertGene($conn){    
    $GeneSymbol = $_POST["GeneSymbol"];
    $GeneType = $_POST["GeneType"];
    $GeneDesc = $_POST["GeneDesc"];
    $GeneSequence = $_POST["GeneSequence"];  
        if(!(empty($GeneSymbol)&& empty($GeneType) && empty($GeneSequence))){ 
            $seq = "INSERT INTO genes (GeneId, GeneSymbol, GeneType, GeneDescription, GeneSequence) VALUES (NULL, '$GeneSymbol', '$GeneType', '$GeneDesc', '$GeneSequence')";
            if($conn->query($seq) === TRUE){  
                echo "<h1>Inserted Sequence:</h1>"; 
                echo"<table>";
                    echo"<thead>";
                        echo"<tr>";
                           echo" <th>Gene Symbol</th>";
                            echo"<th>Gene Type</th>";
                            echo"<th>Gene Description</th>";
                            echo"<th>Gene Sequence</th>";
                       echo"</tr>";
                    echo"</thead>";
                    echo"<tbody>";
                        echo"<tr>";
                            echo"<td>".$GeneSymbol."</td>"; 
                            echo "<td>".$GeneType."</td>";
                            echo"<td>".$GeneDesc."</td>";
                            echo"<td>".$GeneSequence."</td>";
                       echo" </tr>";
                    echo"</tbody>";
                echo"</table>";
                
            } 
            else{ 
                header("Location:Error404.php");
            }
        }
    
}  
  
function SelectGene($conn){ 
    $GeneID = $_POST["GeneID"];
    if(!(empty($GeneID))){ 
        $seq = "SELECT GeneId, GeneSymbol, GeneType, GeneDescription, GeneSequence FROM genes WHERE GeneId = '$GeneID' "; 
        $result = $conn->query($seq); 
        if($result->num_rows >0){   
            while($row = $result->fetch_assoc()) {               
                echo "<h1>Selected Sequence:</h1>"; 
                echo"<table>";
                    echo"<thead>";
                        echo"<tr>";
                            echo" <th>Gene Id</th>";
                            echo" <th>Gene Symbol</th>";
                            echo"<th>Gene Type</th>";
                            echo"<th>Gene Description</th>";
                            echo"<th>Gene Sequence</th>";
                        echo"</tr>";
                    echo"</thead>";
                    echo"<tbody>";
                        echo"<tr>";
                            echo"<td>".$row["GeneId"]."</td>"; 
                            echo"<td>".$row["GeneSymbol"]."</td>"; 
                            echo"<td>".$row["GeneType"]."</td>"; 
                            echo"<td>".$row["GeneDescription"]."</td>"; 
                            echo"<td>".$row["GeneSequence"]."</td>"; 
                        echo" </tr>";
                    echo"</tbody>";
                echo"</table>";

        } }
        else{ 
            header("Location:Error404.php");
        }
    }
    else{ 
        header("Location:Error404.php");
    }
     

}
 
function SelectAllGenes($conn){  
            $seq = "SELECT GeneId, GeneSymbol, GeneType, GeneDescription, GeneSequence FROM genes"; 
            $result = $conn->query($seq); 
            if($result->num_rows >0){    

                echo "<h1>All Selected Sequences:</h1>"; 
                echo"<table>";
                    echo"<thead>";
                        echo"<tr>";
                           echo" <th>Gene Id</th>";
                           echo" <th>Gene Symbol</th>";
                            echo"<th>Gene Type</th>";
                            echo"<th>Gene Description</th>";
                            echo"<th>Gene Sequence</th>";
                       echo"</tr>";
                    echo"</thead>";
                    echo"<tbody>";
                while($row = $result->fetch_assoc()) {
                   
                            echo"<tr>";
                                echo"<td>".$row["GeneId"]."</td>"; 
                                echo"<td>".$row["GeneSymbol"]."</td>"; 
                                echo"<td>".$row["GeneType"]."</td>"; 
                                echo"<td>".$row["GeneDescription"]."</td>"; 
                                echo"<td>".$row["GeneSequence"]."</td>"; 
                           echo" </tr>";
                        
             } 
             echo"</tbody>";
                    echo"</table>";
            
            }else{ 
                header("Location:Error404.php");
            }
   

    } 

function DeleteGene($conn){ 
    $GeneIDToDelete = $_POST["GeneIDToDelete"]; 
    $seq = "DELETE FROM genes WHERE GeneId = '$GeneIDToDelete' "; 
    if ($conn->query($seq) === true){  
        echo "<h1>Gene is deleted successfully!</h1>";
    } 
    else{ 
        header("Location:Error404.php");
    }
} 
  
function UpdateGene($conn){ 
    $updateAttribute = $_POST["updateAttribute"]; 
    $updatedGeneValue = $_POST["updatedGeneValue"]; 
    $updatedGeneId = $_POST["updatedGeneId"]; 
    $seq = "UPDATE genes SET $updateAttribute = '$updatedGeneValue' WHERE GeneId = '$updatedGeneId'"; 
    if ($conn->query($seq) === TRUE) {
        echo "<h1>Gene is Updated successfully!</h1>";
      } else {
        header("Location:Error404.php");
      }
}


$servername = "localhost"; 
$username = "root"; 
$password = "usbw"; 
$dbname = "userdata" ; 
$conn = new mysqli($servername, $username, $password,$dbname); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{  
    if(isset($_POST['insertBtn'])){ 
        InsertGene($conn); 
    } 
    else if(isset($_POST['selectBtn'])){  
        SelectGene($conn);
    }
    else if(isset($_POST['selectALLBtn'])){ 
        SelectAllGenes($conn);
    }
    else if(isset($_POST['deleteBtn'])){ 
        DeleteGene($conn);
    }
    else if(isset($_POST['updateBtn'])){ 
        UpdateGene($conn);
    }
}
$conn->close();

?> 

   </div> 
</div> 
</body>
</html>