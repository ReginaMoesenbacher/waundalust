
<div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" value="{{ $waundarouten->title }}">
</div>

<div class="form-group">
    <label>Preview</label>
    <textarea class="form-control" name="preview">{{ $waundarouten->preview }}</textarea>
</div>

<div class="form-group">
    <label>Content</label>
    <textarea class="form-control" name="content">{{ $waundarouten->content }}</textarea>
</div>

<div class="form-group">
    <label>Length</label>
    <input type="text" class="form-control" name="length" value="{{ $waundarouten->length }}">
</div>

<div class="form-group">
    <label>Distance</label>
    <input type="text" class="form-control" name="distance" value="{{ $waundarouten->distance }}">
</div>

<div class="form-group">
    <label>Claim</label>
    <input type="text" class="form-control" name="claim" value="{{ $waundarouten->claim }}">
</div>

{{--image und MAMPS einfügen--}}

