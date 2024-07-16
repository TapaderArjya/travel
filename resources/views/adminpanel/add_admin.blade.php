<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <title>-Tourist-</title>
</head>

<body>
  <h2 class="text-success text-center" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Add New Admin</h2>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
              <div class="card-body">

                <form action="new_admin" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required="" />
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required="" />
                  </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="" />
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile" required="" />
                      </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="" />
                    </div>
                    <div class="form-group">
                      <label for="password">Photo</label>
                      <input type="file" class="form-control" id="image" placeholder="Photo" name="image" required="" />
                    </div>
                      <button class="btn btn-success" type="submit"> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>