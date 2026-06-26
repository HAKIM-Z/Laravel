@include('ecomm.layout.navbar')

<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <div class="register-form">
                    <div class="title">
                        <h3>No Account? Register</h3>
                        <p>
                            Registration takes less than a minute but gives you
                            full control over your orders.
                        </p>

                    </div>


                    <form class="row" action="{{route('user.register')}}" method="post">
                        @csrf

                        <div class="col-sm-6">
                            @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div class="form-group">
                                <label for="reg-fn"> Name</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    id="reg-fn"
                                    name="name"
                                />
                            </div>
                        </div>


                        <div class="col-sm-6">
                             @error('email')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div class="form-group">
                                <label for="reg-email">E-mail</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    id="reg-email"
                                    name="email"
                                />
                            </div>
                        </div>


                        <div class="col-sm-6">
                             @error('password')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div class="form-group">
                                <label for="reg-pass">Password</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    id="reg-pass"
                                    name="password"
                                />
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-pass-confirm"
                                    >Confirm Password</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    id="reg-pass-confirm"
                                    name="confirm"
                                />
                            </div>
                        </div>


                        <div class="button">
                            <button class="btn" type="submit">Register</button>
                        </div>


                        <p class="outer-link">
                            Already have an account?
                            <a href="login.html">Login Now</a>
                        </p>


                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@include('ecomm.layout.footer')
