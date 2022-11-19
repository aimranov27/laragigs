@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
  @foreach($tags as $tag)
  <li class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-red-800">
    <a href="/?tag={{$tag}}">{{$tag}}</a>
  </li>
  
  @endforeach
</ul>