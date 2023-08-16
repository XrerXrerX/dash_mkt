@extends('layout.main')
@section('container')
    <div class="sec_box hgi-100">
        <form action="/bvbbyh0n3y88/superadmin/{{ $title }}" method="post" enctype="multipart/form-data" id="form">
            @method('put')
            @csrf
            <div class="sec_head_form">
                <h3>Meta Description</h3>
            </div>

            <div class="list_form2">
                <span class="sec_label2">Title Description</span>
                <textarea type="text" id="" name="" value="" class="tall_input"> </textarea>
            </div>



            <div class="list_form2">
                <span class="sec_label2">Artikel Web</span>
                <textarea type="text" id="" name="" value="Q_jack" class="tall_input"> </textarea>
            </div>


            <div class="list_form2">
                <span class="sec_label2">Meta Description</span>
                <textarea type="text" id="" name="" value="Q_jack" class="tall_input"> </textarea>
            </div>


            <div class="sec_button_form">
                <button class="sec_botton btn_submit" type="submit" id="" name="">Submit</button>
                <a href=""><button class="sec_botton btn_cancel">Cancel</button></a>
            </div>
            <div class="sec_button_form">
                <button class="sec_botton btn_submit" type="submit" id="Contactsubmit">Submit</button>
                <a href="#" id="cancel"><button type="button" class="sec_botton btn_cancel">Cancel</button></a>
            </div>
        </form>
    </div>
@endsection
