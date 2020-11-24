@foreach ($posts as $post)
    @include('components.parent_comment',['post' => $post])
@endforeach