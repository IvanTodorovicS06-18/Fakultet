
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add new user</h3>
                </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-body" style="font-family: sans-serif">
                    <form action="/sluzba-save" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" @error('name') is-invalid @enderror id="name" value="{{ old('name') }}" required autocomplete="name" name="name" >
                            @error('name')
                            <p> {{$message}}</p>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="lastname">LastName</label>
                            <input type="text" class="form-control" @error('lastname') is-invalid @enderror id="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" name="lastname" >
                            @error('lastname')
                            <p> {{$message}}</p>
                            @enderror
                        </div>





                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" @error('email') is-invalid @enderror id="email" value="{{ old('email') }}" required autocomplete="email" name="email" >
                            @error('email')
                            <p> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control"  @error('password') is-invalid @enderror id="password"  value="{{ old('password') }}" required autocomplete="password" name="password" >
                            @error('password')
                            <p> {{$message}}</p>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-success" style="width: 100%">Add user </button>

                        <a href="/role-register" class="btn btn-danger" style="width: 100%">Cancel </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


