@extends('layouts.admin')

@section('title', 'Edit Blog')

@section('content')
<h1 class="h4 text-white mb-4">Edit Blog</h1>

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                <x-input-error :messages="$errors->get('title')" />
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea id="editor-description" name="description" class="form-control" rows="5" required>{{ old('description', $blog->description) }}</textarea>
                <x-input-error :messages="$errors->get('description')" />
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Categories</label>
                    <select name="categories" class="form-control">
                        @php($cats = config('categories.list'))
                        <option value="">-- Select Category --</option>
                        @foreach($cats as $c)
                            <option value="{{ $c }}" {{ old('categories', $blog->categories) === $c ? 'selected' : '' }}>{{ $c }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label>Tags</label>
                    <input type="text" name="tags" class="form-control" value="{{ old('tags', $blog->tags) }}">
                </div>
                <div class="form-group col-md-4">
                    <label>Image</label>
                    <input type="file" name="img" class="form-control-file" accept="image/*">
                    @if($blog->img)
                    <div class="mt-2"><img src="{{ $blog->img }}" alt="preview" style="max-height:60px"></div>
                    @endif
                    <x-input-error :messages="$errors->get('img')" />
                </div>
            </div>

            <div class="form-group">
                <label>Date Publish</label>
                <input type="date" name="date_publish" class="form-control" value="{{ old('date_publish', optional($blog->date_publish)->format('Y-m-d')) }}">
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary mr-2">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
<script>
    (function() {
        const el = document.getElementById('editor-description');
        if (!el) return;
        ClassicEditor.create(el, {
            toolbar: {
                items: [
                    'heading', '|',
                    'fontFamily', 'fontSize', 'fontColor', 'fontBackgroundColor', '|',
                    'bold', 'italic', 'underline', 'strikethrough', 'removeFormat', '|',
                    'alignment', '|',
                    'link', 'bulletedList', 'numberedList', 'outdent', 'indent', '|',
                    'blockQuote', 'code', 'codeBlock', 'insertTable', 'horizontalLine', '|',
                    'findAndReplace', 'specialCharacters', 'sourceEditing', '|',
                    'undo', 'redo'
                ],
                shouldNotGroupWhenFull: true
            },
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    }
                ]
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleRelNofollow: {
                        mode: 'manual',
                        label: 'Add rel="nofollow"',
                        attributes: {
                            rel: 'nofollow'
                        }
                    }
                }
            },
            htmlEmbed: {
                showPreviews: true
            },
            table: {
                contentToolbar: [
                    'tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties'
                ]
            }
        }).then(function(editor){
            const form = el.closest('form');
            if (form) {
                editor.model.document.on('change:data', function(){ el.value = editor.getData(); });
                form.addEventListener('submit', function(){ el.value = editor.getData(); });
            }
        }).catch(console.error);
    })();
</script>
@endpush
@endsection