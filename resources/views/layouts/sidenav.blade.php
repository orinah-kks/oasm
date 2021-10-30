

    
<nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
                @can('admin')
                <li class="">
                        <a href="{{route('home')}}" data-i18n="nav.widget.main">
                        <span class="pcoded-micon"><i class="fa fa-home"></i></span>
                        <span class="">Dashboard</span>
                        </a>
                        </li>      
               

                        <li class=" ">
                        <a href="{{route('lecturer.index')}}" data-i18n="nav.widget.main">
                        <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                        <span class="pcoded-mtext">Lecturer</span>
                        <span class="pcoded-mcaret"></span>
                        </a>
                        </li>
                        <li class=" ">
                        <a href="{{route('student.index')}}" data-i18n="nav.widget.main">
                        <span class="pcoded-micon"><i class="fa fa-graduation-cap"></i></span>
                        <span class="pcoded-mtext">Students</span>
                        <span class="pcoded-mcaret"></span>
                        </a>
                        </li>

                        <li class=" ">
                        <a href="{{route('course.index')}}" data-i18n="nav.widget.main">
                        <span class="pcoded-micon"><i class="fa fa-sitemap"></i></span>
                        <span class="pcoded-mtext">Courses</span>
                        </a>
                        </li>
                        <li class=" ">
                        <a href="{{route('unit.index')}}" data-i18n="nav.widget.main">
                        <span class="pcoded-micon"><i class="fa fa-database"></i></span>
                        <span class="pcoded-mtext">Units</span>
                        </a>
                        </li>
                        <li class=" ">
                        <a href="{{url('/users')}}" data-i18n="nav.widget.main">
                        <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                        <span class="pcoded-mtext">User Management</span>
                        </a>
                        </li>

                        <li class=" ">
                        <a href="{{url('/roles')}}" data-i18n="nav.widget.main">
                        <span class="pcoded-micon"><i class="fa fa-gear"></i></span>
                        <span class="pcoded-mtext">Role Management</span>
                        </a>
                        </li>
                        @endcan
                        @can('lecturer')
                        <li class=" ">
                                <a href="{{route('lecturer_assignment.index')}}" data-i18n="nav.widget.main">
                                <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                <span class="pcoded-mtext"> Lecturer Assignments</span>
                                </a>
                                </li>
                        @endcan
                     @can('student')
                     <li class=" ">
                        <a href="{{route('student_assignment.index')}}" data-i18n="nav.widget.main">
                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                        <span class="pcoded-mtext">Student Assignments</span>
                        </a>
                        </li> 
                     @endcan
                    

                        

             
                </li>

               
        </ul>


        </div>
        </nav>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        