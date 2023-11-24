<body>
    <section class="vh-100">
        <div class="overflow-hidden">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 my-4 container px-md-0 px-4">
                    <div>
                        <h2>Login</h2>
                        <p class="opacity-50">
                            Masukkan username dan password anda untuk login
                        </p>
                    </div>

                    <form class="mt-5">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control py-4 rounded-4" placeholder="Enter Username" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control py-4 rounded-4" placeholder="Enter Password" />
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 mt-3">
                            login
                        </button>
                    </form>
                </div>
                <div class="col-md-6 d-lg-block d-md-none d-none">
                    <img src="<?= base_url(); ?>assets/images/login.png" alt="image" class="img-fluid vh-100 w-100" style="object-fit: cover; object-position: left" />
                </div>
            </div>
        </div>
    </section>