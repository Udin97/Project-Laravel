<form action="{{ route('posts.store')}}" method="post" enctype="multipart/form-data">
@csrf   

Title:
<input type="text" name="title" placeholder="title"><br>
Content:<textarea type="text" id="content" cols="30" rows="10" placeholder="Add content"name="content"></textarea><br>
Image:<input type="file" name="image">
<button type="submit">Save</button>
</form>