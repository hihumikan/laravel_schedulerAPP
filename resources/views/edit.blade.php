<x-app-layout>
    <div class="bg-gray-200 py-32 px-10 min-h-screen ">
        <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">
            <div class="flex items-center justify-center p-12">
                <div class="mx-auto w-full max-w-[550px]">
                    <form action="{{ route('schedule.update', $schedule->id) }}" method="POST">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                        内容
                                    </label>
                                    <input type="text" name="context" id="context" placeholder=""
                                        value="{{ $schedule->context }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                        場所
                                    </label>
                                    <input type="text" name="place" id="place" placeholder=""
                                        value="{{ $schedule->place }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                        </div>

                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Start Date
                                    </label>
                                    <input type="datetime-local" name="start" id="start"
                                        value="{{ $schedule->start }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                        End Date
                                    </label>
                                    <input type="datetime-local" name="end" id="end"
                                        value="{{ $schedule->end }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                        </div>
                        <div class="">
                            @csrf
                            @method('PUT')
                            <button type="submit"
                                class="w-full bg-[#6A64F1] text-white py-3 px-6 text-base font-medium rounded-md hover:bg-[#5B55E0] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] focus:ring-offset-2 focus:ring-offset-white">
                                送信
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
