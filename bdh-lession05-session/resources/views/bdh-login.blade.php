<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDH - login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <sesion class="container my-3">
        <form action="{{route('bdhaccount.bdhloginsubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>BDH - Login</h1>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="bdhEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" 
                            id="bdhEmail" name="bdhEmail" 
                            placeholder="bdhEmail@example.com"/>
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    <div class="mb-3">
                        <label for="bdhPass" class="form-label">Password</label>
                        <input type="password" class="form-control" 
                            id="bdhPass" name="bdhPass" 
                            placeholder="xxxx"/>
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                </div>

                <div class="card-footer">
                    <button class="btn-btn-primary">Submit</button>
                    @if (Session::has('bdh-error'))
                        <div class="alert alert-danger">
                            {{ Session::get('bdh-error') }}
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </session>
</body>
</html>
