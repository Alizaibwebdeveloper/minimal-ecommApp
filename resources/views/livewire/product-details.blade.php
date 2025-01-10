<div>
    <div class="flex gao-5 p-20">
        <div class="w-1/3 mr-10">
            <img src="{{asset('images/1.jpg')}}" alt="product-img" class="object-cover rounded-lg" height="400px" width="400px">
        </div>
        <div class="w-2/3">
            <h1 class="text-sm text-gray-500">
                Open your door to the world of grilling with the sleek Spirit II E-210 gas grill. This two burner grill is built to fit small spaces, and packed with features such as the powerful GS4 grilling system, iGrill capability, and convenient side tables for placing serving trays. Welcome to the Weber family.
            </h1>
            <div class="mt-4 flex justify-between items-center">
                <span class="text-1xl bg-green-200 p-1 rounded-md">Outfit</span>
                <span class="text-lg font-semibold">Price: $100</span>
            </div>
            <div class="mt-4 bg-blue-500 flex justify-center items-center p-2 rounded-lg">
                <i class="fa-solid fa-cart-shopping text-white"></i>
                <button class=" text-white px-4 py-1 rounded-lg "></i>Add to Cart</button>
            </div>
        </div>
    </div>

    {{-- Related Products --}}
    <div class="px-10 md:px-20 py-3">
        <h2 class="font-medium text-[20px] my-3">Related Products</h2>
        @livewire('product-listing')
    </div>
