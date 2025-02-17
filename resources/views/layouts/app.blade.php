<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dental Clinic')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#87c3e5',

                    },
                },
            },
        };
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen overflow-x-hidden">

<x-navbar />

<main class="flex-grow pt-16">
    @yield('hero')
    <div class="container mx-auto max-w-screen-xl grid grid-cols-1 sm:grid-cols-2 md:grid-cols-12 gap-6 py-8 px-4 md:px-0">
        @yield('content')
    </div>
</main>

<x-footer />

</body>
</html>
