<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency Converter</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>

  <div class="container p-5">

    <div class="p-5 mb-4 bg-light rounded-3 mt-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Currency Converter</h1>
        <form method="GET">
      
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" name="amount" id="amount" required>
              </div>
            </div>


            <div class="col-md-6">
              <div class="mb-3">
                <label>From:</label>
                <select class="form-select" name="from" required>
                  <option value="">Select...</option>
                  <option value="usd">USD</option>
                  <option value="dop">DOP</option>
                  <option value="cad">CAD</option>
                  <option value="cop">COP</option>
                </select>
              </div>
            </div> 


            <div class="col-md-6">
              <div class="mb-3">
                <label>To:</label>
                <select class="form-select" name="to" required>
                  <option value="">Select...</option>
                  <option value="usd">USD</option>
                  <option value="dop">DOP</option>
                  <option value="cad">CAD</option>
                  <option value="cop">COP</option>
                </select>
              </div>
            </div>  
          </div>


          <div class="col-md-12">
            <div class="mb-3">
              <input type="submit" value="Change" class="btn btn-primary">
            </div>
          </div>



        </form>
      </div>
    </div>
  </div>

</body>
</html>

<?php 

 if ($_GET) {
   $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.apilayer.com/fixer/convert?to=".$_GET['from']."&from=".$_GET['to']."&amount=".$_GET['amount'],
    CURLOPT_HTTPHEADER => array(
      "Content-Type: text/plain",
      "apikey: 5qvhXqdrPTX94HedOEYEwtN9jVx5UkBf"
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET"
  ));

  $response = curl_exec($curl);

  curl_close($curl);

  $response = json_decode($response);

  if ($response->success) {
    echo "<script>
        alert('Resultado: $response->result')
    </script>";

  }
 }


 ?>