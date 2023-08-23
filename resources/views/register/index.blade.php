<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/utama/g21-icon.ico">
    <title>register | L21</title>
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <section class="containterlogin">
        <form action="/bvbbyh0n3y88/register" method="POST">
            @csrf
            <div class="loginpart">
                <img src="/assets/img/utama/Logo-Lotto21.png" alt="logo">
                <div class="formlogin">
                    <div class="headformlogin">
                        <h1>REGISTER</h1>
                        <p>This restricted file </p>
                        <p>just only person that have permit only !</p>
                    </div>
                    <div class="listformlogin">
                        <span class="titleinput">Nama Team</span>
                        <div class="groupinputlogin">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                            <input ttype="nama_team" name="nama_team"
                                class="form-control  @error('nama_team') is-invalid @enderror" id="nama_team"
                                placeholder="nama_team" autofocus required value="{{ old('nama_team') }}">
                        </div>
                        @error('nama_team')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="listformlogin">
                        <span class="titleinput">Username</span>
                        <div class="groupinputlogin">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                            <input ttype="username" name="username"
                                class="form-control  @error('username') is-invalid @enderror" id="username"
                                placeholder="username" autofocus required value="{{ old('username') }}">
                        </div>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="listformlogin">
                        <span class="titleinput">Password</span>
                        <div class="groupinputlogin">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                            </svg>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                        </div>
                    </div>
                    <div class="listformlogin">
                        <span class="titleinput">role</span>
                        <div class="groupinputlogin">

                            <select class="form-select @error('role') is-invalid @enderror" name="role"
                                id="role" required>
                                <!-- <option value = "100">Pilih BO</option> -->
                                <option value="" selected>Pilih Role</option>
                                <option value="superadmin">SuperAdmin</option>
                                <option value="captain">Captain</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        @error('role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="cupbtn primary">Register</button>
                    <div class="copyright">
                        <p>© Copyright 2010 - 2023 L21 All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script src="/assets/script.js"></script>
</body>

</html>
