
@php
    $date = \Carbon\Carbon::now()->format('Y');
@endphp

<div style="position: fixed; bottom : 0; background:rgb(48, 47, 54); width:100%; color:white; text-align:center;  height:30px">
    {{-- Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }} --}}
    Copyright &copy; {{ $date }}
</div>

</main>
</body>
</html>
