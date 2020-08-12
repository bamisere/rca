<?php 
    include'rca.php';
?>
<link rel="stylesheet" href="style.css" />
<form action='rca.php' method='post'>
<div class='center3'><img src="logo.png" alt="logo" width="200" height="80"></div>
<div id='wrap'>
    <fieldset>

        <legend>RCA GENERATOR</legend>
        <div class='col'>

            <p><label>Client name</label><br><input type='text' name='client name' value=''></p> 

            <p><label>Circuit name</label><br><input type='text' name='circuit name' value=''></p>

            <p><label>Ticket number</label><br><input type='text' name='ticket number' value=''></p>

            <label for="start">Start date:</label>

                <input type="date" id="start" name="trip-start"
                        value="2020-07-22"
                        min="2020-01-01" max="2025-12-31">

            <label for="end">End date:</label>

                <input type="date" id="end" name="trip-end"
                        value="2020-07-22"
                        min="2020-01-01" max="2025-12-31">


        </div>
        <div class='col'>

            <p><label>Type of problem: </label>

                <select name="problem" id="problem">

                    <option></option>
                    <option>FIBER CUT</option>
                    <option>LOS ON DEVICE</option>
                    <option>LINK FLAP</option>

                </select>

            </p>

            <p> <label for="outage">What happened?: </label>
                
                <textarea name="outage" id="outage" col="30" row="10"> </textarea>
                
            </p>
                
            <p> <label for="solution">What was done to correct the problem?: </label>
                
                <textarea name="solution" id="solution" col="30" row="10"> </textarea>
                
            </p>
                
            <p> <label for="prevention">What's being done to prevent recurrence?: </label>
                
                <textarea name="prevention" id="prevention" col="30" row="10"> </textarea>
                
            </p>
        </div>

        <p><input type='submit' name='submit' value='Submit'></p> 

    </fieldset>
</div>   
</form>




