@extends('dashboard.superadmin.layout.main')
@section('container')
    <div class="sec_box hgi-100">
        <form action="/bvbbyh0n3y88/superadmin/{{ $title }}" method="post" enctype="multipart/form-data" id="form">
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

            <input class="form-control" type="hidden" id="artike_bio" name="artike_bio" value="{{ $datauser->artike_bio }}" readonly>
            @if ($errors->has('artike_bio'))
            <span class="text-danger">{{ $errors->first('artike_bio') }}</span>
            @endif

            <input class="form-control" type="hidden" id="artikel_web" name="artikel_web" value="{{ $datauser->artikel_web }}" readonly>
            @if ($errors->has('artikel_web'))
            <span class="text-danger">{{ $errors->first('artikel_web') }}</span>
            @endif

            <input class="form-control" type="hidden" id="meta_tag" name="meta_tag" value="{{ $datauser->meta_tag }}" readonly>
            @if ($errors->has('meta_tag'))
            <span class="text-danger">{{ $errors->first('meta_tag') }}</span>
            @endif --}}

                <input class="form-control" type="hidden" id="nama_team" name="nama_team" value="{{ $title }}"
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
                    <span class="sec_label">Update Title BioLink</span>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" required value="{{ old('title', $datauser->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
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
                @if (auth()->user()->role === 'superadmin' || auth()->user()->role === 'captain')
                    <div class="list_form">
                        <span class="sec_label">livestream</span>
                        <select class="sec_selected @error('livestream') is-invalid @enderror" name="nama_streamer"
                            id="nama_streamer" required>
                            <option value="{{ $datauser->nama_streamer }}" selected readonly>
                                {{ $datauser->nama_streamer }}
                            </option>
                            @foreach ($total_stream as $teamValue)
                                <option value="{{ $teamValue }}">{{ $teamValue }}</option>
                            @endforeach

                        </select>
                        <span class="sec_label">Link Streamer</span>
                        {{-- <input type="text" id="link_streamer" name="link_streamer" placeholder="{{ $datauser->link_streamer }}" required> --}}
                        <input type="text" class="form-control @error('link_streamer') is-invalid @enderror"
                            id="link_streamer" name="link_streamer" required
                            value="{{ old('link_streamer', $linkstream->link_streamer) }}">
                        @error('link_streamer')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                @endif

                <div class="list_form">
                    <span class="sec_label">Link Website</span>
                    <input type="text" class="form-control @error('link_website') is-invalid @enderror" id="link_website"
                        name="link_website" required value="{{ old('link_website', $datauser->link_website) }}">
                    @error('link_website')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="list_form">
                    <span class="sec_label">Profile BioLink </span>
                    <input type='hidden' name="oldimg_profile" value="{{ $datauser->img_profile }}">
                    {{-- <input class="form-control  @error('img_profile') is-invalid @enderror" type="file" id="file"
                        name="img_profile" accept="image/*" required> --}}

                    {{-- <input type="text" id="img_profile" name="img_profile" placeholder="Masukkan gambar profile BioLink"
                        required> --}}

                    <input type="file" class="form-control @error('img_profile') is-invalid @enderror" id="img_profile"
                        name="img_profile" value="{{ old('img_profile', $datauser->img_profile) }}">
                    @error('img_profile')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Banner BioLink</span>
                    <input type='hidden' name="oldbanner_bio" value="{{ $datauser->banner_bio }}">

                    {{-- <input class="form-control  @error('banner_bio') is-invalid @enderror" type="file" id="file"
                        name="banner_bio" accept="image/*" required> --}}

                    {{-- <input type="text" id="banner_bio" name="banner_bio" placeholder="Masukkan gambar Banner BioLink"
                        required> --}}

                    <input type="file" class="form-control @error('banner_bio') is-invalid @enderror" id="banner_bio"
                        name="banner_bio" value="{{ old('banner_bio', $datauser->banner_bio) }}">
                    @error('banner_bio')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Banner Web</span>
                    <input type='hidden' name="oldbanner_web" value="{{ $datauser->banner_web }}">
                    <input type="file" class="form-control @error('banner_web') is-invalid @enderror" id="banner_web"
                        name="banner_web" value="{{ old('banner_web', $datauser->banner_web) }}">
                    @error('banner_web')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="list_form">
                    <span class="sec_label">Banner Livestream</span>
                    <input type='hidden' name="oldbanner_livestream" value="{{ $linkstream->banner_livestream }}">
                    <input type="file" class="form-control @error('banner_livestream') is-invalid @enderror"
                        id="banner_livestream" name="banner_livestream"
                        value="{{ old('banner_livestream', $linkstream->banner_livestream) }}">
                    @error('banner_livestream')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="sec_box23 ">
                <h4>Ukuran Wajib Untuk uplod Gambar :</h4>
                <ul>
                    <li>Profile BioLink
                        (130x100)</li>
                    <li> Banner BioLink
                        (270x115)</li>
                    <li> Banner Web
                        (1200x300)</li>
                </ul>
            </div>
            <div class="sec_button_form">
                <button class="sec_botton btn_submit" type="submit" id="Contactsubmit">Submit</button>
                <a href="#" id="cancel"><button type="button"
                        class="sec_botton btn_cancel">Cancel</button></a>
            </div>
        </form>
    </div>
@endsection
