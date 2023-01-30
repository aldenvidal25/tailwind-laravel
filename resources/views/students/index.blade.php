@include('partials.header')
    <ul>
        @foreach ($students as $student)
        <li>{{ $student-> first_name }} {{ $student-> last_name }}  {{ $student-> age }} {{ $student-> gender }}</li>
        {{-- <li>{{ $student-> gender }} {{ $student-> gender_count }}</li> --}}
        @endforeach
    </ul>
@include('partials.footer')






{{-- @php
 print_r($students);   
@endphp --}}

{{-- @foreach ($students as $student)
{{ $student['first_name'] }}
@endforeach --}}