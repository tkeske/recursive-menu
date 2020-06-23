<ul>
    @foreach($childs as $child)
       <li>
           {{ $child->name }}
       @if(count($child->nodes))
                @include('components.menu.recurse',['childs' => $child->nodes])
            @endif
       </li>
    @endforeach
</ul>
