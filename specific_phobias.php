<html>
    <head>
        <title>specific-phobias</title>
    </head>
    <body bgcolor="#252839" text = "#C0C0C0" link="#0000FF" vlink="#c2d4d8" alink="#FF0000">
        <center>Diagnosing for Specific-phobias</center>

        <p>1. An immediate feeling of intense fear, anxiety and panic when exposed to or even thinking about the source of your fear?</p>
        <div>
            <label for="pho1">Yes</label>
            <input type="checkbox" id="pho1" name="pho1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>2. Awareness that your fears are unreasonable or exaggerated but feeling powerless to control them?</p>
        <div>
            <label for="pho2">Yes</label>
            <input type="checkbox" id="pho2" name="pho2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>3. Worsening anxiety as the situation or object gets closer to you in time or physical proximity?</p>
        <div>
            <label for="pho3">Yes</label>
            <input type="checkbox" id="pho3" name="pho3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>4. Difficulty functioning normally because of your fear?</p>
        <div>
            <label for="pho4">Yes</label>
            <input type="checkbox" id="pho4" name="pho4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>5. Physical reactions and sensations, including sweating, rapid heartbeat, tight chest or difficulty breathing?</p>
        <div>
            <label for="pho5">Yes</label>
            <input type="checkbox" id="pho5" name="pho5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>6. Feeling nauseated, dizzy or fainting around blood or injuries?</p>
        <div>
            <label for="pho6">Yes</label>
            <input type="checkbox" id="pho6" name="pho6">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>7. Doing everything possible to avoid the object or situation or enduring it with intense anxiety or fear?</p>
        <div>
            <label for="pho7">Yes</label>
            <input type="checkbox" id="pho7" name="pho7">
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
	 //$_SESSION['ocd']=$sco;

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

            var per = ((score/7)*100).toFixed(2);
            var str = per.toString();

            console.log(inputs[3].name);

                var addr;
                if(a==1){
                addr="anxiety_disorders.php?a=1&sco="+str;
                }
                else{
                 addr="meter.php?a=2&scr="+str+"&code=8";
                }
                window.location.href = addr;
            
        }
        </script>
    </body>
</html>
