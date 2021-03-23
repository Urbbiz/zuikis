<ul>
@foreach($boxes as $box)
    <li>ID: {{$box->id}} Bananaas in box: {{$box->bananas}}
@endforeach
</ul>