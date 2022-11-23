 <!-- Sidebar -->
 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon">
             <img src="{{ asset('pena.png') }}">
         </div>
         <div class="sidebar-brand-text mx-3">Pena</div>
     </a>
     <hr class="sidebar-divider my-0">

     <li class="nav-item active">
         <a class="nav-link" href="/dashboard">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <hr class="sidebar-divider">
     <div class="sidebar-heading">
         Data
     </div>
     @if (auth()->user()->level == 'Super Admin')
         <li class="nav-item">
             <a class="nav-link " href="/data-admin" data-target="#collapsePage" aria-expanded="true"
                 aria-controls="collapsePage">
                 <i class="fas fa-fw fa-user"></i>
                 Data Admin
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link " href="/data-bazar" data-target="#collapsePage" aria-expanded="true"
                 aria-controls="collapsePage">
                 <i class="fa-solid fa-bowl-rice"></i>
                 Menu Bazar
             </a>
         </li>
     @endif

     <li class="nav-item">
         <a class="nav-link " href="/pesanan" data-target="#collapsePage" aria-expanded="true"
             aria-controls="collapsePage">
             <i class="fa-solid fa-message"></i>
             Data Pesanan
         </a>
     </li>



     <hr class="sidebar-divider">

 </ul>

 <!-- Sidebar -->
