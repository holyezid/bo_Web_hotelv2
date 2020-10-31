<?php
include_once 'include/class.user.php';
$user=new User();


if(isset($_REQUEST[ 'submit']))
{
    extract($_REQUEST);
    $result=$user->add_room($roomname, $room_qnty, $no_bed, $bedtype,$facility,$price);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('Room Added Succesfully');
         </script>";
    }
    else
    {
         echo $result;
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Panel Administrativo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reg.css" type="text/css">

</head>

<body>
    <div class="container">
        <div class="well">
            <h2>Adicionar categoria (cuarto)</h2>
            <hr>
            <form action="" method="post" name="room_category">
                <div class="form-group">
                    <label for="roomname">Tipo:</label>
                    <input type="text" class="form-control" name="roomname" placeholder="super delux" required>
                </div>
                 <div class="form-group">
                    <label for="qty">Cantidad de cuartos:</label>&nbsp;
                    <select name="room_qnty">
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
                        <option value="10">11</option>
                          <option value="10">12</option>
                            <option value="10">13</option>
                              <option value="10">14</option>
                                <option value="10">15</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="bed">Numero de camas:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="no_bed">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="2">3</option>
                      <option value="2">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bedtype">Tipo cama:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <select name="bedtype">
                      <option value="single">Sencilla</option>
                      <option value="double">Doble</option>
                      <option value="double">King</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Facility">Descripcion</label>
                    <textarea class="form-control" rows="5" name="facility"></textarea>
                </div>
               <div class="form-group">
                    <label for="price">Diaria:</label>
                    <input type="text" class="form-control" name="price" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary button" name="submit" value="Add Room">Adicionar</button>

               <br>
                <div id="click_here">
                    <a href="../admin.php">Back a panel Administrativo</a>
                </div>


            </form>
        </div>
    </div>

</body>

</html>
