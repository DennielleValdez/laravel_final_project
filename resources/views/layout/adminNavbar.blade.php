<div class="navbar">
    <div>
        <div class="logo">
            <img src="../homeimg/LOGO/Hannah.png" alt="Logo">
        </div>
        <ul>
            <li><i class="fas fa-th-large"></i>Dashboard</li>
            <a class="nav-link" aria-current="page" href="/productindex">
                <li><i class="fas fa-box-open"></i> Products</li>
            </a>

            {{-- USER PAGE --}}
            <a class="nav-link" aria-current="page" href="/adminAccounts">
                <li><i class="fas fa-exchange-alt"></i>Admin Accounts</li>
            </a>

            <a class="nav-link" aria-current="page" href="/userAccounts">
                <li><i class="fas fa-exchange-alt"></i>User Accounts</li>
            </a>

            <li><i class="fas fa-chart-line"></i> Overview</li>
            <li><i class="fas fa-user"></i>Orders</li>
            <li><i class="fas fa-envelope"></i> Message <span style="color: #e91e63; margin-left: auto;">•</span></li>
            <li><i class="fas fa-cog"></i> Setting</li>
            <br>
            <a class="nav-link" aria-current="page" href="{{ url('/logout') }}">
                <li><i class="fa-solid fa-user"></i> Log out</li>
            </a>
        </ul>
    </div>

    
</div>