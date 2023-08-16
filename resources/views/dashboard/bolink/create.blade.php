@extends('layout.main')
@section('container')
    <div class="sec_box hgi-100">
        <form action="/bvbbyh0n3y88/{{ $title }}" method="post" enctype="multipart/form-data" id="form">
            @csrf

            <div class="sec_form">
                <div class="sec_head_form">
                    <h3> <span>Management Data</span>
                        {{ $title }}</h3>
                </div>
                {{-- <div class="list_form">  --}}
                {{-- JADIKAN HIDDEN NAMA TEAM --}}


                <input class="form-control" type="hidden" id="role" name="role" value="admin" readonly>
                @if ($errors->has('role'))
                    <span class="text-danger">{{ $errors->first('role') }}</span>
                @endif


                {{-- </div> --}}
                {{-- 
                <input class="form-control" type="hidden" id="title" name="title" value="{{ $datauser->title }}"
                    readonly>
                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif

                <input class="form-control" type="hidden" id="artike_bio" name="artike_bio"
                    value="{{ $datauser->artike_bio }}" readonly>
                @if ($errors->has('artike_bio'))
                    <span class="text-danger">{{ $errors->first('artike_bio') }}</span>
                @endif

                <input class="form-control" type="hidden" id="artikel_web" name="artikel_web"
                    value="{{ $datauser->artikel_web }}" readonly>
                @if ($errors->has('artikel_web'))
                    <span class="text-danger">{{ $errors->first('artikel_web') }}</span>
                @endif

                <input class="form-control" type="hidden" id="meta_tag" name="meta_tag" value="{{ $datauser->meta_tag }}"
                    readonly>
                @if ($errors->has('meta_tag'))
                    <span class="text-danger">{{ $errors->first('meta_tag') }}</span>
                @endif --}}

                <div class="list_form">
                    <span class="sec_label">Team Baru</span>
                    <input type="text" id="nama_team" name="nama_team" placeholder="Masukkan nama_team" required>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                    {{-- <input type="text" class="form-control @error('nama_team') is-invalid @enderror" id="nama_team"
                        name="nama_team" required value="{{ old('nama_team', $datauser->nama_team) }}"> --}}
                    @error('nama_team')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Bukti Website</span>
                    <input type="text" id="link_website" name="link_website" placeholder="Masukkan Link link_website"
                        required>
                    {{-- <input type="text" class="form-control @error('link_website') is-invalid @enderror" id="link_website"
                        name="link_website" required value="{{ old('link_website', $datauser->link_website) }}"> --}}
                    @error('link_website')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="list_form">
                    <span class="sec_label">Link Login Refferal</span>
                    <input type="text" id="login" name="login" placeholder="Masukkan Link login Refferal" required>
                    {{-- <input type="text" class="form-control @error('login') is-invalid @enderror" id="login"
                        name="login" required value="{{ old('login', $datauser->login) }}"> --}}
                    @error('login')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Daftar Refferal</span>
                    <input type="text" id="daftar" name="daftar" placeholder="Masukkan Link Daftar Refferal"
                        required>
                    {{-- <input type="text" class="form-control @error('daftar') is-invalid @enderror" id="daftar"
                        name="daftar" required value="{{ old('daftar', $datauser->daftar) }}"> --}}
                    @error('login')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Whatsapp</span>
                    <input type="text" id="wa" name="wa" placeholder="Masukkan Link Whatsapp.me" required>
                    {{-- <input type="text" class="form-control @error('wa') is-invalid @enderror" id="wa"
                        name="wa" required value="{{ old('wa', $datauser->wa) }}"> --}}
                    @error('wa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Facebook</span>
                    <input type="text" id="fb" name="fb" placeholder="Masukkan Link facebook" required>
                    {{-- <input type="text" class="form-control @error('fb') is-invalid @enderror" id="fb"
                        name="fb" required value="{{ old('fb', $datauser->fb) }}"> --}}
                    @error('fb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Instagram</span>
                    <input type="text" id="ig" name="ig" placeholder="Masukkan Link instagram" required>
                    {{-- <input type="text" class="form-control @error('ig') is-invalid @enderror" id="ig"
                        name="ig" required value="{{ old('ig', $datauser->ig) }}"> --}}
                    @error('ig')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link RTP</span>
                    <input type="text" id="rtp" name="rtp" placeholder="Masukkan Link RTP" required>
                    {{-- <input type="text" class="form-control @error('rtp') is-invalid @enderror" id="rtp"
                        name="rtp" required value="{{ old('rtp', $datauser->rtp) }}"> --}}
                    @error('rtp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="list_form">
                    <span class="sec_label">Link LiveChat</span>
                    <input type="text" id="link_livechat" name="link_livechat" placeholder="Masukkan Link link_livechat"
                        required>
                    {{-- <input type="text" class="form-control @error('link_livechat') is-invalid @enderror" id="link_livechat"
                        name="link_livechat" required value="{{ old('link_livechat', $datauser->link_livechat) }}"> --}}
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
                    {{-- <input type="text" class="form-control @error('link_buktijp') is-invalid @enderror" id="link_buktijp"
                        name="link_buktijp" required value="{{ old('link_buktijp', $datauser->link_buktijp) }}"> --}}
                    @error('link_buktijp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- <div class="list_form">
                    <span class="sec_label">title</span>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" required value="{{ old('title', $datauser->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}
                <div class="list_form">
                    <span class="sec_label">Upload Profile BioLink</span>
                    {{-- <input type='hidden' name="oldimg_profile" value="{{ $datauser->img_profile }}"> --}}
                    <input class="form-control  @error('img_profile') is-invalid @enderror" type="file" id="file"
                        name="img_profile" accept="image/*" required>

                    {{-- <input type="text" id="img_profile" name="img_profile" placeholder="Masukkan gambar profile BioLink"
                        required> --}}

                    {{-- <input type="text" class="form-control @error('img_profile') is-invalid @enderror" id="img_profile"
                        name="img_profile" required value="{{ old('img_profile', $datauser->img_profile) }}"> --}}
                    @error('img_profile')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Upload Banner BioLink</span>

                    <input class="form-control  @error('banner_bio') is-invalid @enderror" type="file" id="file"
                        name="banner_bio" accept="image/*" required>
                    @error('banner_bio')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <span class="sec_label">Upload Banner Web</span>
                    <input class="form-control  @error('banner_web') is-invalid @enderror" type="file" id="file"
                        name="banner_web" accept="image/*" required>
                    @error('banner_web')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>
            <div class="sec_button_form">
                <button class="sec_botton btn_submit" type="submit" id="Contactsubmit">Submit</button>
                <a href="#" id="cancel"><button type="button"
                        class="sec_botton btn_cancel">Cancel</button></a>
            </div>
        </form>
    </div>
@endsection
