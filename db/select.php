<?php
include "abaccess2.php";
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 $output = '';
 $sql = "SELECT * FROM survey ORDER BY id DESC";
 $result = mysqli_query($connect, $sql);
 $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">
                <tr>
                     <th width="10%">Id</th>
                     <th width="40%">Full Name</th>
                     <th width="40%">Favorite</th>
                     <th width="10%">Delete</th>
                </tr>';
 $rows = mysqli_num_rows($result);
 if($rows > 0)
 {

      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td>'.$row["id"].'</td>
                     <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row["name"].'</td>
                     <td class="favorite" data-id2="'.$row["id"].'" contenteditable>'.$row["favorite"].'</td>
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>
                </tr>
           ';
      }
      $output .= '
           <tr>
                <td></td>
                <td id="name" contenteditable></td>
                <td id="favorite" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
           </tr>
      ';
 }
 else
 {
      $output .= '
				<tr>
					<td></td>
					<td id="name" contenteditable></td>
					<td id="favorite" contenteditable></td>
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
			   </tr>';
 }
 $output .= '</table>
      </div>';
 echo $output;
 ?>
