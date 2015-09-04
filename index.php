<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loan Calculator</title>
</head>
<body>
    <form action="result.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Bootcamp: <input type="text" name="bootcamp"><br>
        Tuition:
            <select name="tuition">
              <option value="6500">$6,500</option>
              <option value="7500" selected>$7,500</option>
              <option value="8500">$8,500</option> 
            </select><br>
        Scholarship/discount: 
        <select name="discount">
                <option value="0" selected>$0</option>
                 <option value="250">$250</option>
                 <option value="500">$500</option>
                 <option value="800">$800</option>
                 <option value="1000">$1,000</option>
                 <option value="1500">$1,500</option>   
            </select><br>
        Deposit: 
            <select name="deposit">
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
        Interest Rate Per Year: 
            <select name="apr">
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
            <select name="periods">
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
            </select><br><br>
        Grace Periods: 
            <select name="gPeriods">
             <option value="0" selected>0</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
            </select><br>
        Grace Amount: 
            <select name="gAmount">
             <option value="0" selected>0</option>
             <option value="100">$100</option>
             <option value="150">$150</option>
             <option value="200">$200</option>
             <option value="250">$250</option>
             <option value="300">$300</option>
            </select><br>
        <input type="submit">
    </form>
</body>
</html>






