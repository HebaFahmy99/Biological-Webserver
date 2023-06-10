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
<div class="form-content">
        <div class="formHeader"> 
            <img src="images/gc2.jpg" alt=""> 
            <div class="headerContent"> 
                <h2>Functions on Sequences</h2> 
                <p>Fill in the form below to get your result</p>
            </div>
        </div>  
        <div class="form-body"> 
            <form action="sequencesFunctionalites.php" method="post" target="_blank"> 
                <fieldset> 
                    <legend>Complement VS. Reverse Complement</legend> 
                    <div class="opeations"> 
                        <div class="SelectOperation"> 
                            <input list="operations" id="SelectInput" name="select_operation1" placeholder="Select Operation"> 
                            <datalist id="operations"> 
                                <option value="Complement"></option>
                                <option value="Reverse Complement"></option>
                            </datalist>
                        </div> 

                        <div class="sequence"> 
                            <input type="text" name="SequenceInput" placeholder="Enter Sequence">
                        </div>
                        <div class="fieldsetBtns"> 
                        <input id="sumbitBtn" type="submit" value="Get Result"> 
                        <input id="resetBtn" type="reset" value="Reset">

                        </div>
                    </div>                    
                </fieldset>  

                <fieldset style = "margin-top:20px;"> 
                    <legend>Central Dogma Functions</legend> 
                    <div class="opeations"> 
                        <div class="SelectOperation"> 
                            <input list="centraLdogma" id="SelectInput" name="select_operation2" placeholder="Select Operation"> 
                            <datalist id="centraLdogma"> 
                                <option value="Translation"></option>
                                <option value="Transcription"></option>
                                <option value="Reverse Transcription"></option>
                            </datalist>
                        </div> 

                        <div class="sequence"> 
                            <input type="text" name="SequenceInput2" placeholder="Enter Sequence">
                        </div>
                        <div class="fieldsetBtns"> 
                        <input id="sumbitBtn" type="submit" value="Get Result"> 
                        <input id="resetBtn" type="reset" value="Reset">

                        </div>
                    </div>                
                </fieldset>  

            </form> 
            <div class="back">
                <button id="bacBtn"><a href="services.html">Back To services</a></button>
            </div>
        </div>
    </div>  




</body>
</html>