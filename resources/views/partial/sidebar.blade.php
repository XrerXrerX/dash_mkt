<div class="sec_sidebar" id="sec_sidebar">
    <div class="sec_logo">
        <a href="" id="codeDashboardLink"><img class="gmb_logo" src="/assets/img/utama/Logo-Lotto21.png"
                alt="l21"></a>
        <svg id="icon_expand" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category"
            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M4 4h6v6h-6z"></path>
            <path d="M14 4h6v6h-6z"></path>
            <path d="M4 14h6v6h-6z"></path>
            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
        </svg>
    </div>
    <div class="sec_list_sidemenu">
        <div class="bagsearch side">
            <div class="grubsearchnav">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" viewBox="0 0 24 24"
                    stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                    <path d="M21 21l-6 -6"></path>
                </svg>
                <input type="text" placeholder="Cari Tabel..." id="searchTabel">
            </div>
        </div>

        <div class="nav_group">
            <span class="title_Nav">BIO LINK {{ $title }}</span>
            <div class="list_sidejsx">
                <div
                    class="data_sidejsx {{ in_array(request()->path(), ['bvbbyh0n3y88/admin', 'bvbbyh0n3y88/superadmin', 'bvbbyh0n3y88/itteam']) ? 'active' : '' }}
                    ">
                    <a href="/bvbvbK1n9" id="Datakasbon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path>
                            <path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
                            <path d="M9 8h6"></path>
                        </svg>
                        <span class="nav_title1">Manage BioLink</span>
                    </a>
                </div>


            </div>

            {{-- <div class="nav_group">
            <span class="title_Nav">WEBSITE</span>
            <div class="list_sidejsx">

                <div class="data_sidejsx">
                    <a href="#" id="Linksshorten">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-augmented-reality-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 21h-2a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v3.5"></path>
                            <path d="M17 17l-4 -2.5l4 -2.5l4 2.5v4.5l-4 2.5z"></path>
                            <path d="M13 14.5v4.5l4 2.5"></path>
                            <path d="M17 17l4 -2.5"></path>
                            <path d="M11 4h2"></path>
                        </svg>
                        <span class="nav_title1">Log Shorten</span>
                    </a>
                </div>
            </div>
        </div> --}}

            <div class="list_sidejsx">
                <div class="data_sidejsx">
                    <a href="#" id="Linksshorten">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-augmented-reality-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 21h-2a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v3.5"></path>
                            <path d="M17 17l-4 -2.5l4 -2.5l4 2.5v4.5l-4 2.5z"></path>
                            <path d="M13 14.5v4.5l4 2.5"></path>
                            <path d="M17 17l4 -2.5"></path>
                            <path d="M11 4h2"></path>
                        </svg>
                        <span class="nav_title1">Link Shorten</span>
                        <div class="arrow_side">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sub_data_sidejsx">
                    <a href="/linkshorten" id="codeBoxLink">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Buat Link Shorten</span>
                        </div>
                    </a>
                    <a href="#" id="codeTableLink">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Daftar Link Shorten</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nav_group">
            <span class="title_Nav">META DESCRIPTION</span>
            <div class="list_sidejsx">
                <div class="data_sidejsx">
                    {{-- <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo-search"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 8h.01" />
                            <path d="M11.5 21h-5.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5.5" />
                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M20.2 20.2l1.8 1.8" />
                            <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l2 2" />
                        </svg>
                        <span class="nav_title1">artikel</span>
                    </a> --}}
                </div>
                <div class="data_sidejsx {{ Request::is('bvbbyh0n3y88/meta/*') ? 'active' : '' }}">
                    <a href="/bvbbyh0n3y88/meta/desc">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-time"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
                            <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M15 3v4" />
                            <path d="M7 3v4" />
                            <path d="M3 11h16" />
                            <path d="M18 16.496v1.504l1 1" />
                        </svg>
                        <span class="nav_title1">SEO DataSet</span>
                    </a>
                </div>

            </div>
        </div>
        <div class="nav_group">
            <span class="title_Nav">IT SOURCE</span>
            <div class="list_sidejsx">
                <div class="data_sidejsx">
                    {{-- <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo-search"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 8h.01" />
                            <path d="M11.5 21h-5.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5.5" />
                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M20.2 20.2l1.8 1.8" />
                            <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l2 2" />
                        </svg>
                        <span class="nav_title1">artikel</span>
                    </a> --}}
                </div>
                <div class="data_sidejsx {{ Request::is('bvbbyh0n3y88/create/*') ? 'active' : '' }}">
                    <a href="/bvbbyh0n3y88/create/{{ Auth::user()->nama_team }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                            </path>
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                        </svg>
                        <span class="nav_title1">User Management</span>
                    </a>
                </div>
                <div class="data_sidejsx">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sport-billard"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M12 12m-8 0a8 8 0 1 0 16 0a8 8 0 1 0 -16 0" />
                        </svg>
                        <select class="form-select @error('nama_team') is-invalid @enderror" name="nama_team"
                            id="nama_team" required>
                            <option value="" selected>Manage Team</option>
                            @foreach ($total_team as $teamValue => $teamLabel)
                                <option value="{{ $teamValue }}">{{ $teamLabel }}</option>
                            @endforeach
                        </select>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
