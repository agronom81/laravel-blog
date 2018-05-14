<label for="">Status</label>
<select name="published" class="form-control">
    @if (isset($category->id))
        <option value="0" @if ($category->published == 0) selected="" @endif>1.Not Publish</option>
        <option value="1" @if ($category->published == 1) selected="" @endif>2.Publish</option>
    @else
        <option value="0">Not Publish</option>
        <option value="1">Publish</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Title Category" value="{{ $category->title or "" }}" required>

<label for="">Slug</label><input type="text" class="form-control" name="slug" placeholder="Slug Category" value="{{ $category->slug or "" }}" readonly="">

<label for="">Parent category</label>
<select name="parent_id" class="form-control">
    <option value="0">-- without parent category --</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr />

<input type="submit" class="btn btn-primary" value="Save">

