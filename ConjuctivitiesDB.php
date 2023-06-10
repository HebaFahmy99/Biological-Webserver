<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Operations</title> 
    <link rel="stylesheet" href="css/DB.css">
</head>
<body> 
    <div class="container"> 
        <div class="parentCard"> 
            <h1>Database Operations</h1> 
            <form action="DatabaseOperations.php" method="post"> 
                <fieldset>  
                    <legend>Insert Sequence</legend>
                    <div class="insert"> 
                        <input type="text" name="GeneSymbol" placeholder="Enter Gene Symbol: " >
                    </div> 
                    <div class="insert"> 
                        <input list="Types" name="GeneType" placeholder="Enter Gene Type: " > 
                        <datalist id="Types"> 
                            <option value="Protein"></option> 
                            <option value="DNA"></option> 
                            <option value="RNA"></option> 
                        </datalist>   
                    </div> 
                    <div class="insert"> 
                        <input type="text" name="GeneDesc" placeholder="Enter Gene Description: "> 
                    </div>
                    <div class="insert"> 
                        <input type="text" name="GeneSequence" placeholder="Enter Gene Sequence: "> 
                    </div>  
                    <div class="btn"> 
                        <input type="submit" id="insertBtn" name="insertBtn" value="Insert">
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Select Gene</legend> 
                    <div class="select"> 
                        <input type="number" name="GeneID" placeholder="Enter Gene Id: " >
                    </div>  
                    <div class="btn"> 
                        <input type="submit" id="selectBtn" name="selectBtn" value="Select">
                        <input type="submit" id="selectALLBtn" name="selectALLBtn" value="Select All">
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Delete Gene</legend> 
                    <div class="delete"> 
                        <input type="number" name="GeneIDToDelete" placeholder="Enter Gene Id: " >
                    </div>  
                    <div class="btn"> 
                        <input type="submit" id="selectBtn" name="deleteBtn" value="Delete">
                    </div>
                </fieldset> 

                <fieldset> 
                    <legend>Update Gene</legend> 
                    <div class="insert"> 
                        <input list="Updayes" name="updateAttribute" placeholder="Select attribute that you want to update " > 
                        <datalist id="Updayes"> 
                            <option value="GeneSymbol"></option> 
                            <option value="GeneType"></option> 
                            <option value="GeneDescription"></option> 
                            <option value="GeneSequence"></option> 
                        </datalist>   
                    </div>  
                    <div class="insert"> 
                        <input type="text" name="updatedGeneValue" placeholder="Enter new value: "> 
                    </div> 
                    <div class="insert"> 
                        <input type="number" name="updatedGeneId" placeholder="Enter Gene Id to update: "> 
                    </div> 
                    <div class="btn"> 
                        <input type="submit" id="selectBtn" name="updateBtn" value="Update">
                    </div>
                </fieldset>
                <div class="signout"> 
                   <button> <a href="index.html"> Sign Out</a></button>
               </div>
            </form>


        </div>




    </div>

    
</body>
</html>