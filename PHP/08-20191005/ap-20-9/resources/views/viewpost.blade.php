
@for($i = 0; $i < count($baiviet); $i++)
    <p>Tiêu đề bài viết {{$i}} là {{$baiviet[$i]->title}}
</p>
@endfor