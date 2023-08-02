<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/idb@7/build/umd.js"></script>
    <title>{{ $title ?? 'Page Title' }}</title>
    {{
        Vite::useHotFile(public_path('hot'))
            ->useBuildDirectory('vendor/rickodev/pos')
            ->withEntryPoints(['resources/dist/css/pos.css','resources/dist/js/pos.js'])
    }}
</head>
<body>
{{ $slot }}
@livewireScriptConfig
</body>
</html>