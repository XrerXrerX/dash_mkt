@extends('dashboard.superadmin.layout.main')
@section('container')
<div class="sec_box hgi-100">
    <form action="/bvbbyh0n3y88/meta/desc/{{ $title }}" method="post" enctype="multipart/form-data" id="form">
        @method('put')
        @csrf
        <div class="sec_head_form">
            <h3>Meta Description</h3>
        </div>

        <input class="form-control" type="hidden" id="nama_team" name="nama_team" value="{{ $title }}" readonly>
        @if ($errors->has('nama_team'))
        <span class="text-danger">{{ $errors->first('nama_team') }}</span>
        @endif

        <div class="list_form2">
            <span class="sec_label2">Bio Title Description</span>
            <textarea type="text" class="tall_input form-control @error('artikel_bio') is-invalid @enderror" id="artikel_bio" name="artikel_bio">{{ old('artikel_bio', $datauser->artikel_bio) }} </textarea>
        </div>



        <div class="list_form2">
            <span class="sec_label2">Artikel Website Description</span>
            <textarea type="text" class="tall_input form-control @error('artikel_web') is-invalid @enderror" id="artikel_web" name="artikel_web"> {{ old('artikel_web', $datauser->artikel_web) }}</textarea>
        </div>
        <div>
            @error('artikel_web')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="list_form2">
            <span class="sec_label2">Meta Description</span>
            <textarea type="text" class="tall_input form-control @error('meta_tag') is-invalid @enderror" id="meta_tag" name="meta_tag">{{ old('meta_tag', $datauser->meta_tag) }} </textarea>
        </div>
        <div class="list_form2">
            <span class="sec_label2">Alamat</span>
            <!-- <input type="text" id="alamat" name="alamat" placeholder="Masukkan Link alamat" required> 
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat', $datauser->alamat) }}">
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror -->


            <textarea type="text" class="tall_input form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">{{ old('alamat', $datauser->alamat) }} </textarea>
        </div>
        <div>
            @error('meta_tag')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="list_form">
            <span class="sec_label">Link RTP</span>
            {{-- <input type="text" id="rtp" name="rtp" placeholder="Masukkan Link rtp" required> --}}
            <input type="text" class="form-control @error('rtp') is-invalid @enderror" id="rtp" name="rtp" required value="{{ old('rtp', $datauser->rtp) }}">
            @error('rtp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="list_form">
            <span class="sec_label">Link LiveChat</span>
            {{-- <input type="text" id="link_livechat" name="link_livechat" placeholder="Masukkan Link link_livechat" required> --}}
            <input type="text" class="form-control @error('link_livechat') is-invalid @enderror" id="link_livechat" name="link_livechat" required value="{{ old('link_livechat', $datauser->link_livechat) }}">
            @error('link_livechat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="list_form">
            <span class="sec_label">Link BuktiJP</span>
            {{-- <input type="text" id="link_buktijp" name="link_buktijp" placeholder="Masukkan Link link_buktijp" required> --}}
            <input type="text" class="form-control @error('link_buktijp') is-invalid @enderror" id="link_buktijp" name="link_buktijp" required value="{{ old('link_buktijp', $datauser->link_buktijp) }}">
            @error('link_buktijp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="list_form">
            <span class="sec_label">mail</span>
            {{-- <input type="text" id="mail" name="mail" placeholder="Masukkan Link mail" required> --}}
            <input type="text" class="form-control @error('mail') is-invalid @enderror" id="mail" name="mail" required value="{{ old('mail', $datauser->mail) }}">
            @error('mail')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>






        <div class="list_form">
            <span class="sec_label">Lokasi</span>
            {{-- <input type="text" id="lokasi" name="lokasi" placeholder="Masukkan Link lokasi" required> --}}
            <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" required value="{{ old('lokasi', $datauser->lokasi) }}">
            @error('lokasi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="" name="">Submit</button>
            <a href=""><button class="sec_botton btn_cancel">Cancel</button></a>
        </div>
        <div>
            @error('artikel_bio')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="Contactsubmit">Submit</button>
            <a href="#" id="cancel"><button type="button" class="sec_botton btn_cancel">Cancel</button></a>
        </div>
    </form>
</div>
@endsection