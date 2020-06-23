<!DOCTYPE html>
<html>
<body>

    <h5>Menu</h5>

    <div>
        <ul>
            @foreach($menus as $menu)
            <li>
                {{ $menu->name }}
                @if(count($menu->nodes))
                    @include('components.menu.recurse',['childs' => $menu->nodes])
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
