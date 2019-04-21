<html>
    <head>
        <title>Post traumic stress disorder</title>
    </head>
    <body bgcolor="#252839" text = "#C0C0C0">
        <center>Diagnosing for Post traumic stress disorder</center>

        <p>1. Do you feel Negative thoughts about yourself, other people or the world?</p>
        <div>
            <label for="ptsdn1">Yes</label>
            <input type="checkbox" id="ptsdn1" name="ptsdn1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>2.Do you feel Hopelessness about the future ?</p>
        <div>
            <label for="ptsdn2">Yes</label>
            <input type="checkbox" id="ptsdn2" name="ptsdn2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>

        <p>3. Do you feel Memory problems, including not remembering important aspects of the traumatic event?</p>
        <div>
            <label for="ptsdn3">Yes</label>
            <input type="checkbox" id="ptsdn3" name="ptsdn3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>4.Do you feel Difficulty maintaining close relationships?</p>
        <div>
            <label for="ptsdn4">Yes</label>
            <input type="checkbox" id="ptsdn4" name="ptsdn4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>5. Do you feel Feeling detached from family and friends?</p>
        <div>
            <label for="ptsdn5">Yes</label>
            <input type="checkbox" id="ptsdn5" name="ptsdn5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>6. Do you feel Lack of interest in activities you once enjoyed?</p>
        <div>
            <label for="ptsdn6">Yes</label>
            <input type="checkbox" id="ptsdn6" name="ptsdn6">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>7. Do you feel Difficulty experiencing positive emotions?</p>
        <div>
            <label for="ptsdn7">Yes</label>
            <input type="checkbox" id="ptsdn7" name="ptsdn7">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>8. Do you Feel emotionally numb?</p>
        <div>
            <label for="ptsdn8">Yes</label>
            <input type="checkbox" id="ptsdn8" name="ptsdn8">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>9. Do you feel Being easily startled or frightened?</p>
        <div>
            <label for="ptsdp1">Yes</label>
            <input type="checkbox" id="ptsdp1" name="ptsdp1">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>10. Do you feel Always being on guard for danger?</p>
        <div>
            <label for="ptsdp2">Yes</label>
            <input type="checkbox" id="ptsdp2" name="ptsdp2">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>11. Do you feel Self-destructive behavior, such as drinking too much or driving too fast?</p>
        <div>
            <label for="ptsdp3">Yes</label>
            <input type="checkbox" id="ptsdp3" name="ptsdp3">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>12. Do you feel Trouble sleeping?</p>
        <div>
            <label for="ptsdp4">Yes</label>
            <input type="checkbox" id="ptsdp4" name="ptsdp4">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>13. Do you feel Trouble concentrating?</p>
        <div>
            <label for="ptsdp5">Yes</label>
            <input type="checkbox" id="ptsdp5" name="ptsdp5">
            <label>No</label>
            <input type="checkbox" id="" name="">
        </div>
        <p>14. Do you feel Overwhelming guilt or shame?</p>
        <div>
            <label for="ptsdp6">Yes</label>
            <input type="checkbox" id="ptsdp6" name="ptsdp6">
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
	 //$_SESSION['bip']=$sco;

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
                addr="ocd.php?a=1&sco="+str;
                }
                else{
                 addr="meter.php?a=2&scr="+str+"&code=6";
                }
                window.location.href = addr;
            
        }

        </script>
    </body>
</html>
