<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="containert mt-2 ms-4">
  <div class="row">
                <div class="col-4">
    <div class="card">
        <div class="card-header text-center">
<h3>Add Project</h3>
        </div>
        <div class="card-body">
<form action="<?= base_url('update/'.$details['id'])?>" method="post" enctype='multipart/form-data'>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Id</label>
  <input type="text" class="form-control" name="id" id="exampleFormControlInput1" value="<?=$details['id'] ?>" placeholder="id">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">project name</label>
  <input type="text" class="form-control" name="project_name" id="exampleFormControlInput1" value="<?=$details['project_name'] ?>" placeholder="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">status</label>
  <input type="text" class="form-control" name="status" id="exampleFormControlInput1" value="<?=$details['status'] ?>" placeholder="status">
</d
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Created_date</label>
  <input type="text" class="form-control" name="created_date" id="exampleFormControlInput1"value="<?=$details['created_date'] ?>"  placeholder="created_date" readonly>
</div>

        </div>
        <div class="card-footer ">

       <button type="submit" class="btn btn-primary float-end">Update</button>
        </div>
        </form>
    </div>
  </div>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>