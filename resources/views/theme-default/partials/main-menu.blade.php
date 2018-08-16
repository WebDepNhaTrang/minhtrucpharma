<ul class=" nav navbar-nav">
    @foreach($items as $menu_item)
        <li class="{{ Route::currentRouteName() == $menu_item->route ? 'active' : '' }}">
            @if($menu_item->children && count($menu_item->children) > 0)
                <a href="javascript:;">{{ $menu_item->title }}<i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu">
                    @foreach($menu_item->children as $menu_child)
                        <li><a href="{{ $menu_child->link() }}">{{ $menu_child->title }}</a></li>
                    @endforeach
                </ul>
            @else
                <a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
            @endif
        </li>
    @endforeach
</ul>