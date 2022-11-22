<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components\head')
    <body>
        <div class="fixed z-50">
            @include('components\sidebar')
        </div>
        <div class="flex flex-col h-screen w-full pl-56">
            @include('components\navbar')
            <div class="flex-grow animate-fade">
                <main>
                    @yield('content')
                </main>
            </div>
            <div>
                @include('components\footer')
            </div>
        </div>
        
        @include('modal.script')
    </body>
</html>
