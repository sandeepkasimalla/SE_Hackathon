<html>
    <head>
        <title>Anxiety disorder</title>
    </head>
    <body bgcolor="#252839" text = "#C0C0C0">
        <center>Diagnosing for Anxiety disorder</center>

        <p>1.Are you feeling nervous, restless?</p>
        <div>
            <label for="anx1">Yes</label>
            <input type="checkbox" id="anx1" name="anx1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>2. Have sense of impending danger, panic?</p>
        <div>
            <label for="anx2">Yes</label>
            <input type="checkbox" id="anx2" name="anx2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>3. Have an increased heart rate?</p>
        <div>
            <label for="anx3">Yes</label>
            <input type="checkbox" id="anx3" name="anx3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>4. Have rapid breathe?</p>
        <div>
            <label for="anx4">Yes</label>
            <input type="checkbox" id="anx4" name="anx4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>5. Have sweating?</p>
        <div>
            <label for="anx5">Yes</label>
            <input type="checkbox" id="anx5" name="anx5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>6. Have trumbling?</p>
        <div>
            <label for="anx6">Yes</label>
            <input type="checkbox" id="anx6" name="anx6">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>7. Have you feel weak?</p>
        <div>
            <label for="anx7">Yes</label>
            <input type="checkbox" id="anx7" name="anx7">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>8. Have trouble to sleep?</p>
        <div>
            <label for="anx8">Yes</label>
            <input type="checkbox" id="anx8" name="anx8">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>9. Have you experience gastrointestinal problem?</p>
        <div>
            <label for="anx9">Yes</label>
            <input type="checkbox" id="anx9" name="anx9">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>10. Have difficult to control worry?</p>
        <div>
            <label for="anx10">Yes</label>
            <input type="checkbox" id="anx10" name="anx10">
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
	 //$_SESSION['spc']=$sco;

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

            var per = ((score/10)*100).toFixed(2);
            var str = per.toString();

            console.log(inputs[3].name);

                var addr;
                if(a==1){
                addr="meter.php?a=1&sco="+str;
                }
                else{
                 addr="meter.php?a=2&scr="+str+"&code=9";
                }
                window.location.href = addr;
            
        }
        </script>
    </body>
</html>
