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
                <a href="{{route('person.main.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <span class="brand-text font-weight-light">
                        Главная страница
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('person.liked.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-heart"></i>
                    <span class="brand-text font-weight-light">
                        Понравившиеся посты
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('person.comment.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-comment"></i>
                    <span class="brand-text font-weight-light">
                        Комментарии
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    </div>
</aside>
