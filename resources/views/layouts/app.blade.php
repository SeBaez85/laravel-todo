<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title> {{config('app.name', 'Laravel')}} </title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Script-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="font-family: 'figtree', sans-serif;">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @isset($header)
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{$header}}
            </div>
        </header>
        @endisset
        <main>
            {{$slot}}
        </main>
    </div>

</body>

</html>