<?php require_once "database/_dbconnect.php"; ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>project list</title>
</head>

<body>
  <div class="container ml-5">
    <h1>Project List</h1>
    <table class="table table-hover table-bordered table-striped">
      <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
          <!-- <th>#</th> -->
          <th>#</th>
          <th>PROJECT ID</th>
          <th>PROJECT NAME</th>
          <!-- <th>VIEW</th> -->
          <th>Project Logo</th>
          <th>Investor(s)</th>
          <!-- <th>Description</th> -->
          <!-- <th>Highlight</th> -->
          <!-- <th>Amenities</th> -->
          <th>Brochure</th>
          <!-- <th>BHK</th> -->
          <!-- <th>Total Floor</th> -->
          <!-- <th>Facing</th> -->
          <th>Address Line 1</th>
          <!-- <th>Address Line 2</th> -->
          <!-- <th>Country</th> -->
          <!-- <th>State</th> -->
          <!-- <th>City</th> -->
          <!-- <th>City Location</th> -->
          <!-- <th>Pin Code</th> -->
          <!-- <th>Latitude</th> -->
          <!-- <th>Longitude</th> -->
          <th>Possession By</th>
          <th>Launch Date</th>
          <!-- <th>Rera Approved</th> -->
          <th>Rera Number</th>
          <!-- <th>Minimum Price</th> -->
          <!-- <th>Maximum Price</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `project`";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        if ($result == true && $num_rows > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
              <td>
                <div class="text-info fw-bold">
                  <?php echo $row['project_id'] ; ?>
                </div>
              </td>
              <td>
                <?php echo '#' .$row['project_id']; ?>
              </td>
              <td>
              <div class="d-flex text-dark fw-bolder fs-6 align-items-center">
                <?php echo $row['project_name']; ?>
                </div>
              </td>
              <td>
                <?php echo $row['project_logo']; ?>
              </td>
              <td>
                <?php echo $row['investor']; ?>
              </td>
              <td>
                <?php echo $row['brochure']; ?>
              </td>
              <td>
                <?php echo $row['address_line_1']; ?>
              </td>
              <td>
                <?php echo $row['possession_by']; ?>
              </td>
              <td>
                <?php echo $row['launch_date']; ?>
              </td>
              <td>
                <?php echo $row['rera_number']; ?>
              </td>
            </tr>
        <?php
          }
        } else {
          echo 'No Data Available';
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>