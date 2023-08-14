@extends('layout.main')
@section('container')
    <div class="sec_table">
        <h2>{{ $title }}</h2>
        {{-- <a href="#" id="add-voucher">
        <div class="sec_addnew">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-plus" viewBox="0 0 24 24"
                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                <path d="M9 12l6 0"></path>
                <path d="M12 9l0 6"></path>
            </svg>
            <span>Add New</span>
        </div>
    </a>
    <a href="#" id="update-voucher">
        <div class="sec_addnew">
            <button class="sec_botton btn_primary">EDIT</button>
        </div>
    </a>
    <a href="#" id="delete-voucher">
        <div class="sec_addnew">
            <button class="sec_botton btn_danger">DELETE</button>
        </div>
    </a> --}}
        <table>
            <tbody>
                <tr class="head_table">
                    {{-- <th class="check_box">
                    <input type="checkbox" id="myCheckbox" name="myCheckbox">
                </th> --}}
                    <th>Jenis Voucher</th>
                    <th>Kode Voucher</th>
                    <th>User Kode</th>
                    <th style="width: 50%;">No Rekening</th>
                    <th>Tanggal Spin</th>
                    <th>Status Bayar</th>
                    <th>Tanggal Exp</th>
                    <th>Created By</th>
                </tr>
                <tr class="filter_row">
                    <td>
                        <div class="grubsearchtable">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                            <input type="text" placeholder="Cari data..." id="searchData-name">
                        </div>
                    </td>
                    <td>
                        <div class="grubsearchtable">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                            <input type="text" placeholder="Cari data..." id="searchData-name">
                        </div>
                    </td>
                    <td>
                        <div class="grubsearchtable">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                            <input type="text" placeholder="Cari data..." id="searchData-name">
                        </div>
                    </td>
                    <td>
                        <div class="grubsearchtable">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                            <input type="text" placeholder="Cari data..." id="searchData-name">
                        </div>
                    </td>
                    <td>
                        <div class="grubsearchtable">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                            <input type="text" placeholder="Cari data..." id="searchData-name">
                        </div>
                    </td>
                    <td>
                        <div class="grubsearchtable">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                            <input type="text" placeholder="Cari data..." id="searchData-name">
                        </div>
                    </td>
                    <td>
                        <div class="grubsearchtable">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                            <input type="text" placeholder="Cari data..." id="searchData-name">
                        </div>
                    </td>
                    <td>
                        <div class="grubsearchtable">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                            <input type="text" placeholder="Cari data..." id="searchData-name">
                        </div>
                    </td>


                </tr>
                @foreach ($data as $index => $d)
                    <tr>
                        <td><span class="name">{{ $d->jenis_voucher }}</span></td>
                        <td><span class="name">{{ $d->kode_voucher }}<button type="button"
                                    onclick="copyText('https://spinnerl21.com/spinnerl21?username={{ $d->user_kode . '_' . $d->kode_voucher }}')"
                                    title="Salin teks">
                                    Salin
                                </button></span></td>
                        <td><span class="name">{{ $d->user_kode }}</span></td>
                        <td>
                            <span class="name">
                                <form id="data-form" method="POST">
                                    <input type="hidden" name="id" id="id" value={{ $d->id }}>
                                    <input type="text" id="userklaim" name="userklaim"
                                        placeholder="Masukkan No. Rekening" style="width: 180px;" oninput="InputShow()">
                                    <button type="button" id="btn-save" style="display: none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg></button>
                                    <button type="button" id="btn-cancel" style="display: none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M18 6l-12 12"></path>
                                            <path d="M6 6l12 12"></path>
                                        </svg></button>
                                </form>
                            </span>
                        </td>
                        <td><span class="name">{{ $d->tgl_klaim == null ? '{ Belum Spin }' : $d->tgl_klaim }}</span></td>
                        <td class="check_box">
                            <input type="checkbox" id="statusbayar-{{ $index }}"
                                name="statusbayar-{{ $index }}" data-id=" {{ $d->id }}">
                        </td>
                        <td><span class="name">{{ $d->tgl_exp }}</span></td>
                        <td><span class="name">{{ $d->createed_by }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script>
        function copyText(text) {
            var tempInput = document.createElement("input");
            tempInput.value = text;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
        }

        function InputShow() {
            var inputElement = document.getElementById("userklaim");
            var btnSave = document.getElementById("btn-save");
            var btnCancel = document.getElementById("btn-cancel");

            if (inputElement.value.trim() !== "") {
                btnSave.style.display = "inline";
                btnCancel.style.display = "inline";
            } else {
                btnSave.style.display = "none";
                btnCancel.style.display = "none";
            }
        }

        function clearInput() {
            var inputElement = document.getElementById("userklaim");
            var btnSave = document.getElementById("btn-save");
            var btnCancel = document.getElementById("btn-cancel");

            inputElement.value = "";
            btnSave.style.display = "none";
            btnCancel.style.display = "none";
        }

        var btnCancel = document.getElementById("btn-cancel");
        btnCancel.addEventListener("click", clearInput);

        document.getElementById("btn-save").addEventListener("click", function() {
            var id = 1; // Ganti dengan nilai id yang sesuai
            var userklaim = document.getElementById("userklaim").value;

            var data = {
                userklaim: userklaim
            };

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "{{ route('generatevoucher.inputuserid', ['id' => ':id']) }}".replace(':id', id),
                true);
            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };

            xhr.send(JSON.stringify(data));
        });

        $(document).ready(function() {
            $('#myCheckbox').change(function() {
                var isChecked = $(this).is(':checked');
                $('[id^="myCheckbox-"]').prop('checked', isChecked);
            });
        });

        $(document).ready(function() {
            $('#myCheckbox, [id^="myCheckbox-"]').change(function() {
                var isChecked = $('#myCheckbox:checked, [id^="myCheckbox-"]:checked').length > 0;
                if (isChecked) {} else {}
            });

            $('#update-voucher').off('click').click(function(event) {
                event.preventDefault();

                var checkedValues = [];
                $('input[id^="myCheckbox-"]:checked').each(function() {
                    var value = $(this).data('id');
                    checkedValues.push(value);
                });
                if (checkedValues == 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Silahkan pilih website!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }


                var parameterString = $.param({
                    'values[]': checkedValues
                }, true);
                console.log(parameterString);
                $('.aplay_code').load('/voucher/edit/' + parameterString, function() {
                    adjustElementSize();
                    localStorage.setItem('lastPage', '/voucher/edit/' +
                        parameterString);
                });
            });

            $(document).off('click', '#add-voucher').on('click', '#add-voucher', function(event) {
                event.preventDefault();
                $('.aplay_code').load('/voucher/add', function() {
                    adjustElementSize();
                    localStorage.setItem('lastPage', '/voucher/add');
                });
            });

            $(document).on('click', '#delete-voucher', function(event) {
                event.preventDefault();

                var checkedValues = [];
                $('input[id^="myCheckbox-"]:checked').each(function() {
                    var value = $(this).data('id');
                    checkedValues.push(value);
                });

                if (checkedValues.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Silahkan pilih website!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    return;
                }

                var parameterString = $.param({
                    'values[]': checkedValues
                }, true);
                var url =
                    "/voucher/delete/";

                Swal.fire({
                    title: 'Apakah Anda yakin ingin menghapus data ini?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            method: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}',
                                values: checkedValues
                            },
                            success: function(result) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Data berhasil dihapus!',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(function() {
                                    $('.aplay_code').load(
                                        '/voucher',
                                        function() {
                                            adjustElementSize();
                                            localStorage.setItem('lastPage',
                                                '/voucher');
                                        });
                                });
                            },
                            error: function(xhr) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Terjadi kesalahan saat menghapus data.'
                                });

                                console.log(xhr.responseText);
                            }
                        });
                    }
                });
            });
            $(document).off('click', '#view').on('click', '#view', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                $('.aplay_code').empty();
                $('.aplay_code').load('/voucher/view/' + id, function() {
                    adjustElementSize();
                    localStorage.setItem('lastPage', '/voucher/view/' + id);
                });
            });


            $(document).off('click', '#edit').on('click', '#edit', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                $('.aplay_code').empty();
                $('.aplay_code').load('/voucher/edit/' + id, function() {
                    adjustElementSize();
                    localStorage.setItem('lastPage', '/voucher/edit/' + id);
                });
            });

            $(document).on('click', '#delete', function(event) {
                event.preventDefault();

                var id = $(this).data('id');
                var url =
                    "/voucher/delete/";

                Swal.fire({
                    title: 'Apakah Anda yakin ingin menghapus data ini?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            method: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}',
                                values: id
                            },
                            success: function(result) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Data berhasil dihapus!',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(function() {
                                    $('.aplay_code').load(
                                        '/voucher',
                                        function() {
                                            adjustElementSize();
                                            localStorage.setItem('lastPage',
                                                '/voucher');
                                        });
                                });
                            },
                            error: function(xhr) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Terjadi kesalahan saat menghapus data.'
                                });

                                console.log(xhr.responseText);
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
