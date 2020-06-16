<?php  
 $connect = mysqli_connect("localhost", "root", "", "bracelet");  
 $query = "SELECT prix, count(*) as number FROM produit GROUP BY prix";  
 $result = mysqli_query($connect, $query);  
 ?> 
 
<!DOCTYPE html>
<html lang="en">

<head>
 <style type="text/css">  


.date
 { text-align: center ;
}

</style>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['prix', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["prix"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Statistiques  ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script> 
   

  
   

</head>

<body>
  
        <!-- HEADER MOBILE-->
        <header >
            
        </header>
        <!-- END HEADER MOBILE-->

     
          
        <!-- END MENU SIDEBAR-->

     
            <!-- HEADER DESKTOP-->
            <header >
              
                                      
            </header>
            <!-- END HEADER DESKTOP-->

            
                                <!--  Data table-->
                            <br><br><br><br>
                      
 




                                
                    

  <!-- <script> 
function myFunction() {
  alert("Votre Produit a été ajouté !");
  window.location="/Gestions%20des%20produits.html";
  
}
</script> -->

    <!-- Jquery JS-->
  

    <!-- Main JS-->
    

</body>

</html>
<!-- end document-->

