<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        
           
                <div class="row">
                <div class="col-8">
                <?php if(session()->getFlashdata('status')) {
      echo "<h5>".session()->getFlashdata('status')."</h5>";
    }
      ?>
                    <div class="card">
                    <div class="card-header">
<h3 class="text-center">Project Details <a class="btn btn-primary float-end" href="<?=base_url('addp')?> ">add projects</a></h3> 
      </div>
                        <div class="card-body">
                           <div
                            class="table-responsive"
                           >
                            <table
                                class="table table-primary"
                            >
                                <thead>
                                    <tr>
                                    <th scope="col"> ID</th>
                                        <th scope="col">project name</th>
                                        <th scope="col">status</th>
                                        <th scope="col">created_date</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php foreach($details as $row):?>
                                    <tr class="">
                                    <td><?=$row['id']?></td>
                                        <td scope="row"><?=$row['project_name']?></td>
                                        <td><?=$row['status']?></td>
                                        <td><?=$row['created_date']?></td>
                                        <td><a class="btn btn-success"  href="<?= base_url('edit/'.$row['id'])?>">update</a></td>
                                        <td><a class="btn btn-danger"  href="<?= base_url('delete/'.$row['id'])?>">delete</a></td>
                                    </tr>
<?php endforeach; ?>
                                </tbody>
                            </table>
                           </div>
                           
                        </div>
                    </div>
                </div>
                </div>
            </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>