<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haltev Tes Frontend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                          Input Data Array 
                        </div>
                        <div class="card-body">
                          <form action="" method="post">
                              <div class="form-group mb-3">
                                <label for="">Masukkan Data (Pisahkan dengan koma)</label>
                                <textarea name="dataArray" id="" cols="30" rows="10" class="form-control"></textarea>
                              </div>
                              <div class="form-group mb-3">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                              </div>
                            </div>
                          </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 

      function sortDesc($data) {
        $dataArray = explode(",", $data);
        $dataArray = array_map('trim', $dataArray);
        arsort($dataArray);
        return $dataArray;
      }

      if(isset($_POST['submit'])){
        $dataArray =  $_POST['dataArray'];

        $sortedData = sortDesc($dataArray);

        echo "Data array sebelum di urutkan ". $dataArray . "<br>"; 
        echo "Data Array sesudah di urutkan ". implode(",", $sortedData)."<br>";
        print_r($sortedData);
      }
    ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>