<a href="/Admin/products/create">Create Product</a>
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
        <td>{{$post->post_place}}</td>
    
        <td>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
            

        </td>
    </tr>
    @endforeach

</table>
