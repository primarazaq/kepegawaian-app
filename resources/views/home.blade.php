<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components\head')
    <body>
        <div class="flex">
            <div>@include('components\sidebar')</div>
            <div>
                @include('components\navbar')
                <main>
                    @yield('content')
                </main>
                  
            </div>
            
        </div>
     
    </body>

</html>
