<main class="container">
    <div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
        <div class="card-header">Form Registrasi</div>
        <div class="card-body">
            <form action="">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" required autofocus />
                <small class="form-text text-danger">Nama harus diisi.</small>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" required />
                <small class="form-text text-danger">Email harus diisi.</small>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" required />
                <small class="form-text text-danger">Password harus diisi.</small>
            </div>
            <div class="form-group">
                <label for="">Konfirmasi Password</label>
                <input type="password" class="form-control" required />
                <small class="form-text text-danger">Konfirmasi Password harus sama.</small>
            </div>

            <button type="submit" class="btn btn-info">Register</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</main>