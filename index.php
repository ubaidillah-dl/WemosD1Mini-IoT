<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Sensor</title>
  <script type="text/javascript">
    $(document).ready(function(){
      setInterval(function(){
        $("#ambil_data").load('ambil_data.php');
      }, 
      1000
      );
    }
    );    
  </script>
</head>
<body>
  <div class="div1">
    <div class="div2">
      <h3>Intensitas Gas</h3>
      <div id="ambil_data" class="div3">0</div>
    </div>
  </div>
</body>
</html>