<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="mb-4"><i class="bi bi-person bg-dark me-1 text-white h1 rounded-circle py-2 px-3"></i></div>
                        <form action="#">
                            <div class="form-group">
                                <label class="form-label" for="fullname">Full Name
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-lg" name="fullname" placeholder="Full Name" disabled>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" disabled>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>