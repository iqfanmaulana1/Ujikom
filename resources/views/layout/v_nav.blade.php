<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"> <i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{ request()->is('guru') ? 'active' : '' }}"><a href="/guru"><i class="fa fa-user"></i> <span>Guru</span></a></li>
        <li class="{{ request()->is('siswa') ? 'active' : '' }}"><a href="/siswa"><i class="fa fa-users"></i> <span>Siswa</span></a></li>
        
       
       