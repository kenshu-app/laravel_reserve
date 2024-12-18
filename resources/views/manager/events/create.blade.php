<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            イベント新規登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="lg:w-2/3 w-full mx-auto overflow-auto p-4">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <tr>
                                        <th
                                            class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                            イベント名</th>
                                        <td class="px-4 py-3">
                                            <input type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th
                                            class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                            開始日時</th>
                                            <td class="px-4 py-3">
                                            <input type="text" id="event_date">
                                        </td>
                                    </tr>
                                        <th
                                            class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                            終了日時</th>
                                            <td class="px-4 py-3">
                                            <input type="text" id="event_date">
                                        </td>
                                    </tr>
                                        <th
                                            class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                            予約人数</th>
                                            <td class="px-4 py-3">
                                            <input type="text">
                                        </td>
                                    </tr>
                                        <th
                                            class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                            定員</th>
                                            <td class="px-4 py-3">
                                            <input type="text">
                                        </td>
                                    </tr>
                                        <th
                                            class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                            表示・非表示</th>
                                            <td class="px-4 py-3">
                                            <input type="text">
                                        </td>
                                    </tr>
                            </table>
                        </div>
                        <div class="flex pl-4 mt-4 ml-4 pb-4 lg:w-2/3 w-full mx-auto">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <button
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
