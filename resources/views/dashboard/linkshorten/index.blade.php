@extends('layout.main')
@section('container')
    <style>
        .isi_data_short {
            display: flex;
            align-items: stretch;
            justify-content: center;
            width: 70%;
            margin: auto;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        .group_shortener input {
            width: 100%;
            border-radius: 6px 0 0 6px;
        }

        .sbt_short {
            width: 15%;
            border-radius: 0 6px 6px 0;
            background: var(--primary-bg-dark);
            color: rgba(var(--white-color));
            transition: all 0.3s ease;
        }

        .shorten-input {
            border-radius: 3px 0px 0px 3px !important;
        }
    </style>
    <div class="sec_table">
        <h2>{{ $title }}</h2>
        <div class="group_button_ns">
            <div class="isi_data_short">
                <input type="text" id="paste_link" class="shorten-input" name="paste_link"
                    placeholder="Paste link anda di sini..." value="http://127.0.0.1:8000/bvbbyh0n3y88/shorten/wantos">
                <button id="proses_shorten" class="sbt_short">Shorten</button>
            </div>
        </div>

        <table>
            <tbody>
                <tr class="head_table">
                    <th>No. </th>
                    <th>Nama Team</th>
                    <th>Link Awal</th>
                    <th colspan="2">Link Hasil</th>

                    <th>Action</th>
                </tr>
                @foreach ($data as $index => $d)
                    <tr>
                        <td><span class="name">{{ $loop->iteration }}</span></td>
                        <td><span class="name">{{ $d->nama_team }}</span></td>
                        <td><span class="name">{{ $d->link_awal }}</span></td>
                        <td colspan="2">
                            <span class="name">{{ $d->link_hasil }} </span>
                            <button class="copy-button sec_botton btn_submit" data-link="{{ $d->link_hasil }}">Copy</button>
                        </td>
                        <td class="kolom_action">
                            <button class="sec_botton btn_danger" data-id="{{ $d->id }}"
                                onclick="confirmDelete({{ $d->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $("#proses_shorten").click(function() {
                var pasteLink = $("#paste_link").val();
                var namaTeam = "<?= $nama_team ?>"; // Ganti dengan nilai yang sesuai

                // Memeriksa apakah pasteLink memiliki nilai sebelum mengirim permintaan AJAX
                if (pasteLink.trim() !== "") {
                    $.ajax({
                        url: "/bvbbyh0n3y88/shorten/" + encodeURIComponent(namaTeam),
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            paste_link: pasteLink,
                            nama_team: namaTeam
                        },
                        success: function(response) {

                            Swal.fire({
                                icon: 'success',
                                title: 'Shorten berhasil dibuat',
                                text: response.message,
                                didClose: function() {
                                    location.reload();
                                }
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error("AJAX Error:", error);
                        }
                    });
                } else {
                    // Tampilkan SweetAlert
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Harap pilih team di sebelah kiri!',
                    });
                }


            });
        });
        $(document).ready(function() {
            $(".copy-button").click(function() {
                var linkToCopy = $(this).data("link");

                var tempInput = document.createElement("input");
                document.body.appendChild(tempInput);
                tempInput.value = linkToCopy;
                tempInput.select();
                document.execCommand("copy");
                document.body.removeChild(tempInput);

                // Tampilkan SweetAlert sebagai notifikasi
                Swal.fire({
                    title: "Berhasil",
                    text: "Tautan berhasil disalin!",
                    icon: "success",
                    confirmButtonText: "OK"
                });
            });
        });

        function confirmDelete(dataId) {
            if (confirm("Apakah Anda yakin ingin menghapus ini?")) {
                $.ajax({
                    url: "/bvbbyh0n3y88/shorten/" + dataId,
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        $("tr[data-id='" + dataId + "']").remove();

                        Swal.fire({
                            icon: 'success',
                            title: 'Shorten berhasil dihapus',
                            text: response.message,
                            didClose: function() {
                                location.reload();
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error);
                    }
                });
            }
        }
    </script>
@endsection
