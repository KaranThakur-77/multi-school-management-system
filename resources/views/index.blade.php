<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <nav class="navbar navbar-light bg-light mb-4">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">Multi-School Management System</span>
                    </div>
                </nav>
                <div class="">
                    <h2 class="text-center"> LOGIN AS </h2>
                    <div class="d-flex justify-content-center align-items-center gap-4" style="height: 80vh;">

                        <a class="btn btn-dark  text-warning" href="{{ route('admin.login') }}">School Admin</a>
                        <a href="{{ route('teacher.login') }}" class="btn btn-dark  text-warning">Staff</a>
                        <a href="{{ route('account.login') }}" class="btn btn-dark text-warning">Student/Parent</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
