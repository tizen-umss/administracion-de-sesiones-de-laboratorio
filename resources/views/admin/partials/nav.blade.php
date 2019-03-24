<ul class="sidebar-menu" data-widget="tree">
        <li class="header">PANEL DE USUARIO</li>
        <!-- Optionally, you can add icons to the links -->
        <li {{request()->is('admin')? 'class=active':''}}><a href="{{route('dashboard')}}">
        <i class="fa fa-home"></i> <span>Inicio</span></a></li>
        <li><a href="#"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
        <li class="treeview {{request()->is('admin/materias*')? 'active':''}}">
          <a href="#"><i class="fa fa-book"></i> <span>Materias</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{request()->is('admin/materias')? 'class= active':''}} ><a href="{{route('admin.materias.index')}}"><i class="fa fa-eye"></i>Ver todas las materias</a></li>
            <li {{request()->is('admin/materias/create')? 'class= active':''}} ><a href="{{route('admin.materias.create')}}"><i class="fa fa-pencil"></i>Añadir materias</a></li>
          </ul>
        </li>
</ul>