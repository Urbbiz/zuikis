<ul>
@foreach($boxes as $box)
    <li>
        ID: {{$box->id}} Bananaas in box: {{$box->bananas}}
        <a href="{{route('box.edit', $box)}}">[EDIT]</a>
        <a href="{{route('box.add', $box)}}">[ADD]</a>
    </li>
@endforeach
</ul>