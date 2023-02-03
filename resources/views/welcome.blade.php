<form action="{{ route('create') }}" enctype="multipart/form-data" method="POST">
    @csrf
title<input type="text" name="title" />
content<input type="text" name="content" />
image<input type="file" name="image" />
<select name="category">
    <option value="Tech">Tech</option>
    <option value="sport">sport</option>
    <option value="politics">politics</option>
</select>
<button name="save">save</button>
</form>