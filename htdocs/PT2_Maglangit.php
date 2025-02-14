<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Activity 2 - SET C: Expansion Project</title>
<style type="text/css">
body,td,th {
  font-family: Arial, Helvetica, sans-serif;
  color:rgb(13, 114, 114);
  font-size: 12px;
}
.style1 {color:rgb(248, 6, 6)}
.style2 {
  color:rgba(74, 163, 214, 0.82);
  font-weight: bold;
}
.style3 {color:rgb(231, 99, 18)}
.style7 {color:rgb(3, 150, 255); font-style: italic; }
body {
  background-color: black;
}
.style8 {color:white;}
  #low {
    color: white;
  }

</style>
</head>

<body>
<p>&nbsp;</p>
<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#1230">
  <tbody>
    <tr>
      <td>
        <h1 align="center" class="style8">Public Library Expansion Project</h1>
        <h2 align="center" class="style1">Cost Estimates</h2>
        <table width="82%" border="0" align="center" cellpadding="5" cellspacing="0">
          <tbody>
            <tr>
              <th width="23%" height="31" bgcolor="#CCCCCC" scope="col">Expenditures</th>
              <th width="18%" align="right" bgcolor="#CCCCCC" scope="col">Estimated Cost</th>
              <th width="19%" align="right" bgcolor="#CCCCCC" scope="col">10% Increase</th>
              <th width="19%" align="right" bgcolor="#CCCCCC" scope="col">15% Increase</th>
              <th width="21%" align="right" bgcolor="#CCCCCC" scope="col">20% Increase</th>
            </tr>
            <?php
            $items = array(
                "Lumber" => 150000.00,
                "Concrete" => 78000.00,
                "Drywall" => 69000.00,
                "Paint" => 12000.00,
                "Miscellaneous" => 20000.00
            );

            foreach ($items as $item => $cost) {
                echo "<tr bgcolor='" . ($item == "Lumber" || $item == "Drywall" || $item == "Paint" ? "#FFFFCC" : "#CCFFFF") . "'>";
                echo "<td align='center'>" . $item . "</td>";
                echo "<td align='right'>$ " . number_format($cost, 2) . "</td>";

                for ($i = 10; $i <= 20; $i += 5) {
                    $increase = $cost * ($i / 100);
                    $total_cost = $cost + $increase;
                    echo "<td align='right'><span class='style7'>$ " . number_format($total_cost, 2) . "</span></td>";
                }
                echo "</tr>";
            }
            ?>
            <tr>
              <td align="right"><strong>Total Expenditures:</strong></td>
              <td align="right"><span class="style2" >$ <?php 
                $total = 0;
                foreach ($items as $cost){
                    $total += $cost;
                }
                echo number_format($total, 2);
              ?></span></td>
              <?php
              for ($i = 10; $i <= 20; $i += 5) {
                  $total_increased = 0;
                  foreach ($items as $cost){
                      $total_increased += $cost + ($cost * ($i/100));
                  }
                  echo "<td align='right'><span class='style3'><span class='style2'>$ ". number_format($total_increased, 2) ."</span></span></td>";
              }
              ?>
            </tr>
            <tr>
              <td colspan="5" align="right"><h4 id="low">Created by: <em>Joseth Maglangit</em></h4></td>
            </tr>
          </tbody>
        </table>        
        <p align="center" class="style1">&nbsp;</p>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html
