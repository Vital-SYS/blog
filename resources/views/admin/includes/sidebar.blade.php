<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/main" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="Admin Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Блог</span>
    </a>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('admin.main.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <span class="brand-text font-weight-light">Главная страница</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <span class="brand-text font-weight-light">
                        Пользователи
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.post.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-comment"></i>
                    <span class="brand-text font-weight-light">
                        Посты
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <span class="brand-text font-weight-light">
                        Категории
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.tag.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-hashtag"></i>
                    <span class="brand-text font-weight-light">
                        Тэги
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    </div>
</aside>
