<?php
if(isset($_POST['submit'])){

    
    //collect form data
    $client_name = $_POST['client_name'];
    $circuit_name = $_POST['circuit_name'];
    $ticket_number = $_POST['ticket_number'];
    $problem =  $_POST['problem'];
    $outage = $_POST['outage'];
    $solution = $_POST['solution'];
    $prevention = $_POST['prevention'];

    //check client name is set
    if($client_name ==''){
        $error[] = 'Client name is required';
    }
	//check circuit name is set
	if($circuit_name ==''){
        $error[] = 'Circuit name is required';
    }
    //check circuit name is set
	if($ticket_number ==''){
        $error[] = 'ticket number is required';
    }
    //check  if problem is set
	if($problem ==''){
        $error[] = 'problem is required';
    }
    //check if solution is set
	if($solution ==''){
        $error[] = 'What was done to correct the problem is required';
    }

    //check if prevention is set
    if($prevention ==''){
        $error[] = 'What is being done to prevent recurrence is required';
    }
   
    //if no errors carry on
    if(!isset($error)){

        //create html of the data
        ob_start();
        ?>
        <link rel="stylesheet" href="style.css" />
        <div class='center'><img src="logo.png" alt="logo" width="200" height="80"></div>

        <div class='center'>
            <h1>ROOT CAUSE ANALYSIS</h1>
        </div>

        <p>Client Name: <?php echo $client_name;?></p>
        <br></br>
        <p>Circuit Name: <?php echo $circuit_name;?></p>
        <br></br>
        <p>Ticket Number: <?php echo $ticket_number;?></p>
        <br></br>
        <br></br>
        <div class='center2'><h2>OUTAGE REPORT </h2></div>

        <br>What happened: <br> <p><?php echo $outage;?></p>
        
        <br>What was done to correct the problem?:</br> <p> <?php echo $solution;?></p>

        <br>What's being done to prevent recurrence?:</br> <p> <?php echo $prevention;?></p>


        

        <?php 
        $body = ob_get_clean();

        $body = iconv("UTF-8","UTF-8//IGNORE",$body);


        require_once __DIR__ . '/vendor/autoload.php';

         $mpdf = new \Mpdf\Mpdf();
        //include("mpdf/mpdf.php");
        //$mpdf=new \mPDF('c','A4','','' , 0, 0, 0, 0, 0, 0); 

        //write html to PDF
        $mpdf->WriteHTML($body);
        
        
        //output pdf
        $mpdf->Output('demo.pdf','D');

        //save to server
        //$mpdf->Output("mydata.pdf",'F');



    }
}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}
?> 
