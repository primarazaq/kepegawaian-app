<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components\head')
    <body>
        <div class="flex">
            @include('components\sidebar')
            <div class="flex-1">
                <div>
                    @include('components\navbar')
                    
                    <div class="absolute bottom-0">
                        @include('components\footer')
                    </div>
                    
                </div>
                <main>
                    @yield('content')
                </main>
            </div>
            
        </div>
     
    </body>

</html>
