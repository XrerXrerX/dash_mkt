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
                <textarea type="text" class="tall_input form-control @error('artikel_bio') is-invalid @enderror" id="artikel_bio"
                    name="artikel_bio" required>{{ old('artikel_bio', $datauser->artikel_bio) }} </textarea>
            </div>



            <div class="list_form2">
                <span class="sec_label2">Artikel Website Description</span>
                <textarea type="text" class="tall_input form-control @error('artikel_web') is-invalid @enderror" id="artikel_web"
                    name="artikel_web" required> {{ old('artikel_web', $datauser->artikel_web) }}</textarea>
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
                <textarea type="text" class="tall_input form-control @error('meta_tag') is-invalid @enderror" id="meta_tag"
                    name="meta_tag" required>{{ old('meta_tag', $datauser->meta_tag) }} </textarea>
            </div>
            <div>
                @error('meta_tag')
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
