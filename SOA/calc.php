<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>




<div class="cont">
          
      <?php
      if(isset($_GET['page'])){
          $page = $_GET['page'];
         if (strcmp($page,"cos")==0){
          echo '<div class="title">
            <label> COS CALCULATOR</label>
          </div>
          <div class="forms">
          <form method = "POST" action = "server.php">
          <input type="hidden" name="page" id="page" value="'.$page.'">
            <div class="form-group">
                
                <input type="text" class="form-control input" id="cosinput" name = "cosinput" aria-describedby="emailHelp" placeholder="Enter number">
                <small id="emailHelp" class="form-text text-muted">type a number and press calculate.</small>
            </div>
            <button type="submit" class="btn btn-primary" name = "cos" >Calculate</button>
          </form>
          </div>';
         }
         else if (strcmp($page,"sin")==0){ 
          echo '
          <div class="title">
            <label> SIN CALCULATOR</label>
          </div>
          <div class="forms">
          <form method = "POST" action = "server.php">
          <input type="hidden" name="page" id="page" value="'.$page.'">
            <div class="form-group">
                
                <input type="text" class="form-control input" id="sininput" name = "sininput" aria-describedby="emailHelp" placeholder="Enter number">
                <small id="emailHelp" class="form-text text-muted">type a number and press calculate.</small>
            </div>
            <button type="submit" class="btn btn-primary" name = "sin" >Calculate</button>
          </form>
          </div>';
         }


         else if (strcmp($page,"max")==0){
          echo '
          <div class="title">
            <label> MAX CALCULATOR</label>
          </div>
          <div class="forms">
          <form method = "POST" action = "server.php">
          <input type="hidden" name="page" id="page" value="'.$page.'">
            <div class="form-group">
                
                <input type="text" class="form-control input" id="xinput" name = "xinput" aria-describedby="emailHelp" placeholder="Enter number">
                <br>
                <input type="text" class="form-control input" id="yinput" name = "yinput" aria-describedby="emailHelp" placeholder="Enter number">
                <small id="emailHelp" class="form-text text-muted">type a number and press calculate.</small>
            </div>
            <button type="submit" class="btn btn-primary" name = "max" >Calculate</button>
          </form>
          </div>';
         }


         else if (strcmp($page,"min")==0){
          echo '
          <div class="title">
            <label> MIN CALCULATOR</label>
          </div>
          <div class="forms">
          <form method = "POST" action = "server.php">
          <input type="hidden" name="page" id="page" value="'.$page.'">
            <div class="form-group">
                
                <input type="text" class="form-control input" id="xinput" name = "xinput" aria-describedby="emailHelp" placeholder="Enter number">
                <br>
                <input type="text" class="form-control input" id="yinput" name = "yinput" aria-describedby="emailHelp" placeholder="Enter number">
                <small id="emailHelp" class="form-text text-muted">type a number and press calculate.</small>
            </div>
            <button type="submit" class="btn btn-primary" name = "min" >Calculate</button>
          </form>
          </div>';
         }  
         

      }
      ?>
      </div>
      <?php
      if(isset($_GET['result'])){
        $result = $_GET['result'];
        echo '<input type="text" id="disabledInput" class="form-control result" value = '.$result.' disabled>';
      }
        ?>

    </div>

</body>









  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>