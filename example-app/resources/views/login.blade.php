<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<Body>
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh"  id="login">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form  method="POST" action="/login" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control mt-2" name="usuario">
                                {{$errors->has('usuario')?$errors->first('usuario'):''}}
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control mt-2" name="senha">
                                {{$errors->has('senha')?$errors->first('senha'):''}}
                            </div >

                            <button type="submit" id="login" class="btn btn-primary mt-2">login</button>
                        </form>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('Edit'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
            @endif
        </div>
    </div>
</body>