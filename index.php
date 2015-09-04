<?php 
include 'includes/header.php'; 
include 'includes/functions.php'; 
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <h1>Loan Calculator</h1>
            </div>
        </div>
        <form action="result.php" method="post" class="form-horozontal">
            <div class="row">
                <div class="col-md-4">
                     Name: <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-4">E-mail: <input type="email" class="form-control" name="email"></div>
                <div class="col-md-4">
                    Bootcamp: 
                        <select class="form-control" name="bootcamp">
                            <option value=""></option>
                              <option value="Front-End (Javscript) Bootcamp">Front-End</option>
                              <option value="Part-Time Front-End Bootcamp">PTBC</option>
                              <option value="Java Bootcamp">Java</option>
                              <option value="iOS Bootcamp">iOS</option>
                              <option value=".NET/C# Bootcamp">.NET/C#</option>
                        </select>
                </div>
            </div>
            <br>
            <div class="col-md-4 col-md-offset-4">   
                <!-- Tuition:
                    <select class="form-control" name="tuition">
                      <option value="6500">$6,500</option>
                      <option value="7500" selected>$7,500</option>
                      <option value="8500">$8,500</option> 
                    </select><br> -->
                Scholarship/discount: 
                    <select class="form-control" name="discount">
                        <option value="0" selected>$0</option>
                         <option value="250">$250</option>
                         <option value="500">$500</option>
                         <option value="800">$800</option>
                         <option value="1000">$1,000</option>
                         <option value="1500">$1,500</option>   
                    </select><br>
                Deposit: 
                    <select class="form-control" name="deposit">
                        <option value="0" selected>$0</option>
                         <option value="500">$500</option>
                         <option value="800">$800</option>
                         <option value="1000">$1,000</option>
                         <option value="1100">$1,100</option>
                         <option value="1200">$1,200</option>
                         <option value="1300">$1,300</option>
                         <option value="1400">$1,400</option>
                         <option value="1500">$1,500</option>  
                         <option value="2000">$2,000</option>
                         <option value="2500">$2,500</option> 
                         <option value="3000">$3,000</option>  
                    </select><br>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox"> Paid?
                        </label>
                    </div>
                Interest Rate Per Year: 
                    <select class="form-control" name="apr">
                        <option value="0" selected>0%</option>
                        <option value="1">1%</option>
                         <option value="2">2%</option>
                         <option value="3">3%</option>
                         <option value="4">4%</option>
                         <option value="5">5%</option>
                         <option value="6">6%</option>
                         <option value="7">7%</option>
                         <option value="8">8%</option>
                         <option value="9">9%</option>
                         <option value="10">10%</option>
                         <option value="11">11%</option>
                         <option value="12">12%</option>
                         <option value="13">13%</option>
                         <option value="14">14%</option>
                         <option value="15">15%</option>
                         <option value="16">16%</option>
                         <option value="17">17%</option>
                         <option value="18">18%</option>   
                    </select><br>
                Periods: 
                    <select class="form-control" name="periods">
                      <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>
                         <option value="7">7</option>
                         <option value="8">8</option>
                         <option value="9">9</option>
                         <option value="10">10</option>
                         <option value="11">11</option>
                         <option value="12" selected>12</option>
                         <option value="13">13</option>
                         <option value="14">14</option>
                         <option value="15">15</option>
                         <option value="16">16</option>
                         <option value="17">17</option>
                         <option value="18">18</option>   
                    </select><br>
                Grace Periods: 
                    <select class="form-control" name="gPeriods">
                     <option value="0" selected>0</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                    </select><br>
                Grace Amount: 
                    <select class="form-control" name="gAmount">
                     <option value="0" selected>0</option>
                     <option value="100">$100</option>
                     <option value="150">$150</option>
                     <option value="200">$200</option>
                     <option value="250">$250</option>
                     <option value="300">$300</option>
                    </select><br>
                <input type="submit" class="btn btn-default">
            </form>
        </div>
    </div> <!-- container -->
<br>
</body>
</html>






