<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
  <title>-Tourist-</title>

    @if(session('msg'))
<script>
   alert("Invalid details");
</script>
 @endif

 @if(session('fail'))
 <script>
  alert("Please login first....")
 </script>
  @endif

  @if(session('logout'))
 <script>
  alert("You have successfully logged out......")
 </script>
  @endif
 
</head>
<body>
  <h2 class="text-success text-center" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Admin Login</h2>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
              <div class="card-body">

                <form action="admin_login" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Username" name="username" required="" />
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="" />
                    </div>
                      <button class="btn btn-primary" type="submit"> Login</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>