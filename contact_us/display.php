        <?php
        include'db.php';
        $stmt = $dbcon->prepare('SELECT * FROM feedback ORDER BY id desc Limit 0,5');
        $stmt->execute();
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?> 
          <?php if($mszr==2) { ?>
         <div class="notfis1">
          <a href="view.php?view_id=<?php echo $row['id']; ?>" style="text-decoration: none;">
         <h4 style="color: blue"><?php echo substr($name, 0,25); ?></h4>
          <p style="color: black;"><?php echo substr($message, 0,80); ?></p>
        </a>
   </div>
      <?php } else { ?>
   <div class="notfis2">
  <a href="view.php?view_id=<?php echo $row['id']; ?>" style="text-decoration: none;">
         <h4 style="color: blue"><?php echo substr($name, 0,25); ?></h4>
          <p style="color: black;"><?php echo substr($message, 0,80); ?></p>
        </a>
  </div>
            <?php
        }
        } 
        ?>