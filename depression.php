<html>
    <head>
        <title>depression</title>

    </head>
    <body bgcolor="#252839" text = "#C0C0C0">
        <center>Diagnosing for Depression</center>

        <div style="display: inline-block">
        <form action="dementia.php">
        <p>1. Have a depressed mood during most of the day, especially in the morning?</p>
        <div>
            <label for="dep1">Yes</label>
            <input class="yesclass" type="checkbox" id="dep1" name="dep1">
            <label>No</label>
            <input class="noclass" type="checkbox" id="" name="">
        </div>

        <p>2. Have you feel tired or have a lack of energy almost every day?</p>
        <div>
            <label for="dep2">Yes</label>
            <input type="checkbox" id="dep2" name="dep2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>3. Have you feel worthless or guilty almost every day?</p>
        <div>
            <label for="dep3">Yes</label>
            <input type="checkbox" id="dep3" name="dep3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>4. Have you have a hard time focusing, remembering details, and making decisions?</p>
        <div>
            <label for="dep4">Yes</label>
            <input type="checkbox" id="dep4" name="dep4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>5. Have you can’t sleep or you sleep too much almost every day?</p>
        <div>
            <label for="dep5">Yes</label>
            <input type="checkbox" id="dep5" name="dep5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>6. Have you have almost no interest or pleasure in many activities nearly every day?</p>
        <div>
            <label for="dep6">Yes</label>
            <input type="checkbox" id="dep6" name="dep6">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>7. Have you think often about death or suicide (not just a fear of death)?</p>
        <div>
            <label for="dep7">Yes</label>
            <input type="checkbox" id="dep7" name="dep7">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>8. Have you feel restless or slowed down.?</p>
        <div>
            <label for="dep8">Yes</label>
            <input type="checkbox" id="dep8" name="dep8">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>9. Have you lost or gained weight?</p>
        <div>
            <label for="dep9">Yes</label>
            <input type="checkbox" id="dep9" name="dep9">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>10. Have you Feel irritable and restless?</p>
        <div>
            <label for="dep10">Yes</label>
            <input type="checkbox" id="dep10" name="dep10">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>11. Have you lose pleasure in life?</p>
        <div>
            <label for="dep11">Yes</label>
            <input type="checkbox" id="dep11" name="dep11">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>12. Overeat or stop feeling hungry?</p>
        <div>
            <label for="dep12">Yes</label>
            <input type="checkbox" id="dep12" name="dep12">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>13. Have aches or pains, headaches, cramps, or digestive problems that don’t go away or get better with treatment?</p>
        <div>
            <label for="dep13">Yes</label>
            <input type="checkbox" id="dep13" name="dep13">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>14. Have sad, anxious, or "empty" feelings?</p>
        <div>
            <label for="dep14">Yes</label>
            <input type="checkbox" id="dep14" name="dep14">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        </form>
        <br><br>
        <div>
            <input type="submit" onclick="fun()" ></input>
        </div>
        </div>
        <?php
	 //session_start();
         $a=$_GET['a'];
	 //$_SESSION['x'] = $a;
         echo "<p id='hi'style='display:none'>".$a."</p>";
         //echo "<p id='hii'style='display:none'>".$_SESSION['x']."</p>";
        ?>

        <script>
            var x=document.getElementById('hi').innerHTML;


            function fun(){
                let inputs = document.getElementsByTagName('input');
            var score=0;
            let l = inputs.length;
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
            console.log(score);
             



                var addr;
                if(x==1){
                addr="dementia.php?a=1&sco="+str;

                }
                else{
                 addr="meter.php?a=2&scr="+str+"&code=1";
                }


                window.location.href = addr;
            
        }



        </script>
    </body>
</html>
