<html>
    <head>
        <title>OCD</title>
    </head>
    <body bgcolor="#252839" text = "#C0C0C0">
        <center>Diagnosing for Obsessive-compulsive disorder</center>

        <p>1. Have fear of contamination ?</p>
        <div>
            <label for="ocdo1">Yes</label>
            <input type="checkbox" id="ocd01" name="ocdo1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>2. Do you need things orderly and symmetrical?</p>
        <div>
            <label for="ocdo2">Yes</label>
            <input type="checkbox" id="ocdo2" name="ocdo2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>3. Have you thought of harming yourself or others?</p>
        <div>
            <label for="ocdo3">Yes</label>
            <input type="checkbox" id="ocdo3" name="ocdo3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>4. Have you got unwanted thoughts or sexual or religious subjects?</p>
        <div>
            <label for="ocdo4">Yes</label>
            <input type="checkbox" id="ocdo4" name="ocdo4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>5. Have you always thought of washing?</p>
        <div>
            <label for="ocdc1">Yes</label>
            <input type="checkbox" id="ocdc1" name="ocdc1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>6. Are you checking continuosly?</p>
        <div>
            <label for="ocdc2">Yes</label>
            <input type="checkbox" id="ocdc2" name="ocdc2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>7. Do you want orderliness?</p>
        <div>
            <label for="ocdc3">Yes</label>
            <input type="checkbox" id="ocdc3" name="ocdc3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>8. Do you follow strict routine?</p>
        <div>
            <label for="ocdc4">Yes</label>
            <input type="checkbox" id="ocdc4" name="ocdc4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>9. Have you demanded reassurances?</p>
        <div>
            <label for="ocdc5">Yes</label>
            <input type="checkbox" id="ocdc5" name="ocdc5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>10. Do you count continuosly?</p>
        <div>
            <label for="ocdc6">Yes</label>
            <input type="checkbox" id="ocdc6" name="ocdc6">
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
	 //$_SESSION['ptsd']=$sco;

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
                addr="specific_phobias.php?a=1&sco="+str;
                }
                else{
                 addr="meter.php?a=2&scr="+str+"&code=7";
                }
                window.location.href = addr;
            
        }
        </script>
    </body>
</html>
