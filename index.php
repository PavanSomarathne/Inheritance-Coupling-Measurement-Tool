<!DOCTYPE html>
<html>
<title>InheritanceTesingtest</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Raleway", sans-serif
  }
</style>

<body class="w3-light-grey w3-content" style="max-width:1600px">

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container">
      <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
        <i class="fa fa-remove"></i>
      </a>
      <img src="img/logo.png" style="width:45%;" class="w3-round"><br><br>
      <h4><b>DASHBOARD</b></h4>

    </div>
    <div class="w3-bar-block">
      <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>SIZE</a>
      <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>VARIABLE</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>METHODS</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>INHERITANCE</a>
      <a href="Coupling.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>COUPLING</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>CONTROL STRUCTURES</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>TOTAL FACTORS</a>


    </div>
    <div class="w3-panel w3-large">

    </div>
  </nav>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px">

    <!-- Header -->
    <header id="portfolio">
      <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
      <div class="w3-container">

        <div class="w3-section w3-bottombar w3-padding-16">
          <form action="?" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" />
            <button class="w3-button w3-black" style="background-color: #f44336" type="submit" name="upload" value="Upload file">CALCULATE</button>
           
          </form>

          <hr>
         
        </div>
      </div>
    </header>

    <!-- First Photo Grid-->

    <!-- Pagination -->

    <!-- Footer -->

    <body class="w3-container w3-padding-8 w3-dark-grey">
      <div class="w3-row-padding">
        <div class="w3-third">
          <h4>Complexity of a program due to Inheritance</h4>
          <style>
            #customers {
              font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 300%;
            }

            #customers td,
            #customers th {
              border: 1px solid #ddd;
              padding: 8px;
            }

            #customers tr:nth-child(even) {
              background-color: #f2f2f2;
            }

            #customers tr:hover {
              background-color: #ddd;
            }

            #customers th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: left;
              background-color: #4CAF50;
              color: white;
            }

            #inneriframe {
              height: 615px;
              font-family: Calibri;
            }
          </style>

          <script>
           

            window.addEventListener('DOMContentLoaded', function(e) {

              var iFrame = document.getElementById('inneriframe');
             

              // or, to resize all iframes:
              var iframes = document.querySelectorAll("inneriframe");
              for (var i = 0; i < iframes.length; i++) {
                resizeIFrameToFitContent(iframes[i]);
              }
            });
          </script>

          <?php
          if (isset($_POST['upload'])) {
            $file_name =  $_FILES['file']['name'];
            $file_type = $_FILES['file']['type'];
            $file_size =  $_FILES['file']['size'];
            $file_tem_loc =  $_FILES['file']['tmp_name'];
            $file_store = "upload/" . $file_name;
            $l = file($file_store);

            echo "<table width='1000'>";
            echo "<tr>
    <th>Count</th>
    <th>Class_Name</th>
    <th>NDI</th>
    <th>NIDI</th>
    <th>TI</th>
    <th>CI</th>

  </tr>";


            function getBetween($codeLine, $start, $end)
            {
              $codeLine = " " . $codeLine;
              $ini = strpos($codeLine, $start);
              
              if ($ini == 0)
                return " ";
              $ini += strlen($start);
              
              $len = strpos($codeLine, $end, $ini) - $ini;
              

              return substr($codeLine, $ini, $len); 
            }

            //Inheritance Class
            class inheri
            {
              public $name;
              public $direct;
              public $indirect;
              public $superClass;
              function __construct()
              {
                $this->name = "";
                $this->direct = 0;
                $this->indirect = 0;
                $this->superClass = null;
              }
              function set_name($name)
              {
                $this->name = $name;
              }
              function set_direct($direct)
              {
                $this->direct = $direct;
              }
              function set_indirect($indirect)
              {
                $this->indirect = $indirect;
              }
              function set_extends($var)
              {
                $this->superClass = $var;
              }
              function get_extends()
              {
                return $this->superClass;
              }
              function get_name()
              {
                return $this->name;
              }
              function get_direct()
              {
                if (is_string($this->superClass)) {
                  $i = 1;
                } else {
                  $i = 0;
                }
                return $i;
              }
              function get_indirect()
              {
                return $this->indirect;
              }
            }

            //Inheritance class end

            $count = 0;
            $classes = [];
            $inClasses = false;
            $parsed1 = null;
            $parsed1=null;
            $parsed2=null;
            $pos=null;
            $pos1=null;
            $indirect = 0;
            $tot_inheritance = 0;

            
            foreach ($l as $line_num => $line) {

              $line;
              $arr = $line;
              $parsed = getBetween($arr, "class", "{");
              $parsed1 = getBetween($arr, "class", "extends");
              $parsed2 = getBetween($arr, "extends", "{");



              $word = 'extends';
              $pos = strpos($line, $word);
              $w = 'class';
              $pos1 = strpos($line, $w);


              $direct = 0;
              $indirect = 0;
            //Finding of class name
              if (is_integer($pos1) || is_integer($pos1)) {

              if (is_integer($pos)&& is_string($parsed1)) {
               $p = $parsed1 ;
                
              }
              elseif(is_integer($pos) && is_string($parsed)){
                $p = $parsed;
              }
   
              else if(is_integer($pos1)&& is_string($parsed)){
                  $p = $parsed ;
                 
             }

                $className = $p;

                foreach ($classes as $key) {
                  if ($key->get_name() == $className) {
                    $inClasses = true;
                  }
                }

                if (!$inClasses) {

                  $classObj = new inheri;
                  $classObj->set_name($className);

                  array_push($classes, $classObj);
                }


                if ($pos == true && is_string($parsed1)) {
                  foreach ($classes as $key) {
                    if ($key->get_name() == $parsed1) {
                      $key->set_extends($parsed2);
                    }
                  }
                }
               
                
                $ci = $tot_inheritance;

              }
            }
            
            $i = 0;
            $cnt=0;
            //Function to find NIDI
            function findNidi($extend)
            {
              global $classes;
              global $cnt;
              foreach ($classes as $key) {
                if ($key->get_name() == $extend) {
                  $name1 = $key->get_extends();
                  if (!empty($name1)) {
                    $cnt++;
                    findNidi($name1);
                    
                   
                  }
                }
              }
            }
            //Call NIDI function recursively and set NIDI of the class object
           foreach ($classes as $key) {
              
              $firstName = $key->get_name();
              $name = $key->get_extends();
              if (!empty($name)) {
                $cnt++;
                findNidi($name);
                $key->set_indirect($cnt-1);
              }
              
            }

            //Printing the table with class objects in array
            foreach ($classes as $key) {
              $tot_inheritance = $key->get_direct() + $key->get_indirect();
              $i++;
              echo "<tr>
  <td width='100' bgcolor=' #ffffee' >";
              
              echo $i . "</td>

  <td width='1200' bgcolor=' #ffffe6'>";
              echo $key->get_name() . "</td> 
  

  <td width='400' bgcolor=' #ffffe6'>";
              echo $key->get_direct() . "</td>
  <td width='400' bgcolor=' #ffffe6'>";
              echo $key->get_indirect() . "</td>
  <td width='400' bgcolor=' #ffffe6'>";
              echo $tot_inheritance . "</td>
  <td width='400' bgcolor=' #ffffe6'>";
              echo $ci . "</td>";
              echo "</td>   </tr>";
            }
          

            // Test if string contains the word 

            if (move_uploaded_file($file_tem_loc, $file_store)) {

              echo "<iframe src='$file_store' width=1200 height = id='inneriframe' frameborder='0' name='frm' allowtransparency='true' style='background-color: Snow;'' src='http://zingaya.com/widget/9d043c064dc241068881f045f9d8c151' />";
            }
          }

          ?>

          <hr>


    </body>



    <!-- End page content -->
  </div>

  <script>
    // Script to open and close sidebar
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }
  </script>

</body>

</html>
