<html>
    <head>
        <title>dementia</title>
    </head>
    <body bgcolor="#252839" text = "#C0C0C0">
        <center>Diagnosing for Dementia</center>

        <p>1. Have memory loss, which is usually noticed by a spouse or someone else?</p>
        <div>
            <label for="demcog1">Yes</label>
            <input type="checkbox" id="demcog1" name="demcog1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>2. Have difficulty in communicating or finding words?</p>
        <div>
            <label for="demcog2">Yes</label>
            <input type="checkbox" id="demcog2" name="demcog2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>3. Have difficulty in reasoning or problem-solving?</p>
        <div>
            <label for="demcog3">Yes</label>
            <input type="checkbox" id="demcog3" name="demcog3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>4. Have difficulty in handling complex tasks?</p>
        <div>
            <label for="demcog4">Yes</label>
            <input type="checkbox" id="demcog4" name="demcog4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>5. Have difficulty with planning and organizing?</p>
        <div>
            <label for="demcog5">Yes</label>
            <input type="checkbox" id="demcog5" name="demcog5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>6. Have difficulty with coordination and motor functions?</p>
        <div>
            <label for="demcog6">Yes</label>
            <input type="checkbox" id="demcog6" name="demcog6">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>7. Have confusion and disorientation?</p>
        <div>
            <label for="demcog7">Yes</label>
            <input type="checkbox" id="demcog7" name="demcog7">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>8. Personality changes?</p>
        <div>
            <label for="dempsy1">Yes</label>
            <input type="checkbox" id="dempsy1" name="dempsy1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>9. Depression?</p>
        <div>
            <label for="dempsy2">Yes</label>
            <input type="checkbox" id="dempsy2" name="dempsy2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>10. Anxiety?</p>
        <div>
            <label for="dempsy3">Yes</label>
            <input type="checkbox" id="dempsy3" name="dempsy3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>11. Inappropriate behavior?</p>
        <div>
            <label for="dempsy4">Yes</label>
            <input type="checkbox" id="dempsy4" name="dempsy4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>12. Paranoia?</p>
        <div>
            <label for="dempsy5">Yes</label>
            <input type="checkbox" id="dempsy5" name="dempsy5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>13. Agitation?</p>
        <div>
            <label for="dempsy6">Yes</label>
            <input type="checkbox" id="dempsy6" name="dempsy6">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>14. Hallucinations?</p>
        <div>
            <label for="dempsy7">Yes</label>
            <input type="checkbox" id="dempsy7" name="dempsy7">
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
	 //$_SESSION['dep']=$sco;
         $a=$_GET['a'];
	 //if($a == 2){
		
	  //}
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
                addr="dysthymia.php?a=1&sco="+str;
                }
                else{
                 addr="meter.php?a=2&scr="+str+"&code=2";
                }
                window.location.href = addr;
            
        }
        </script>
    </body>
</html>
