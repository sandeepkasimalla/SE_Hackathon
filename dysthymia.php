<html>
    <head>
        <title>dysthymia</title>
    </head>
    <body bgcolor="#252839" text = "#C0C0C0">
        <center>Diagnosing for Dysthymia</center>

        <p>1. Loss of interest in daily activities?</p>
        <div>
            <label for="dys1">Yes</label>
            <input type="checkbox" id="dys1" name="dys1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>2. Have sadness, emptiness or feeling down?</p>
        <div>
            <label for="dys2">Yes</label>
            <input type="checkbox" id="dys2" name="dys2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>3. Have hopelessness?</p>
        <div>
            <label for="dys3">Yes</label>
            <input type="checkbox" id="dys3" name="dys3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>4. Have tiredness and lack of energy?</p>
        <div>
            <label for="dys4">Yes</label>
            <input type="checkbox" id="dys4" name="dys4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>5. Have low self-esteem, self-criticism or feeling incapable?</p>
        <div>
            <label for="dys5">Yes</label>
            <input type="checkbox" id="dys5" name="dys5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>6. Trouble concentrating and trouble making decisions?</p>
        <div>
            <label for="dys6">Yes</label>
            <input type="checkbox" id="dys6" name="dys6">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>7. Have irritability or excessive anger?</p>
        <div>
            <label for="dys7">Yes</label>
            <input type="checkbox" id="dys7" name="dys7">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>8. Decreased activity, effectiveness and productivity?</p>
        <div>
            <label for="dys8">Yes</label>
            <input type="checkbox" id="dys8" name="dys8">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>9. Avoidance of social activities?</p>
        <div>
            <label for="dys9">Yes</label>
            <input type="checkbox" id="dys9" name="dys9">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>10. Feelings of guilt and worries over the past?</p>
        <div>
            <label for="dys10">Yes</label>
            <input type="checkbox" id="dys10" name="dys10">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>11. Poor appetite or overeating?</p>
        <div>
            <label for="dys11">Yes</label>
            <input type="checkbox" id="dys11" name="dys11">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>12. Have sleep problems?</p>
        <div>
            <label for="dys12">Yes</label>
            <input type="checkbox" id="dys12" name="dys12">
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
	 //$_SESSION['dem']=$sco;

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

            var per = ((score/12)*100).toFixed(2);
            var str = per.toString();

            console.log(inputs[3].name);

                var addr;
                if(a==1){
                addr="schizophrenia.php?a=1&sco="+str;
                }
                else{
                 addr="meter.php?a=2&scr="+str+"&code=3";
                }
                window.location.href = addr;
            
        }
        </script>
    </body>
</html>
