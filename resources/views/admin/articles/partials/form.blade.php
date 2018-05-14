<label for="">Status</label>
<select name="published" class="form-control">
    @if (isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>1.Not Publish</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>2.Publish</option>
    @else
        <option value="0">Not Publish</option>
        <option value="1">Publish</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Title Category" value="{{ $article->title or "" }}" required>

<label for="">Slug (uniq)</label><input type="text" class="form-control" name="slug" placeholder="Slug Article" value="{{ $article->slug or "" }}" readonly="">

<label for="">Parent category</label>
<select name="categories[]" class="form-control" multiple="">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Short Description</label>
<textarea class="form-control" id="description_short" name="description_short">{{ $article->description_short or "" }}</textarea>

<label for="">Description</label>
<textarea class="form-control" id="description" name="description">{{ $article->description or "" }}</textarea>
<hr />

<label for="">Meta Title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="{{ $article->meta_title or "" }}" required>

<label for="">Meta Description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta Description" value="{{ $article->meta_description or "" }}" required>

<label for="">Keywords</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Meta Keywords. by comma" value="{{ $article->meta_keyword or "" }}" required>


<hr />

<input type="submit" class="btn btn-primary" value="Save">

