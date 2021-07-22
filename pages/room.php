
<?php
    $sql = "SELECT * FROM room;";
    $result = mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['Nama']."</td>";
            echo "<td>".$row['Umur']."</td>";
            echo "<td>".$row['Alamat']."</td>";
            echo "</tr>";
        }
    }
    else{
        echo "<h2>Empty!</h2>";
    }
?>
<article>
            <div class="img-container">
              <p>#01 | Jokowi</p>
            </div>
            <div class="text">
              <h3>Name</h3>
              <p>Lorem Ipsum</p>
              <h3>Subject</h3>
              <p>Lorem Ipsum</p>
              <h3>description</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              </p>
              <button>Join!</button>
            </div>
</article>



