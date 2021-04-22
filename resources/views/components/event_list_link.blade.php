
@props(['kop', 'andwoort', 'link'])
<div class="border-b border-gray-300  max-w-md mx-auto px-6 pt-1 pb-2 flex " style="display: flex;">
    <div class="kop inline-block  pr-5  float-left "  style="width: 30%;">
       {{ $kop }}
    </div>
    <div class="andtwoord  inline-block text-right float-right" style="width: 70%; text-align: right !important">
        <a href="{{ $link }}" class="underline text-groen hover:text-groen-dark">
            {{ $andwoort }}
        </a>


    </div>
</div>
