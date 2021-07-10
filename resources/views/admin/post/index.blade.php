<a href="/admin/products/create">Create Post</a>
<table width="900" align="center">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Description</td>
        <td>Author</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->post_title}}</td>
        <td>{{substr($post->post_desc, 0,50)}}</td>
        <td>{{$post->author}}</td>
        <td>{{$post->place}}</td>
    
        <td>
            <a href="/admin/post/edit/{{$post->id}}">Edit</a>
            <a href="/admin/post/destroy/{{$post->id}}">Delete</a>
            

        </td>
    </tr>
    @endforeach

</table>
