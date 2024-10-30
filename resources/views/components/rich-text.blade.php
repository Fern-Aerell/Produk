@props(['content' => null])

<textarea name="content" id="rich-text-editor">
    @if($content)
        {!! $content !!}
    @endif
</textarea>

<script src="/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea#rich-text-editor',
        plugins: 'autosave code visualblocks fullscreen image link media table lists preview',
        menubar: 'file edit view insert format tools table',
        toolbar: 'undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | link image media | fullscreen preview code',
        autosave_ask_before_unload: true,
        autosave_interval: '1m',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_retention: '30m', // simpan 30 menit untuk penghematan
        image_advtab: true, // pengaturan gambar lanjutan
        height: 500, // sesuaikan tinggi editor
        toolbar_mode: 'sliding',
        contextmenu: 'link image table',
        skin: 'oxide',
        content_css: 'default',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',

        // File picker untuk upload media
        file_picker_callback: (callback, value, meta) => {
            if (meta.filetype === 'image') {
                callback('https://example.com/image.jpg', {
                    alt: 'Deskripsi gambar'
                });
            }
        },
    });
</script>