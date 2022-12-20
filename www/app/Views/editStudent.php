<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD Students</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="modal-content">
                <form action="../updateStudent" method="post" enctype="multipart/form-data">
                    <input name="id" type="hidden" value="<?= $student['id'] ?>">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Student</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" required value="<?= $student['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?= $student['address'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="form-control" name="file" accept="image/jpeg">
                        </div>
                        <div class="form-group">
                            <img width="100px" src="<?= isset($student['path']) ? '/public/' . $student['path'] : 'https://icon-library.com/images/unknown-person-icon/unknown-person-icon-4.jpg' ?>" style="border-radius:50px;" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="http://localhost/public" class="button">Back</a>
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>