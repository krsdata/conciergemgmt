<?php
//Call User Privileges
$role_id = Auth::user()->role_id;
$userRoles = \App\UserPrivileges::where(['role_id' => $role_id])->orderBy('id','asc')->get('*');
?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-anchor"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin - HYC</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Contents
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <?php  
        if(count($userRoles)) {
            foreach ($userRoles as $r) {
                if($r->module_type == 'pages' && ($r->can_read != NULL || $r->can_write != NULL)) {
        
    ?>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-pager"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Dynamic Pages:</h6>
                <?php if($r->can_write == 'on') { ?>
                <a class="collapse-item" href="{{ url('/dashboard/pages/add') }}">Add Page</a>
                <?php } if($r->can_read == 'on') {  ?>
                <a class="collapse-item" href="{{ url('/dashboard/pages/all') }}">All Pages</a>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php }}} ?>

    <!-- Nav Item - boats Collapse Menu -->
    <?php  
        if(count($userRoles)) {
            foreach ($userRoles as $r) {
                if($r->module_type == 'boats' && ($r->can_read != NULL || $r->can_write != NULL)) {
        
    ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-ship"></i>
            <span>Boats</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Yachts/Boats:</h6>
                <?php if($r->can_read == 'on') { ?>
                <a class="collapse-item" href="{{ url('/dashboard/boats') }}">All</a>
                <?php } if($r->can_write == 'on') {  ?>
                <a class="collapse-item" href="{{ url('/dashboard/boats-add') }}">Add Boats</a>
                <a class="collapse-item" href="{{ url('/dashboard/boat-categories') }}">Categories</a>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php }}} ?>

    <!-- Nav Item - Sliders Collapse Menu -->
    <?php  
        if(count($userRoles)) {
            foreach ($userRoles as $r) {
                if($r->module_type == 'sliders' && ($r->can_read != NULL || $r->can_write != NULL)) {
        
    ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-images"></i>
            <span>Sliders</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Sliders:</h6>
                <?php if($r->can_write == 'on') { ?>
                <a class="collapse-item" href="{{ url('/dashboard/sliders/add') }}">Add New</a>
                <?php } if($r->can_read == 'on') {  ?>
                <a class="collapse-item" href="{{ url('/dashboard/sliders') }}">Sliders List</a>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php }}} ?>

    <!-- Nav Item - Pages Collapse Menu -->
    <?php  
        if(count($userRoles)) {
            foreach ($userRoles as $r) {
                if($r->module_type == 'destinations' && ($r->can_read != NULL || $r->can_write != NULL)) {
        
    ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDest" aria-expanded="true" aria-controls="collapseDest">
            <i class="fa fa-map-marker fa-pager"></i>
            <span>Destinations</span>
        </a>
        <div id="collapseDest" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <?php if($r->can_write == 'on') { ?>
                <a class="collapse-item" href="{{ url('/dashboard/add-destination') }}">Add Destination</a>
                <?php } if($r->can_read == 'on') {  ?>
                <a class="collapse-item" href="{{ url('/dashboard/list-destinations') }}">All Destinations</a>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php }}} ?>

    <!-- <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard/logo') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Header Logo</span></a>
    </li> -->
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <?php  
        if(count($userRoles)) {
            foreach ($userRoles as $r) {
                if($r->module_type == 'users' && ($r->can_read != NULL || $r->can_write != NULL)) {
        
    ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
            <i class="fas fa-users fa-pager"></i>
            <span>Users</span>
        </a>
        <div id="collapseUsers" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <?php if($r->can_write == 'on') { ?>
                <a class="collapse-item" href="{{ url('/dashboard/add-user') }}">Add User</a>
                <?php } if($r->can_read == 'on') {  ?>
                <a class="collapse-item" href="{{ url('/dashboard/list-users') }}">All Users</a>
                <?php } ?>
            </div>
        </div>
    </li>
    <?php }}} ?>

    <!-- Nav Item - Charts -->
    <?php  
        if(count($userRoles)) {
            foreach ($userRoles as $r) {
                if($r->module_type == 'menus' && ($r->can_read != NULL || $r->can_write != NULL)) {
        
    ?>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard/menus') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Menus</span></a>
    </li>
    <?php }}} ?>

    <!-- Nav Item - Tables -->
    <?php  
        if(count($userRoles)) {
            foreach ($userRoles as $r) {
                if($r->module_type == 'contact_forms' && ($r->can_read != NULL || $r->can_write != NULL)) {
        
    ?>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard/contact-forms') }}">
            <i class="fas fa-fw fa-mail-bulk"></i>
            <span>Contacts</span></a>
    </li>
    <?php }}} ?>

    <!-- Nav Item - Tables -->
    <?php  
        if(count($userRoles)) {
            foreach ($userRoles as $r) {
                if($r->module_type == 'media' && ($r->can_read != NULL || $r->can_write != NULL)) {
        
    ?>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard/media-library') }}">
            <i class="fas fa-fw fa-archive"></i>
            <span>Media</span></a>
    </li>
    <?php }}} ?>

    <!-- Divider -->
    <?php  
        if(count($userRoles)) {
            foreach ($userRoles as $r) {
                if($r->module_type == 'settings' && ($r->can_read != NULL || $r->can_write != NULL)) {
        
    ?>
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Settings
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard/settings') }}">
            <i class="fas fa-fw fa-tools"></i>
            <span>Settings</span></a>
    </li>
    <?php }}} ?>
    
    <?php if($role_id == 1){ //Admin ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseSettings">
            <i class="fas fa-user-tie"></i>
            <span>User Roles</span>
        </a>
        <div id="collapseSettings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/dashboard/add-role') }}">Add Role</a>
                <a class="collapse-item" href="{{ url('/dashboard/list-roles') }}">All Roles</a>
            </div>
        </div>
    </li>
    <?php } ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <?php  
        if(count($userRoles)) {
            foreach ($userRoles as $r) {
                if($r->module_type == 'users' && ($r->can_read != NULL || $r->can_write != NULL)) {
        
    ?>
    <div class="sidebar-heading">
        Active Users
    </div>

    <!-- Nav Item - Charts -->
    <div class="side-users">
        <?php
        //Call active users
        $activeUsers = \App\User::where(['status' => 'active'])->orderBy('name','asc')->get('*');
        if(count($activeUsers)) {
            foreach ($activeUsers as $u) {
        ?>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/add-user/'.$u->id) }}">
                    <?php if($u->profile_pic != NULL){ $pic = $u->profile_pic; ?>
                        <img class="img-profile rounded-circle" src="{{ asset('/photos/2/users/'. $pic) }}">
                    <?php } else { ?>
                        <img class="img-profile rounded-circle" src="{{ asset('/admin/img/profile.png') }}">
                    <?php } ?>
                    <span><?php echo ucwords(strtolower($u->name)) ?></span>
                </a>
            </li>
        <?php }} ?>
    </div>
    <?php }}} ?>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>