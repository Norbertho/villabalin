<x-guest-layout>
    
    <div id="modal" class="fixed top-0 left-0 w-full h-full flex items-center justify-center invisible opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out" style="z-index:1000;">
        <div class="bg-teal-50 rounded text-lg p-6 rounded shadow-lg my-24 relative"  style="max-width: 70vw;">
            <button id="closeModal" class="absolute text-gray-700 font-bold text-2xl" style="position: absolute; top: 10px; right: 20px;">
                &times;
            </button>
            <h2 class="text-2xl mb-4 mt-12 font-bold">Nyitási akció!</h2>
            <p>Annak érdekében, h minél többen megtapasztalhassátok mekkora élmény a rollerezés a Körös vidékén, most 30%os akcióval vehetitek bérbe nálunk őket!
                Kellemes pihenést kívánunk minden ide látogatónak!
                Rollerre fel!</p>
        </div>
        
    </div>
    <section style="background-image: url({{ URL::asset('/images/roller/roller5.jpeg')}});  background-position: center center; background-repeat: no-repeat; background-size: cover; min-height: 80vh;" class="w-full bg-cover relative flex flex-col items-center justify-center px-8  md:px-16">
        <div class="absolute bg-black bg-opacity-40 inset-0 z-10"></div>
        <h1
            class="uppercase text-3xl lg:text-5xl font-bold text-white z-20 relative text-center tracking-wider leading-tight bg-black bg-opacity-20 p-12">
            Elektromos roller kölcsönzés</h1>
        <h1
            class="text-xl lg:text-3xl font-semibold text-white z-20 relative text-center tracking-wider leading-tight bg-black bg-opacity-20 pb-12 px-6">
            Házhozszállítással Békésszentandrás, Szarvas</h1>
    </section>
 <div class="flex" ">
    <div class="container mx-auto px-8 md:my-24 my-12">
        <h2 class="text-4xl font-bold text-gray-600 mb-4 mt-16">Roller kölcsönzés egyszerűen</h2>
        <p class="mb-12 text-lg">Ha szeretnéd bejárni Szarvast vagy Békésszentandrást egy kényelmes rollerrel vagy csak kirándulnál egyet a környéken, keress minket az alábbi elérhetőségen!
            Rollerre fel!</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex items-center justify-center">
                <img style="" src="{{ asset('images/roller/scooterberles.jpg') }}" alt="" class="">
            </div>
            <div class="text-black w-full h-full flex flex-col gap-4">
                <div class="bg-teal-50 rounded text-lg p-6 flex gap-4">
                    <span class="rounded-full border border-black p-4 h-8 w-8 flex items-center justify-center font-bold" >1.</span>
                    <p>Hívd fel a <span class="font-bold"><a style="white-space: nowrap;" href="tel:+36209623362">+36 20 962 3362</a></span> telefonszámot.</p>
                </div>
                <div class="bg-teal-50 rounded text-lg p-6 flex gap-4">
                    <span class="rounded-full border border-black p-4 h-8 w-8 flex items-center justify-center font-bold" >2.</span>
                    <p>A megbeszéltek alapján kiszállítjuk a megadott helyre a rollereket.</p>
                </div>
                <div class="bg-teal-50 rounded text-lg p-6 flex gap-4">
                    <span class="rounded-full border border-black p-4 h-8 w-8 flex items-center justify-center font-bold" >3.</span>
                    <p>A kölcsönzés végén elmegyünk a rollerekért, így neked ezzel sem kell bajlódnod.</p>
                </div>
            </div>
        </div>
    </div>
        </div>
    <div class="flex bg-white">
        <div class="container mx-auto  md:my-32 my-24">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      
                <div class="px-8 text-black w-full h-full flex flex-col gap-4">
                    <div class="flex items-center justify-center">
                        <img  src="{{ asset('images/roller/scoterx9.jpg') }}" alt="" class="px-20">
                    </div>
                </div>
                
                
                <div class="px-8 text-black w-full h-full flex flex-col gap-4">
                    <div class="bg-teal-50 rounded text-lg p-6 flex gap-4">
                        <span class="rounded font-bold flex items-center justify-center" >Hatótáv:</span>
                        <p class="flex items-center">65-100 km</p>
                    </div>
                    <div class="bg-teal-50 rounded text-lg p-6 flex gap-4">
                        <span class="rounded font-bold flex items-center justify-center" >Töltési idő:</span>
                        <p class="flex items-center">6-9 óra</p>
                    </div>
                    <div class="bg-teal-50 rounded text-lg p-6 flex gap-4">
                        <span class="rounded font-bold flex items-center justify-center" >Nettó súly:</span>
                        <p class="flex items-center">20-23 kg</p>
                    </div>
                    <div class="bg-teal-50 rounded text-lg p-6 flex gap-4">
                        <span class="rounded font-bold flex items-center justify-center" >Terhelhetőség:</span>
                        <p class="flex items-center">120 kg</p>
                    </div>
                                        <div class="bg-teal-50 rounded text-lg p-6 flex gap-4">
                        <span class="rounded font-bold flex items-center justify-center" >Még több info:</span>
                        <p class="flex items-center"><a class="mr-2 block" style="color:rgb(31, 102, 202)" href="https://www.kixin.hu/x9/">Kixin.hu</a></p>
                    </div>
                    
                </div>

            </div>
            <div class="flex px-8 w-full items-center justify-center md:my-32 my-24">
                <img class="mx-auto" style="" src="{{ asset('images/roller/szarvas.png') }}" alt="" class="-px-8">
                </div>
        </div>
    </div>

    <div class="container md:flex flex-col mx-auto px-8 md:my-24 my-12x w-full justify-center text-lg" >
<h1 class="text-xl font-semibold mb-6">Kölcsönzéshez kapcsolódó dokumentumok:</h1>
            <a class="mr-2 block" style="color:rgb(31, 102, 202)" href="{{'/images/roller/adatkezelesi-tajekoztato.pdf'}}">Adatkezelési tájékoztató</a><a class="mr-2 block" style="color:rgb(31, 102, 202)" href="{{'/images/roller/berleti-szerzodes.pdf'}}">Bérleti szerződés</a><a class="mr-2 block mb-6" style="color:rgb(31, 102, 202)" href="{{'/images/roller/altalanos-szerzodesi-feltetelek.pdf'}}">Általános szerződési feltételek</a>
    </div>
</x-guest-layout>
