
@php
    $date = \Carbon\Carbon::now()->format('Y');
@endphp

<div style="position: fixed; bottom : 0; background:rgb(48, 47, 54); width:100%; color:white; text-align:center;  height:30px">
    {{-- Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }} --}}
    Copyright &copy; {{ $date }}
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</main>
</body>
</html>
