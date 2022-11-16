<x-app-layout>
    <div class="bg-gray-200 py-32 px-10 min-h-screen ">
        <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">
            <div class="flex items-center justify-center p-12">
                <div class="mx-auto w-full max-w-[550px]">
                    <form action="https://formbold.com/s/FORM_ID" method="POST">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                        First Name
                                    </label>
                                    <input type="text" name="fName" id="fName" placeholder="First Name"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Last Name
                                    </label>
                                    <input type="text" name="lName" id="lName" placeholder="Last Name"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                                How many guest are you bringing?
                            </label>
                            <input type="text" name="guest" id="guest" placeholder="5" min="0"
                                class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Date
                                    </label>
                                    <input type="date" name="date" id="date"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Time
                                    </label>
                                    <input type="time" name="time" id="time"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                Are you coming to the event?
                            </label>
                            <div class="flex items-center space-x-6">
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton1" class="h-5 w-5" />
                                    <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                        Yes
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                                    <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button
                                class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
