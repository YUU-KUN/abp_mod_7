<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script
src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </head>
  <body style="width:95%">
    <div class="row justify-content-center" style="margin-top:13%">
    <div class="col-3 border">
           <form style="margin:20px" method="POST" action="/auth">
           @csrf
           <div class="form-group">
           <label for="email">Email</label>
           <input type="email" name="em" class="form-control" />
           </div>
           <div class="form-group">
            <label>Password</label>
           <input type="password" name="pwd" class="form-control" />
           </div>
           <div style="text-align:center">
           <button class="btn btn-success">Login</button>
           </div>
           </form>
</div>
    </div>
  </body>
</html>