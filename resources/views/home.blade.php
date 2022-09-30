<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components\head')
    <body>
        <div class="flex">
            @include('components\sidebar')
            <div class="flex-1">
                <div>
                    @include('components\navbar')
                    <main>
                        @yield('content')
                    </main>
                    <div class="pt-24">
                        @include('components\footer')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
