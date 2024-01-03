<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get the Tyres</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
</head>
<body>

   <table class="table table-bordered" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Links</th>
      
    </tr>
  </thead>
        <tbody>
            <?php 
            $i=1;
            foreach($results as $value) : ?>
                <tr>
                    <th><?php echo $i++; ?></th>
                    <th><?php echo $value['id']; ?></th>
                    <th><a href="https://www.wheelbasealloys.com/alloy-wheels/<?php echo $value['year_created_page_url']; ?>"><?php echo $value['year_created_page_url']; ?></a></th>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
     <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

</body>
</html>
