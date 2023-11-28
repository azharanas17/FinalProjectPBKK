<!--awal MENU NAVBAR-->
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('book.index') }}">Data Buku</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student.index') }}">Data Siswa</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('staff.index') }}">Data Staff</a>
                </li>

                <li class="nav-item"> 
                    <a class="nav-link" href="">Data Peminjaman</a> 
                </li>

                <li class="nav-item">
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link" href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                    @endauth
                </li>

            </ul>
        </div>
    </nav>            
</div>
<!--akhir MENU NAVBAR-->
