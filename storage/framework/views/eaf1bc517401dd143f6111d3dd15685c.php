<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="<?php echo e(set_active(['setting/page'])); ?>">
                    <a href="<?php echo e(route('setting/page')); ?>">
                        <i class="fas fa-cog"></i> 
                        <span>Settings</span>
                    </a>
                </li>
                <li class="submenu <?php echo e(set_active(['home','teacher/dashboard','student/dashboard'])); ?>">
                    <a>
                        <i class="fas fa-tachometer-alt"></i>
                        <span> Dashboard</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(set_active(['home'])); ?>">Admin Dashboard</a></li>
                        <li><a href="<?php echo e(route('teacher/dashboard')); ?>" class="<?php echo e(set_active(['teacher/dashboard'])); ?>">Teacher Dashboard</a></li>
                        <li><a href="<?php echo e(route('student/dashboard')); ?>" class="<?php echo e(set_active(['student/dashboard'])); ?>">Student Dashboard</a></li>
                    </ul>
                </li>
                <?php if(Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin'): ?>
                <li class="submenu <?php echo e(set_active(['list/users'])); ?> <?php echo e((request()->is('view/user/edit/*')) ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fas fa-shield-alt"></i>
                        <span>User Management</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('list/users')); ?>" class="<?php echo e(set_active(['list/users'])); ?> <?php echo e((request()->is('view/user/edit/*')) ? 'active' : ''); ?>">List Users</a></li>
                    </ul>
                </li>
                <?php endif; ?>

                <li class="submenu <?php echo e(set_active(['student/list','student/grid','student/add/page'])); ?> <?php echo e((request()->is('student/edit/*')) ? 'active' : ''); ?> <?php echo e((request()->is('student/profile/*')) ? 'active' : ''); ?>">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span> Students</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('student/list')); ?>"  class="<?php echo e(set_active(['student/list','student/grid'])); ?>">Student List</a></li>
                        <li><a href="<?php echo e(route('student/add/page')); ?>" class="<?php echo e(set_active(['student/add/page'])); ?>">Student Add</a></li>
                        <li><a class="<?php echo e((request()->is('student/edit/*')) ? 'active' : ''); ?>">Student Edit</a></li>
                    </ul>
                </li>

                <li class="submenu  <?php echo e(set_active(['teacher/add/page','teacher/list/page','teacher/grid/page','teacher/edit'])); ?> <?php echo e((request()->is('teacher/edit/*')) ? 'active' : ''); ?>">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i>
                        <span> Teachers</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('teacher/list/page')); ?>" class="<?php echo e(set_active(['teacher/list/page','teacher/grid/page'])); ?>">Teacher List</a></li>
                        <li><a href="<?php echo e(route('teacher/add/page')); ?>" class="<?php echo e(set_active(['teacher/add/page'])); ?>">Teacher Add</a></li>
                        <li><a class="<?php echo e((request()->is('teacher/edit/*')) ? 'active' : ''); ?>">Teacher Edit</a></li>
                    </ul>
                </li>
                
                <li class="submenu <?php echo e(set_active(['department/add/page','department/edit/page'])); ?> <?php echo e(request()->is('department/edit/*') ? 'active' : ''); ?>">
                    <a href="#"><i class="fas fa-building"></i>
                        <span> Departments</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('department/list/page')); ?>" class="<?php echo e(set_active(['department/list/page'])); ?> <?php echo e(request()->is('department/edit/*') ? 'active' : ''); ?>">Department List</a></li>
                        <li><a href="<?php echo e(route('department/add/page')); ?>" class="<?php echo e(set_active(['department/add/page'])); ?>">Department Add</a></li>
                        <li><a>Department Edit</a></li>
                    </ul>
                </li>

                <li class="submenu <?php echo e(set_active(['subject/list/page','subject/add/page'])); ?> <?php echo e(request()->is('subject/edit/*') ? 'active' : ''); ?>">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> Subjects</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a class="<?php echo e(set_active(['subject/list/page'])); ?> <?php echo e(request()->is('subject/edit/*') ? 'active' : ''); ?>" href="<?php echo e(route('subject/list/page')); ?>">Subject List</a></li>
                        <li><a class="<?php echo e(set_active(['subject/add/page'])); ?>" href="<?php echo e(route('subject/add/page')); ?>">Subject Add</a></li>
                        <li><a>Subject Edit</a></li>
                    </ul>
                </li>

        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\edited school system\resources\views/sidebar/sidebar.blade.php ENDPATH**/ ?>