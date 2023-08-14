@extends('layout.main')
@section('container')
    <div class="sec_box hgi-100">
        <form action="" method="POST" enctype="multipart/form-data" id="form">
            @csrf

            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $title }}</h3>
                    <span>Link Management {{ $title }}</span>
                </div>
                {{-- <div class="list_form">  --}}
                {{-- JADIKAN HIDDEN NAMA TEAM --}}


                {{-- <input class="form-control" type="hidden" id="nama_team" name="nama_team" value="{{ $bo_link->nama_team }}"
                    readonly>
                @if ($errors->has('nama_team'))
                    <span class="text-danger">{{ $errors->first('nama_team') }}</span>
                @endif --}}


                {{-- </div> --}}
                <div class="list_form">
                    <span class="sec_label">Link Login Refferal</span>
                    <input type="text" id="link_awal" name="link_awal" placeholder="Masukkan Link Awal" required>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Daftar Refferal</span>
                    <input type="text" id="link_hasil" name="link_hasil" placeholder="Masukkan Link Hasil" required>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Whatsapp</span>
                    <input type="text" id="link_hasil" name="link_hasil" placeholder="Masukkan Link Hasil" required>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Facebook</span>
                    <input type="text" id="link_hasil" name="link_hasil" placeholder="Masukkan Link Hasil" required>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Instagram</span>
                    <input type="text" id="link_hasil" name="link_hasil" placeholder="Masukkan Link Hasil" required>
                </div>
                <div class="list_form">
                    <span class="sec_label">upload profil</span>
                    <input type="text" id="link_hasil" name="link_hasil" placeholder="Masukkan Link Hasil" required>
                </div>
                <div class="list_form">
                    <span class="sec_label">upload banner profil</span>
                    <input type="text" id="link_hasil" name="link_hasil" placeholder="Masukkan Link Hasil" required>
                </div>

            </div>
            <div class="sec_button_form">
                <button class="sec_botton btn_submit" type="submit" id="Contactsubmit">Submit</button>
                <a href="#" id="cancel"><button type="button" class="sec_botton btn_cancel">Cancel</button></a>
            </div>
        </form>
    </div>
@endsection
