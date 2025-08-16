<div class="fixed bottom-6 left-1/2 -translate-x-1/2">
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="toast">
                <div class="flex items-center w-full max-w-xs p-4 mb-4 rounded-lg text-gray-400 bg-gray-700">
                    <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 rounded-lg bg-red-800 text-red-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                        </svg>
                    </div>
                    <div class="ms-3 text-sm font-normal">{{ $error }}</div>
                    <button onclick="this.closest('.toast').remove()" class="ms-auto -mx-1.5 -my-1.5 rounded-lg  p-1.5 inline-flex items-center justify-center h-8 w-8 text-gray-500 hover:text-white cursor-pointer bg-gray-700">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
            </div>
        @endforeach
        @php
            session()->forget('errors');
        @endphp
    @endif
</div>
