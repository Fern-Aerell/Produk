@props(['activate' => false, 'href' => '#'])

<li {{ $attributes->class([
        'hover:cursor-pointer py-1 transition-all hover:ml-1',
        'list-disc marker:text-red-500' => $activate,
    ]) }}>
    <a href="{{ $href }}">{{ $slot }}</a>
</li>
