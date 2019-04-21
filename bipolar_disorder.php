<html>
    <head>
        <title>Bipolar Disorder</title>
    </head>
    <body bgcolor="#252839" text = "#C0C0C0">
        <center>Diagnosing for bipolar disorder</center>

        <p>1. Are you abnormally upbeat, jumpy or wired?</p>
        <div>
            <label for="bpdh1">Yes</label>
            <input type="checkbox" id="bpdh1" name="bpdh1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>2. Do you feel increased activity, energy or agitation?</p>
        <div>
            <label for="bpdh2">Yes</label>
            <input type="checkbox" id="bpdh2" name="bpdh2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>3. Do you feel exaggerated sense of well being and self-confidence ?</p>
        <div>
            <label for="bpdh3">Yes</label>
            <input type="checkbox" id="bpdh3" name="bpdh3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>4. Do you feel decreased need for sleep?</p>
        <div>
            <label for="bpdh4">Yes</label>
            <input type="checkbox" id="bpdh4" name="bpdh4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>5. Do you feel Unusual talkativeness?</p>
        <div>
            <label for="bpdh5">Yes</label>
            <input type="checkbox" id="bpdh5" name="bpdh5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>6. Do you feel Racing thoughts ?</p>
        <div>
            <label for="bpdh6">Yes</label>
            <input type="checkbox" id="bpdh6" name="bpdh6">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>7. Do you feel Distractibility?</p>
        <div>
            <label for="bpdh7">Yes</label>
            <input type="checkbox" id="bpdh7" name="bpdh7">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>8. Do you make Poor decision-making — for example, going on buying sprees, taking sexual risks or making foolish investments?</p>
        <div>
            <label for="bpdh8">Yes</label>
            <input type="checkbox" id="bpdh8" name="bpdh8">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>9.Do you feel Depressed mood, such as feeling sad, empty, hopeless or tearful?</p>
        <div>
            <label for="bpdm1">Yes</label>
            <input type="checkbox" id="bpdm1" name="bpdm1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>10. Do you feel Either insomnia or sleeping too much?</p>
        <div>
            <label for="bpdm2">Yes</label>
            <input type="checkbox" id="bpdm2" name="bpdm2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>11. Do you feel Either restlessness or slowed behavior?</p>
        <div>
            <label for="bpdm3">Yes</label>
            <input type="checkbox" id="bpdm3" name="bpdm3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>12. Do you feel Fatigue or loss of energy?</p>
        <div>
            <label for="bpdm4">Yes</label>
            <input type="checkbox" id="bpdm4" name="bpdm4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>13. Do you have Feelings of worthlessness ?</p>
        <div>
            <label for="bpdm5">Yes</label>
            <input type="checkbox" id="bpdm5" name="bpdm5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>14. Do you feel Thinking about, planning or attempting suicide?</p>
        <div>
            <label for="bpdm6">Yes</label>
            <input type="checkbox" id="bpdm6" name="bpdm6">
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
	 //$_SESSION['sch']=$sco;

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

            var per = ((score/14)*100).toFixed(2);
            var str = per.toString();

            console.log(inputs[3].name);

                var addr;
                if(a==1){
                addr="ptsd.php?a=1&sco="+str;
                }
                else{
                 addr="meter.php?a=2&scr="+str+"&code=5";
                }
                window.location.href = addr;
            
        }
        </script>
    </body>
</html>
