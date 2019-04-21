<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

        <?php
         $scr=$_GET['scr'];
         echo "<p id='hi'style='display:none'>".$scr."</p>";
         $code=$_GET['code'];
         echo "<p id='hii'style='display:none'>".$code."</p>";
         $a=$_GET['a'];
         echo "<p id='hiii'style='display:none'>".$a."</p>";

        ?>

<h2>Mental health meter</h2>

<table id = 'mytable'>
  <tr>
    <th>Mental Disorder</th>
    <th>Existence</th>
    <th>percentage</th>
  </tr>
  <tr>
    <td>Depression</td>
    <td>No</td>
    <td>00.00</td>
  </tr>
  <tr>
    <td>Dementia</td>
    <td>No</td>
    <td>00.00</td>
  </tr>
  <tr>
    <td>Dysthymia</td>
    <td>No</td>
    <td>00.00</td>
  </tr>
  <tr>
    <td>schizophrenia</td>
    <td>No</td>
    <td>00.00</td>
  </tr>
  <tr>
    <td>bipolar_disorder</td>
    <td>No</td>
    <td>00.00</td>
  </tr>
  <tr>
    <td>post-traumatic stress disorder</td>
    <td>No</td>
    <td>00.00</td>
  </tr>
  <tr>
    <td>obsessive-complulsive disorder</td>
    <td>No</td>
    <td>00.00</td>
  </tr>
  <tr>
    <td>specific-phobias</td>
    <td>No</td>
    <td>00.00</td>
  </tr>
  <tr>
    <td>anxiety disorders</td>
    <td>No</td>
    <td>00.00</td>
  </tr>

</table>
        <script>
            var x=document.getElementById('hi').innerHTML;
            var y=document.getElementById('hii').innerHTML;
            var z=document.getElementById('hiii').innerHTML;
   
            if(z==2){
                     if(x>=70){
		        var myTable = document.getElementById('mytable');
		        myTable.rows[y].cells[2].innerHTML = x;
		        myTable.rows[y].cells[1].innerHTML = "Yes";
		    }

            }
          /* if(z==1){
                       var dep = <?php echo $_SESSION['dep']; ?>
                       var dem = <?php echo $_SESSION['dep']; ?>
                       var dys = <?php echo $_SESSION['dep']; ?>
                       var sch = <?php echo $_SESSION['dep']; ?>
                       var bip = <?php echo $_SESSION['dep']; ?>
                       var ptsd = <?php echo $_SESSION['dep']; ?>
                       var ocd = <?php echo $_SESSION['dep']; ?>
                       var spc = <?php echo $_SESSION['dep']; ?>
                       var anx = x;
                       if(dep>=70){
		         var myTable = document.getElementById('mytable');
		         myTable.rows[1].cells[2].innerHTML = dep;
		         myTable.rows[1].cells[1].innerHTML = "Yes";
                       }
                       if(dem>=70){
		         var myTable = document.getElementById('mytable');
		         myTable.rows[2].cells[2].innerHTML = dem;
		         myTable.rows[2].cells[1].innerHTML = "Yes";
                       }
                       if(dys>=70){
		         var myTable = document.getElementById('mytable');
		         myTable.rows[3].cells[2].innerHTML = dys;
		         myTable.rows[3].cells[1].innerHTML = "Yes";
                       }
                       if(sch>=70){
		         var myTable = document.getElementById('mytable');
		         myTable.rows[4].cells[2].innerHTML = sch;
		         myTable.rows[4].cells[1].innerHTML = "Yes";
                       }
                       if(bip>=70){
		         var myTable = document.getElementById('mytable');
		         myTable.rows[5].cells[2].innerHTML = bip;
		         myTable.rows[5].cells[1].innerHTML = "Yes";
                       }
                       if(ptsd>=70){
		         var myTable = document.getElementById('mytable');
		         myTable.rows[6].cells[2].innerHTML = ptsd;
		         myTable.rows[6].cells[1].innerHTML = "Yes";
                       }
                       if(ocd>=70){
		         var myTable = document.getElementById('mytable');
		         myTable.rows[7].cells[2].innerHTML = ocd;
		         myTable.rows[7].cells[1].innerHTML = "Yes";
                       }
                       if(spc>=70){
		         var myTable = document.getElementById('mytable');
		         myTable.rows[8].cells[2].innerHTML = spc;
		         myTable.rows[8].cells[1].innerHTML = "Yes";
                       }
                       if(anx>=70){
		         var myTable = document.getElementById('mytable');
		         myTable.rows[9].cells[2].innerHTML = anx;
		         myTable.rows[9].cells[1].innerHTML = "Yes";
                       }




           }*/
        </script>

</body>
</html>

