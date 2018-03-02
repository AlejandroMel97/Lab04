<?php
  //include("style.css");
  echo "<body style ='background-color: lightgray'>";
  echo "<center>";
  $user = $_POST["email"];
  echo "Welcome $user! Thank you for your Purchase!<br>";
  echo "Your password is: <i><strong>".$_POST["pass"];
  echo "</strong></i><br><br><br>";
  //$quantkobe = $_POST["Kobe Bryant - Laker Jersey"];
  echo "<table border = 5px>";
  //$curry = $_POST['Steph Curry'];
//   if (isset($_POST['Steph Curry'])) {
  $kobe = $_POST['Kobe_Bryant'];
  $shipping = $_POST['shipping'];
  if ($_POST['shipping'] == "$50.00 Over night")
  {
    $shipping = "Over night";
	$shipcost = 50;
  }
  else if ($_POST['shipping'] == "Free 7 day")
  {
    $shipcost = 0;
	$shipping = "Free 7 day";
  }
  else {
    $shipcost = 5;
	$shipping = "Three day Shipping";
  }
  $curry = $_POST['Steph_Curry'];
  $lebron = $_POST['Lebron_James'];
  $ku = $_POST['Paul_Pierce'];
  $subtotalK = $kobe*80;
  $subtotalC = $curry*120;
  $subtotalL = $lebron*130;
  $subtotalP = $ku*200;
  $total = $shipcost+$subtotalK+$subtotalL+$subtotalP+$subtotalC;
// }
    echo "<tr align= center>";
      echo "<th bgcolor='lightgreen'>   </th>";
      echo "<th bgcolor='lightgreen'>Quantity</th>";
      echo "<th bgcolor='lightgreen'>Cost Per Item</th>";
      echo "<th bgcolor='lightgreen'>Sub Total</th>";
    echo "</tr>";
    echo "<tr align= center>";
      echo "<td bgcolor='lightgreen'><strong>Kobe Jersey</strong></td>";
      echo "<td bgcolor='lightblue'>" . $kobe . "</td>";
      echo "<td bgcolor='lightblue'>$80.00</td>";
      echo "<td bgcolor='lightblue'> $$subtotalK.00 </td>";
    echo "</tr>";
    echo "<tr align= center>";
      echo "<td bgcolor='lightgreen'><strong>Curry Jersey</stong></td>";
      echo "<td bgcolor='lightblue'>" . $curry . "</td>";
      echo "<td bgcolor='lightblue'>$120.00</td>";
      echo "<td bgcolor='lightblue'> $$subtotalC.00 </td>";
    echo "</tr>";
    echo "<tr align= center>";
      echo "<td bgcolor='lightgreen'><strong>Lebron Jersey</strong></td>";
      echo "<td bgcolor='lightblue'>" . $lebron . "</td>";
      echo "<td bgcolor='lightblue'>$130.00</td>";
      echo "<td bgcolor='lightblue'> $$subtotalL.00 </td>";
    echo "</tr>";
    echo "<tr align= center>";
      echo "<td bgcolor='lightgreen'><strong>KU Jersey</strong></td>";
      echo "<td bgcolor='lightblue'>" . $ku . "</td>";
      echo "<td bgcolor='lightblue'>$200.00</td>";
      echo "<td bgcolor='lightblue'> $$subtotalP.00 </td>";
    echo "</tr>";
    echo "<tr align= center>";
      echo "<td bgcolor='lightgreen'><strong>Shipping</strong></td>";
      echo "<td  bgcolor='lightblue' colspan='2'>" . $shipping . "</td>";
      echo "<td bgcolor='lightblue'> $$shipcost.00 </td>";
    echo "</tr>";
    echo "<tr align= center>";
      echo "<td bgcolor='lightgreen' colspan='3'><strong>Total cost</strong></td>";
      echo "<td bgcolor='lightgreen'> <strong>$$total.00 </strong></td>";
      //echo "<td>1" .$shipping+$subtotalK+$subtotalL+$subtotalP+$subtotalC. "</td>";
    echo "</tr>";

  echo "</table>";
  echo "</center>";

//     <th>Lastname</th>
//     <th>Age</th>
//   </tr>
//   <tr>
//     <td>Jill</td>
//     <td>Smith</td>
//     <td>50</td>
//   </tr>
//   <tr>
//     <td>Eve</td>
//     <td>Jackson</td>
//     <td>94</td>
//   </tr>
// </table>
?>
