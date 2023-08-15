@extends('layout.main')
@section('container')
    <div class="sec_box hgi-100">
        <form action="/bvbbyh0n3y88/boszoya/{{ $title }}" method="post" enctype="multipart/form-data" id="form">
            @method('put')
            @csrf

            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $title }}</h3>
                    <span>Management Data</span>
                </div>
                {{-- <div class="list_form">  --}}
                {{-- JADIKAN HIDDEN NAMA TEAM --}}


                {{-- <input class="form-control" type="hidden" id="nama_team" name="nama_team" value="{{ $bo_link->nama_team }}"
                    readonly>
                @if ($errors->has('nama_team'))
                    <span class="text-danger">{{ $errors->first('nama_team') }}</span>
                @endif --}}


                {{-- </div> --}}

                {{-- <input class="form-control" type="hidden" id="title" name="title" value="{{ $datauser->title }}"
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

                <input class="form-control" type="hidden" id="nama_team" name="nama_team" value="{{ $datauser->nama_team }}"
                    readonly>
                @if ($errors->has('nama_team'))
                    <span class="text-danger">{{ $errors->first('nama_team') }}</span>
                @endif




                <div class="list_form">
                    <span class="sec_label">Link Login Refferal</span>
                    {{-- <input type="text" id="login" name="login" placeholder="{{ $datauser->login }}" required> --}}
                    <input type="text" class="form-control @error('login') is-invalid @enderror" id="login"
                        name="login" required value="{{ old('login', $datauser->login) }}">
                    @error('login')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Daftar Refferal</span>
                    {{-- <input type="text" id="daftar" name="daftar" placeholder="{{ $datauser->daftar }}" required> --}}
                    <input type="text" class="form-control @error('daftar') is-invalid @enderror" id="daftar"
                        name="daftar" required value="{{ old('daftar', $datauser->daftar) }}">
                    @error('login')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Whatsapp</span>
                    {{-- <input type="text" id="wa" name="wa" placeholder="{{ $datauser->wa }}" required> --}}
                    <input type="text" class="form-control @error('wa') is-invalid @enderror" id="wa"
                        name="wa" required value="{{ old('wa', $datauser->wa) }}">
                    @error('wa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Facebook</span>
                    {{-- <input type="text" id="fb" name="fb" placeholder="{{ $datauser->fb }}" required> --}}
                    <input type="text" class="form-control @error('fb') is-invalid @enderror" id="fb"
                        name="fb" required value="{{ old('fb', $datauser->fb) }}">
                    @error('fb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Instagram</span>
                    {{-- <input type="text" id="ig" name="ig" placeholder="{{ $datauser->ig }}" required> --}}
                    <input type="text" class="form-control @error('ig') is-invalid @enderror" id="ig"
                        name="ig" required value="{{ old('ig', $datauser->ig) }}">
                    @error('ig')
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
                    <span class="sec_label">upload profil</span>
                    <input type='hidden' name="oldimg_profile" value="{{ $datauser->img_profile }}">

                    {{-- <input type="text" id="img_profile" name="img_profile" placeholder="{{ $datauser->img_profile }}"
                        required> --}}
                    <input type="text" class="form-control @error('img_profile') is-invalid @enderror" id="img_profile"
                        name="img_profile" required value="{{ old('img_profile', $datauser->img_profile) }}">
                    @error('img_profile')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">upload banner profil</span>
                    <input type='hidden' name="oldbanner_bio" value="{{ $datauser->banner_bio }}">
                    {{-- <input type="text" id="banner_bio" name="banner_bio" placeholder="{{ $datauser->banner_bio }}" required> --}}
                    <input type="text" class="form-control @error('banner_bio') is-invalid @enderror" id="banner_bio"
                        name="banner_bio" required value="{{ old('banner_bio', $datauser->banner_bio) }}">
                    @error('banner_bio')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">upload banner Web</span>
                    <input type='hidden' name="oldbanner_web" value="{{ $datauser->banner_web }}">
                    {{-- <input type="text" id="banner_web" name="banner_web" placeholder="{{ $datauser->login }}" required> --}}
                    <input type="text" class="form-control @error('banner_web') is-invalid @enderror" id="banner_web"
                        name="banner_web" required value="{{ old('banner_web', $datauser->banner_web) }}">
                    @error('banner_web')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="sec_button_form">
                <button class="sec_botton btn_submit" type="submit" id="Contactsubmit">Submit</button>
                <a href="#" id="cancel"><button type="button" class="sec_botton btn_cancel">Cancel</button></a>
            </div>
        </form>
    </div>
@endsection
