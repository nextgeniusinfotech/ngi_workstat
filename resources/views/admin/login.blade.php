<x-admin.layout>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5"><img class="img-fluid bg-center"
                        src="{{ asset('admin/assets/images/login/sign_up_logo.png') }}" style="width: 800px; position: absolute; top:30%" class="img-fluid" alt="looginpage"></div>
                <div class="col-xl-7 p-0">
                    <div class="login-card">
                        <form action="{{ route('admin.signin') }}" method="POST" class="theme-form login-form">
                            @csrf
                            @if (Session::has('error'))
                                <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                                    {{ Session::get('error') }}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <h4>Login</h4>
                            <h6>Welcome back! Log in to your account.</h6>
                            <div class="form-group">
                                <label>Username</label>
                                <div class="input-group"><span class="input-group-text"><i
                                            class="icon-email"></i></span>
                                    <input class="form-control @error('username') is-invalid @enderror" type="text"
                                        name="username" placeholder="Enter username">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        name="password" placeholder="*********">
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign
                                    in</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin.layout>
