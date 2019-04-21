<html>
    <head>
        <title>schizophrenia</title>
    </head>
    <body bgcolor="#252839" text = "#C0C0C0">
        <center>Diagnosing for Schizophrenia</center>

        <p>1. Have hallucinations ( Auditory or Visual or Olfactory & gustatory or Tactile )?</p>
        <div>
            <label for="schpos1">Yes</label>
            <input type="checkbox" id="schpos1" name="schpos1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>2. Have delusions ( Referential or Somatic or Erotomanic or Religious or Grandiose delusions )?</p>
        <div>
            <label for="schpos2">Yes</label>
            <input type="checkbox" id="schpos2" name="schpos2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>3. Have confused thoughts and disorganized speech?</p>
        <div>
            <label for="schpos3">Yes</label>
            <input type="checkbox" id="schpos3" name="schpos3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>4. Trouble concentrating?</p>
        <div>
            <label for="schpos4">Yes</label>
            <input type="checkbox" id="schpos4" name="schpos4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>5. Have movement disorders?</p>
        <div>
            <label for="schpos5">Yes</label>
            <input type="checkbox" id="schpos5" name="schpos5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>6. Lack of pleasure?</p>
        <div>
            <label for="schneg1">Yes</label>
            <input type="checkbox" id="schneg1" name="schneg1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>7. Trouble with speech (might not talk much or show any feelings)?</p>
        <div>
            <label for="schneg2">Yes</label>
            <input type="checkbox" id="schneg2" name="schneg2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>8.Flattening(The person might have a terrible case of the blahs. When he talk, voice can sound flat, like they have no emotions)?</p>
        <div>
            <label for="schneg3">Yes</label>
            <input type="checkbox" id="schneg3" name="schneg3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>9. Withdrawal (This might include no longer making plans with friends or becoming a hermit. Talking to the person can feel like pulling teeth)?</p>
        <div>
            <label for="schneg4">Yes</label>
            <input type="checkbox" id="schneg4" name="schneg4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>10. Struggling with the basics of daily life (They may stop bathing or taking care of themselves)?</p>
        <div>
            <label for="schneg5">Yes</label>
            <input type="checkbox" id="schneg5" name="schneg5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>11. No follow-through(have trouble staying on schedule or finishing what they start. Sometimes can't get started at all)?</p>
        <div>
            <label for="schneg6">Yes</label>
            <input type="checkbox" id="schneg6" name="schneg6">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <br><br>
        <div>
            <input type="submit" onclick="fun()" ></input>
        </div>

        <?php
	 //session_start();
         //$sco=$_GET['sco'];
     	 //$_SESSION['dys']=$sco;

         $a=$_GET['a'];
         echo "<p id='hi'style='display:none'>".$a."</p>";
        ?>

        <script>
            var a=document.getElementById('hi').innerHTML;


            function fun(){
                let inputs = document.getElementsByTagName('input');
            let l = inputs.length;
	    var score=0;
            for(let i = 0; i<l; i++){
                if (inputs[i].checked){
                    console.log(inputs[i].name);
                    if(inputs[i].name!=""){
                        score+=1;
                    }
                }
            }

            var per = ((score/11)*100).toFixed(2);
            var str = per.toString();

            console.log(inputs[3].name);

                var addr;
                if(a==1){
                addr="bipolar_disorder.php?a=1&sco="+str;
                }
                else{
                 addr="meter.php?a=2&scr="+str+"&code=4";
                }
                window.location.href = addr;
            
        }
        </script>
    </body>
</html>
