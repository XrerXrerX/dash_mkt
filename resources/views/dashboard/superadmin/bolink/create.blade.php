@extends('dashboard.superadmin.layout.main')
@section('container')
    <div class="sec_box hgi-100">
        <form action="/bvbbyh0n3y88/superadmin" method="post" enctype="multipart/form-data" id="form">
            @csrf
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3> Management Data Baru
                    </h3>
                </div>
                <input class="form-control" type="hidden" id="role" name="role" value="admin" readonly>
                @if ($errors->has('role'))
                    <span class="text-danger">{{ $errors->first('role') }}</span>
                @endif
                <div class="list_form">
                    <span class="sec_label">Nama team</span>
                    <input type="text" id="nama_team" name="nama_team" placeholder="Masukkan nama_team" required>
                    <span class="sec_label">Link Login Refferal</span>
                    <input type="text" id="login" name="login" placeholder="Masukkan Link login Refferal" required>
                    @error('login')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @error('nama_team')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">username</span>
                    <input type="username" id="username" name="username" placeholder="Masukkan username" required>
                    <span class="sec_label">title</span>
                    <input type="text" id="title" name="title" placeholder="Masukkan Link title" required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Password</span>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                    <span class="sec_label">Link Daftar Refferal</span>
                    <input type="text" id="daftar" name="daftar" placeholder="Masukkan Link Daftar Refferal"
                        required>
                    @error('login')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Website</span>
                    <input type="text" id="link_website" name="link_website" placeholder="Masukkan Link link_website"
                        required>
                    @error('link_website')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <span class="sec_label">Link Whatsapp</span>
                    <input type="text" id="wa" name="wa" placeholder="Masukkan Link Whatsapp.me" required>
                    @error('wa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Facebook</span>
                    <input type="text" id="fb" name="fb" placeholder="Masukkan Link facebook" required>
                    @error('fb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <span class="sec_label">Link Instagram</span>
                    <input type="text" id="ig" name="ig" placeholder="Masukkan Link instagram" required>
                    @error('ig')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link RTP</span>
                    <input type="text" id="rtp" name="rtp" placeholder="Masukkan Link RTP" required>

                    @error('rtp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <span class="sec_label">Link LiveChat</span>
                    <input type="text" id="link_livechat" name="link_livechat" placeholder="Masukkan Link link_livechat"
                        required>

                    @error('link_livechat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Bukti Jackpot</span>
                    <input type="text" id="link_buktijp" name="link_buktijp" placeholder="Masukkan Link link_buktijp"
                        required>
                    @error('link_buktijp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <span class="sec_label">mail</span>
                    <input type="text" id="mail" name="mail" placeholder="Masukkan Link mail" required>
                    @error('mail')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    {{-- <span class="sec_label">Link Banner</span>
                    <input type="text" id="link_banner" name="link_banner" placeholder="Masukkan Link link_banner"
                        required>
                    @error('link_banner')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror --}}
                    <span class="sec_label">Artikel Bio</span>
                    <input type="text" id="artikel_bio" name="artikel_bio" placeholder="Masukkan Link artikel_bio"
                        required>
                    @error('artikel_bio')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <span class="sec_label">Lokasi</span>
                    <input type="text" id="lokasi" name="lokasi" placeholder="Masukkan Link lokasi" required>
                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Nama Streamer</span>
                    <input type="text" id="nama_streamer" name="nama_streamer" placeholder="Masukkan nama Streamer"
                        required>
                    @error('nama_streamer')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <span class="sec_label">Link Streamer</span>
                    <input type="text" id="link_streamer" name="link_streamer" placeholder="Masukkan Link streamer"
                        required>
                    @error('link_streamer')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="list_form">
                    <span class="sec_label">Upload Profile BioLink</span>
                    <input class="form-control  @error('img_profile') is-invalid @enderror" type="file" id="file"
                        name="img_profile" accept="image/*" required>

                    @error('img_profile')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <span class="sec_label">Upload Banner BioLink</span>

                    <input class="form-control  @error('banner_bio') is-invalid @enderror" type="file" id="file"
                        name="banner_bio" accept="image/*" required>
                    @error('banner_bio')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="list_form">
                    <span class="sec_label">Upload Banner Web</span>
                    <input class="form-control  @error('banner_web') is-invalid @enderror" type="file" id="file"
                        name="banner_web" accept="image/*" required>
                    @error('banner_web')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <span class="sec_label">Upload foto Streamer</span>
                    <input class="form-control  @error('banner_livestream') is-invalid @enderror" type="file"
                        id="file" name="banner_livestream" accept="image/*" required>
                    @error('banner_livestream')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Alamat</span>
                <input type="text" id="alamat" name="alamat" placeholder="Masukkan Link alamat" required>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="sec_button_form">
                <button class="sec_botton btn_submit" type="submit" id="Contactsubmit">Submit</button>
                <a href="#" id="cancel"><button type="button"
                        class="sec_botton btn_cancel">Cancel</button></a>
            </div>
        </form>
    </div>
@endsection
